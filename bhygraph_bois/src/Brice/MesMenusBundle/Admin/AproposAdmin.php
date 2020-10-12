<?php

namespace Brice\MesMenusBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AproposAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titre')
            ->add('titre1')
            ->add('contenu')
            ->add('position')
            ->add('enabled')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('titre1')
            ->add('contenu')
            ->add('position')
            ->add('enabled')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('titre')
            ->add('titre1')
            ->add('contenu')
            ->add('position')
            ->add('enabled')
            ->add('image', 'sonata_type_model_list', array('required' => true), array(
                'link_parameters' => array(
                    'context' => 'default',
                    'filter'   => array('context' => array('value' => 'default')),
                    'hide_context' => true,
                ),
            ))
            ->add('image1', 'sonata_type_model_list', array('required' => true), array(
                'link_parameters' => array(
                    'context' => 'default',
                    'filter'   => array('context' => array('value' => 'default')),
                    'hide_context' => true,
                ),
            ))
            ->add('image2', 'sonata_type_model_list', array('required' => true), array(
                'link_parameters' => array(
                    'context' => 'default',
                    'filter'   => array('context' => array('value' => 'default')),
                    'hide_context' => true,
                ),
            ))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('titre')
            ->add('titre1')
            ->add('contenu')
            ->add('position')
            ->add('enabled')
        ;
    }
}
