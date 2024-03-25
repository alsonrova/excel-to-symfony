<?php

namespace App\Form;

use App\Entity\Customer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CustomerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('business_account')
            ->add('event_account')
            ->add('last_event_account')
            ->add('file_number')
            ->add('civility')
            ->add('current_owner')
            ->add('name')
            ->add('firstname')
            ->add('road_information')
            ->add('postcode')
            ->add('city')
            ->add('home_phone_number')
            ->add('mobile_phone_number')
            ->add('job_phone_number')
            ->add('email')
            ->add('registration_date', null, [
                'widget' => 'single_text',
            ])
            ->add('purchase_date', null, [
                'widget' => 'single_text',
            ])
            ->add('last_event_date', null, [
                'widget' => 'single_text',
            ])
            ->add('make')
            ->add('model')
            ->add('version')
            ->add('vin')
            ->add('registration')
            ->add('type')
            ->add('mileage')
            ->add('vn_seller')
            ->add('vo_seller')
            ->add('commentary')
            ->add('type_seller')
            ->add('seller_file_number')
            ->add('event_date', null, [
                'widget' => 'single_text',
            ])
            ->add('origin_event')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Customer::class,
        ]);
    }
}
