<?php

namespace Arnold\CommentaireBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CommentaireAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('auteur')
            ->add('message')
            ->add('datepublication')
            ->add('enabled', null, array('editable'=>true)) 
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('auteur')
            ->add('message')
            ->add('datepublication')
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
            ->add('auteur')
            ->add('message')
            ->add('enabled')
            ->add('actualites')
            ->add('realisation')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('auteur')
            ->add('message')
            ->add('datepublication')
            ->add('enabled')
        ;
    }
}
