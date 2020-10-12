<?php

namespace Brice\MesMenusBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DevisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('email')->add('nom')->add('objet')->add('description')->add('Service');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Brice\MesMenusBundle\Entity\Devis'
        ));
    } 

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'brice_mesmenusbundle_devis';
    }


}
