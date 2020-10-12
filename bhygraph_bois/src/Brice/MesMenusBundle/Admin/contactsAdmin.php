<?php

namespace Brice\MesMenusBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class contactsAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('objet')
            ->add('nom')
            ->add('message')
            ->add('sendat')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('email')
            ->add('objet')
            ->add('nom')
            ->add('message')
            ->add('sendat')
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
            ->add('email')
            ->add('objet')
            ->add('nom')
            ->add('message')
            ->add('sendat')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('email')
            ->add('objet')
            ->add('nom')
            ->add('message')
            ->add('sendat')
        ;
    }
}
