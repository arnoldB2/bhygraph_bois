<?php

namespace Arnold\PartenaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartenaireController extends Controller
{
    public function getallAction()
    {
        $em = $this->getDoctrine()->getManager();

        $partenaire = $em->getRepository('ArnoldPartenaireBundle:Partenaire')->findBy([]);

        return $this->render('ArnoldPartenaireBundle:Partenaire:getall.html.twig', array(
            
            'partenaire' =>$partenaire
        )); 
    }

}
