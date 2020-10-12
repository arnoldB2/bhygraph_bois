<?php

namespace Arnold\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArnoldServiceBundle:Default:index.html.twig');
    }
}
