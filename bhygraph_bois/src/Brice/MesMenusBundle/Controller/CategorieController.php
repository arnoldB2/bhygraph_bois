<?php

namespace Brice\MesMenusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategorieController extends Controller
{
    public function getallAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $Categorie = $em->getRepository('BriceMesMenusBundle:Categorie')->findBy([]);

        return $this->render('BriceMesMenusBundle:Categorie:getall.html.twig', array(
            'Categorie' =>$Categorie
        ));
    }

    public function gethomeAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $Categorie = $em->getRepository('BriceMesMenusBundle:Categorie')->findBy([]);

        return $this->render('BriceMesMenusBundle:Categorie:getHome.html.twig', array(
            'Categorie' =>$Categorie
        ));
    }


}
