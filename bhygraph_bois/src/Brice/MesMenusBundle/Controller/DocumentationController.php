<?php

namespace Brice\MesMenusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocumentationController extends Controller
{
    public function getallAction()
    {

        $em = $this->getDoctrine()->getManager();
        
        $Documentation = $em->getRepository('BriceMesMenusBundle:Documentation')->findBy([]);

        return $this->render('BriceMesMenusBundle:Documentation:getall.html.twig', array(
            'Documentation' =>$Documentation 
        ));
    }

    public function downloadAction()
    {
        return $this->render('BriceMesMenusBundle:Documentation:download.html.twig', array(
            // ...
        )); 
    }

}
