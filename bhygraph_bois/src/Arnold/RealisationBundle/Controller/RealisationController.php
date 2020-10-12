<?php

namespace Arnold\RealisationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;//permet de renvoyer un message d'erreur
use Symfony\Component\HttpFondation\Request;

class RealisationController extends Controller
{
    public function getAction($id)
    {
        $id = (int) $id;

        // permet de recuperation du entiey manager
        $em = $this-> getDoctrine() ->getManage();

// permet de recuperer et envoyer une requette
        $Realis = $em->getRepository('ArnoldRealisationBundle:Realisation')->findBy(['id'=>$id]);

// verifier que l'entity id est vide
        if(!$Realis){
            throw new NotFoundHttpExeption('cet Realisation n\'existe pas');

        };

        $Realis = $Realis[0];

        return $this->render('ArnoldRealisationBundle:Realisation:get.html.twig', array(
            'Realis' => $Realis
        ));
    }

    public function getrecentAction()
    {

        $em = $this->getDoctrine()->getManager();

        $categs = $em->getRepository('BriceMesMenusBundle:Categorie')->findBy([]);

        return $this->render('ArnoldRealisationBundle:Realisation:getrecent.html.twig', array(
            'Categs' =>$categs
        ));
    }

    public function getallAction() 
    {
        $em = $this->getDoctrine()->getManager();

        $realisations = $em->getRepository('ArnoldRealisationBundle:Realisation')->findBy([]);

        return $this->render('ArnoldRealisationBundle:Realisation:getall.html.twig', array(
            'realisations' =>$realisations
        ));
    }

    public function getcategorieAction($id)
    {
        $id = (int) $id;

        $em = $this->getDoctrine()->getManager();

        $realistions = $em->getRepository('ArnoldRealisationBundle:Realisation')->findBy(['categorie'=>$id]);

        return $this->render('ArnoldRealisationBundle:Realisation:getcategorie.html.twig', array(
            'realisations'=> $realistions
        ));
    }

    public function getrecentcategorieAction($id, $limit)
    {
        $id = (int) $id;

        $limit = (int) $limit; 

        $em = $this->getDoctrine()->getManager();

        $realistions = $em->getRepository('ArnoldRealisationBundle:Realisation')->recentcategorie($limit, $id);

        return $this->render('ArnoldRealisationBundle:Realisation:getrecentcategorie.html.twig', array(
            'realistions'=> $realistions 
        ));
    }

    

}
