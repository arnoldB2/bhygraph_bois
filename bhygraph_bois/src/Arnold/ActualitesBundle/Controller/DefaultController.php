<?php

namespace Arnold\ActualitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArnoldActualitesBundle:Default:index.html.twig');
    }
}
