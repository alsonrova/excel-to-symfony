<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $business_account = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $event_account = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $last_event_account = null;

    #[ORM\Column(nullable: true)]
    private ?int $file_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $civility = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $current_owner = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $road_information = null;

    #[ORM\Column (nullable: true)]
    private ?int $postcode = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $city = null;

    #[ORM\Column(nullable: true)]
    private ?int $home_phone_number = null;

    #[ORM\Column(nullable: true)]
    private ?int $mobile_phone_number = null;

    #[ORM\Column(nullable: true)]
    private ?int $job_phone_number = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $registration_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $purchase_date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $last_event_date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $make = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $model = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $version = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vin = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $registration = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(nullable: true)]
    private ?int $mileage = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vn_seller = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vo_seller = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $commentary = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type_seller = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $seller_file_number = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $event_date = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $origin_event = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $energy = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBusinessAccount(): ?string
    {
        return $this->business_account;
    }

    public function setBusinessAccount(string $business_account): static
    {
        $this->business_account = $business_account;

        return $this;
    }

    public function getEventAccount(): ?string
    {
        return $this->event_account;
    }

    public function setEventAccount(string $event_account): static
    {
        $this->event_account = $event_account;

        return $this;
    }

    public function getLastEventAccount(): ?string
    {
        return $this->last_event_account;
    }

    public function setLastEventAccount(string $last_event_account): static
    {
        $this->last_event_account = $last_event_account;

        return $this;
    }

    public function getFileNumber(): ?int
    {
        return $this->file_number;
    }

    public function setFileNumber(int $file_number): static
    {
        $this->file_number = $file_number;

        return $this;
    }

    public function getCivility(): ?string
    {
        return $this->civility;
    }

    public function setCivility(?string $civility): static
    {
        $this->civility = $civility;

        return $this;
    }

    public function getCurrentOwner(): ?string
    {
        return $this->current_owner;
    }

    public function setCurrentOwner(?string $current_owner): static
    {
        $this->current_owner = $current_owner;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): static
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getRoadInformation(): ?string
    {
        return $this->road_information;
    }

    public function setRoadInformation(?string $road_information): static
    {
        $this->road_information = $road_information;

        return $this;
    }

    public function getPostcode(): ?int
    {
        return $this->postcode;
    }

    public function setPostcode(int $postcode): static
    {
        $this->postcode = $postcode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getHomePhoneNumber(): ?int
    {
        return $this->home_phone_number;
    }

    public function setHomePhoneNumber(?int $home_phone_number): static
    {
        $this->home_phone_number = $home_phone_number;

        return $this;
    }

    public function getMobilePhoneNumber(): ?int
    {
        return $this->mobile_phone_number;
    }

    public function setMobilePhoneNumber(?int $mobile_phone_number): static
    {
        $this->mobile_phone_number = $mobile_phone_number;

        return $this;
    }

    public function getJobPhoneNumber(): ?int
    {
        return $this->job_phone_number;
    }

    public function setJobPhoneNumber(?int $job_phone_number): static
    {
        $this->job_phone_number = $job_phone_number;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registration_date;
    }

    public function setRegistrationDate(?\DateTimeInterface $registration_date): static
    {
        $this->registration_date = $registration_date;

        return $this;
    }

    public function getPurchaseDate(): ?\DateTimeInterface
    {
        return $this->purchase_date;
    }

    public function setPurchaseDate(?\DateTimeInterface $purchase_date): static
    {
        $this->purchase_date = $purchase_date;

        return $this;
    }

    public function getLastEventDate(): ?\DateTimeInterface
    {
        return $this->last_event_date;
    }

    public function setLastEventDate(?\DateTimeInterface $last_event_date): static
    {
        $this->last_event_date = $last_event_date;

        return $this;
    }

    public function getMake(): ?string
    {
        return $this->make;
    }

    public function setMake(?string $make): static
    {
        $this->make = $make;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): static
    {
        $this->model = $model;

        return $this;
    }

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(?string $version): static
    {
        $this->version = $version;

        return $this;
    }

    public function getVin(): ?string
    {
        return $this->vin;
    }

    public function setVin(?string $vin): static
    {
        $this->vin = $vin;

        return $this;
    }

    public function getRegistration(): ?string
    {
        return $this->registration;
    }

    public function setRegistration(?string $registration): static
    {
        $this->registration = $registration;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getMileage(): ?int
    {
        return $this->mileage;
    }

    public function setMileage(?int $mileage): static
    {
        $this->mileage = $mileage;

        return $this;
    }

    public function getVnSeller(): ?string
    {
        return $this->vn_seller;
    }

    public function setVnSeller(?string $vn_seller): static
    {
        $this->vn_seller = $vn_seller;

        return $this;
    }

    public function getVoSeller(): ?string
    {
        return $this->vo_seller;
    }

    public function setVoSeller(?string $vo_seller): static
    {
        $this->vo_seller = $vo_seller;

        return $this;
    }

    public function getCommentary(): ?string
    {
        return $this->commentary;
    }

    public function setCommentary(?string $commentary): static
    {
        $this->commentary = $commentary;

        return $this;
    }

    public function getTypeSeller(): ?string
    {
        return $this->type_seller;
    }

    public function setTypeSeller(?string $type_seller): static
    {
        $this->type_seller = $type_seller;

        return $this;
    }

    public function getSellerFileNumber(): ?string
    {
        return $this->seller_file_number;
    }

    public function setSellerFileNumber(?string $seller_file_number): static
    {
        $this->seller_file_number = $seller_file_number;

        return $this;
    }

    public function getEventDate(): ?\DateTimeInterface
    {
        return $this->event_date;
    }

    public function setEventDate(?\DateTimeInterface $event_date): static
    {
        $this->event_date = $event_date;

        return $this;
    }

    public function getOriginEvent(): ?string
    {
        return $this->origin_event;
    }

    public function setOriginEvent(?string $origin_event): static
    {
        $this->origin_event = $origin_event;

        return $this;
    }

    public function getEnergy(): ?string
    {
        return $this->energy;
    }

    public function setEnergy(?string $energy): static
    {
        $this->energy = $energy;

        return $this;
    }
}
