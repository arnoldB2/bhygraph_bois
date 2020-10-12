<?php

namespace Brice\MesMenusBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class DevisAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('email')
            ->add('nom')
            ->add('objet')
            ->add('description')
            ->add('Service')
            ->add('sendat')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('email')
            ->add('nom')
            ->add('objet')
            ->add('description')
            ->add('Service')
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
            ->add('nom')
            ->add('objet')
            ->add('Service')
            ->add('description')
            ->add('sendat')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('email')
            ->add('nom')
            ->add('objet')
            ->add('description')
            ->add('Service')
            ->add('sendat')
        ;
    }
}
