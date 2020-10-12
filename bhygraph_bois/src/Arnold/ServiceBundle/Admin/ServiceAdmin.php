<?php

namespace Arnold\ServiceBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Arnold\ServiceBundle\Repository\ServiceRepository;

class ServiceAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('description')
            ->add('presentation')
            ->add('enabled')
            ->add('createdat')
            ->add('parents')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('nom')
            ->add('description')
            ->add('presentation') 
            ->add('enabled' , null, array('editable'=>true))
            ->add('createdat')
            ->add('parents')
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
            ->add('enabled')
            ->add('parents' , null, array(
                  'query_builder'=> function(ServiceRepository $repo)
                  {
                      return $repo->queryallParents();
                  }
            ))
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
            ->add('createdat')
            ->add('parents')
            ->add('image')
            ->add('image1')
            ->add('image2')
        ;
    }
}
