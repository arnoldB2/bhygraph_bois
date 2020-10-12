<?php

namespace Arnold\RealisationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArnoldRealisationBundle:Default:index.html.twig');
    }
}
