<?php

namespace App\Form;

use App\Entity\Site;
use App\Entity\Client;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('link')
            ->add('versionPHP', ChoiceType::class, [
                'choices'  => [
                    '7.4' => '7.4',
                    '7.3' => '7.3',
                    '7.2' => '7.2',
                    '7.1' => '7.1',
                    '7.0' => '7.0',
                ],
            ])
            ->add('client', EntityType::class, [
                'placeholder' => 'Choisis un client',
                'required' => true,
                'class' => Client::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Site::class,
        ]);
    }
}
