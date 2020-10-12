<?php

namespace Arnold\ActualitesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class ActualitesAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('titre')
            ->add('description')
            ->add('presentation')
            ->add('enabled')
            ->add('publishat')  
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('description')
            ->add('presentation')
            ->add('enabled', null, array('editable'=>true))
            ->add('publishat')
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
            ->add('description', CKEditorType::class, array('config_name' => 'basic_config'))
            ->add('presentation')
            ->add('enabled')
            ->add('image', 'sonata_type_model_list', array('required' => true), array(
                'link_parameters' => array(
                    'context' => 'default',
                    'filter'   => array('context' => array('value' => 'default')),
                    'hide_context' => true,
                ),
            ))
            ->add('video', 'sonata_type_model_list', array('required' => true), array(
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
            ->add('description')
            ->add('presentation')
            ->add('enabled')
            ->add('publishat')
            ->add('image')
            ->add('video')
        ;
    }
}
