<?php

namespace Arnold\PartenaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArnoldPartenaireBundle:Default:index.html.twig');
    }
}
