<?php

namespace Arnold\RealisationBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class RealisationAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('description')
            ->add('presentation')
            ->add('enabled')
            ->add('categorie')
            ->add('daterealisation')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('description')
            ->add('presentation')
            ->add('enabled', null, array('editable'=>true))
            ->add('daterealisation')
            ->add('categorie')
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
            ->add('description')
            ->add('presentation')
            ->add('categorie')
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
            ->add('description')
            ->add('presentation')
            ->add('enabled')
            ->add('daterealisation')
            ->add('categorie')
            ->add('image')
            ->add('image1')
            ->add('image2')
        ;
    }
}
