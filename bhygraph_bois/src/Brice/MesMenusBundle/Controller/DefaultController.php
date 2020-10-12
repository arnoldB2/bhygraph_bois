<?php

namespace Brice\MesMenusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BriceMesMenusBundle:Default:index.html.twig');
    }
}
