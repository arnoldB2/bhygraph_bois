<?php

namespace Arnold\CompetencesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CompetencesAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('titre')
            ->add('description')
            ->add('position')
            ->add('enabled')
            ->add('createdat')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('titre')
            ->add('description')
            ->add('position')
            ->add('enabled', null, array('editable'=>true))
            ->add('createdat')
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
            ->add('nom')
            ->add('titre')
            ->add('description')
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
            ->add('nom')
            ->add('titre')
            ->add('description')
            ->add('position')
            ->add('enabled')
            ->add('createdat')
        ;
    }
}
