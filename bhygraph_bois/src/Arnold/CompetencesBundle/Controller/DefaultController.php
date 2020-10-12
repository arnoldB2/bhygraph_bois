<?php

namespace Arnold\CompetencesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArnoldCompetencesBundle:Default:index.html.twig');
    }
}
