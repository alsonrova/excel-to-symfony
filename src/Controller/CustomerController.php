<?php

namespace App\Controller;

use DateTime;
use App\Form\AddDataType;
use App\Form\CustomerType;
use App\Entity\Customer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use PhpOffice\PhpSpreadsheet\IOFactory;

class CustomerController extends AbstractController
{
    #[Route('/', name: 'app_customer')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AddDataType::class);
        $form->handleRequest($request);
        $customers = $entityManager->getRepository(Customer::class)->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $excelFile = $form->get('file')->getData();
            $spreadsheet = IOFactory::load($excelFile);
            $sheetData = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
            foreach ($sheetData as $row) {
                if ($row['G'] == 'Nom' && $row['H'] == 'Prénom') {
                    continue;
                }
                $entity = new Customer();
                $row["A"] ? $entity->setBusinessAccount($row['A']) : $entity->setBusinessAccount("");
                $row["B"] ? $entity->setEventAccount($row['B']) : $entity->setEventAccount("");
                $row["C"] ? $entity->setLastEventAccount($row['C']) : $entity->setLastEventAccount("");
                $row["D"] && $entity->setFileNumber((int)$row['D']);
                $row["E"] ? $entity->setCivility($row['E']) : $entity->setCivility("");
                $row["F"] ? $entity->setCurrentOwner($row['F']) : $entity->setCurrentOwner("");
                $row["G"] ? $entity->setName($row['G']) : $entity->setName("");
                $row["H"] ? $entity->setFirstname($row['H']) : $entity->setFirstname("");
                $row["I"] ? $entity->setRoadInformation($row['I']) : $entity->setRoadInformation(""); // Assuming this is RoadInformation based on previous properties
                $row["K"] ? $entity->setPostcode((int)$row['K']) : $entity->setPostcode(0);
                $row["L"] ? $entity->setCity($row['L']) : $entity->setCity("");
                $row["M"] && $entity->setHomePhoneNumber((int)$row['M']);
                $row["N"] && $entity->setMobilePhoneNumber((int)$row['N']);
                $row["O"] && $entity->setJobPhoneNumber((int)$row['O']);
                $row["P"] ? $entity->setEmail($row['P']) : $entity->setEmail("");
                DateTime::createFromFormat('d/m/Y', $row['Q']) && $entity->setRegistrationDate(DateTime::createFromFormat('d/m/Y', $row['Q']));
                DateTime::createFromFormat('d/m/Y', $row['R']) && $entity->setPurchaseDate(DateTime::createFromFormat('d/m/Y', $row['R']));
                DateTime::createFromFormat('d/m/Y', $row['S']) && $entity->setLastEventDate(DateTime::createFromFormat('d/m/Y', $row['S']));
                $row["T"] ? $entity->setMake($row['T']) : $entity->setMake("");
                $row["U"] ? $entity->setModel($row['U']) : $entity->setModel("");
                $row["V"] ? $entity->setVersion($row['V']) : $entity->setVersion("");
                $row["W"] ? $entity->setVin($row['W']) : $entity->setVin("");
                $row["X"] ? $entity->setRegistration($row['X']) : $entity->setRegistration("");
                $row["Y"] ? $entity->setType($row['Y']) : $entity->setType("");
                $row["Z"] ? $entity->setMileage((int)$row['Z']) : $entity->setMileage(null); // Assuming mileage is an integer
                $row["AA"] ? $entity->setEnergy($row['AA']) : $entity->setEnergy("");
                $row["AB"] ? $entity->setVnSeller($row['AB']) : $entity->setVnSeller("");
                $row["AC"] ? $entity->setVoSeller($row['AC']) : $entity->setVoSeller("");
                $row["AD"] ? $entity->setCommentary($row['AD']) : $entity->setCommentary("");
                $row["AE"] ? $entity->setTypeSeller($row['AE']) : $entity->setTypeSeller("");
                $row["AF"] ? $entity->setSellerFileNumber($row['AF']) : $entity->setSellerFileNumber("");
                // Assuming this is a date based on previous properties
                DateTime::createFromFormat('d/m/Y', $row['AH']) && $entity->setEventDate(DateTime::createFromFormat('d/m/Y', $row['AH']));
                $row["AI"] ? $entity->setOriginEvent($row['AI']) : $entity->setOriginEvent("");
                
                // $date = DateTime::createFromFormat('d/m/Y', $row['S']);
                
                // if ($date !== false) {
                //     $entity->setLastEventDate($date);
                // } else {
                //     $this->addFlash('error', "Erreur lors de la conversion de la date : {$row['S']}");
                //     continue;
                // }
                $entityManager->persist($entity);
                $entityManager->flush();
                $this->addFlash('success', 'Les données ont été importées avec succès.');
               
            }   
            return $this->redirectToRoute('app_customer');
        }

        return $this->render('index.html.twig',[
            'form' => $form->createView(),
            'customers' => $customers
        ]);
    }

    #[Route('/customers', name: 'app_customer_json')]
    public function customers(Request $request, EntityManagerInterface $entityManager, SerializerInterface $serializer): Response
    {
        $customers = $entityManager->getRepository(Customer::class)->findAll();
        $json = $serializer->serialize($customers, 'json', [
            DateTimeNormalizer::FORMAT_KEY => 'Y-m-d',
        ]);
        $response = new Response($json);

        return $response;
    }


    #[Route('/customer/{id}', name: 'app_customer_info')]
    public function customer(Request $request, EntityManagerInterface $entityManager): Response
    {
       
        $customer = $entityManager->getRepository(Customer::class)->find($request->get('id'));
        $form = $this->createForm(CustomerType::class, $customer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($customer);
            $entityManager->flush();

            return $this->redirectToRoute('app_customer');
        }

        return $this->render('customer.html.twig',[
            'form' => $form->createView(),
            'customer' => $customer,
        ]); 
    }

    #[Route('/delete/{id}', name: 'app_customer_delete')]
    public function delete(Request $request, EntityManagerInterface $entityManager): Response
    {
       
        $customer = $entityManager->getRepository(Customer::class)->find($request->get('id'));
        $entityManager->remove($customer);
        $entityManager->flush();

        return $this->redirectToRoute('app_customer');
    }
} 