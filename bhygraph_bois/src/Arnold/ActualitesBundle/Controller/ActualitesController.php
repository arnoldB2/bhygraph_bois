<?php

namespace Arnold\ActualitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpExeption; //permet de renvoyer un message d'erreur
use Symfony\Component\HttpFoundation\Request; //permet 

class ActualitesController extends Controller
{
    public function getAction($id)
    {

        $id = (int) $id;

        // permet de recuperation du entiey manager
        $em = $this-> getDoctrine() ->getManager();

// permet de recuperer et envoyer une requette
        $actu = $em->getRepository('ArnoldActualitesBundle:Actualites')->findBy(['id'=>$id]);

// verifier que l'entity id est vide
        if(!$actu){
            throw new NotFoundHttpExeption('cet actualiter n\'existe pas');

        };

        $actu = $actu[0];

        return $this->render('ArnoldActualitesBundle:Actualites:get.html.twig', array(
            'actu' => $actu,
            
        ));
    }

    public function getactualiteshomeAction($limit)
    {
        $limit = (int) $limit;
        
        $em = $this->getDoctrine()->getManager();

        $actu = $em->getRepository('ArnoldActualitesBundle:Actualites')->recentActu($limit);

        return $this->render('ArnoldActualitesBundle:Actualites:getactualiteshome.html.twig', array(
            'actus' => $actu
        ));
    }

    public function getactualitescountAction($id)
    {
        $id = (int) $id;
        
        $em = $this->getDoctrine()->getManager();

        $actu = $em->getRepository('ArnoldCommentaireBundle:Commentaire')->findBy(['actualites'=>$id]);

        $count = count($actu);

        return $this->render('ArnoldActualitesBundle:Actualites:getactualitescount.html.twig', array(
            'count' => $count 
        )); 
    }

    public function getallactualitesAction(Request $request)
    {
        $page=$request->get('page', 1);

        $count = $request->get('count', 3);

        $em = $this->getDoctrine()->getManager();

        $pager = $this->get('Knp_paginator');

        $article = $em->getRepository('ArnoldActualitesBundle:Actualites')->findBy([]);

        $pager= $pager->paginate($article, $page, $count);

        $pageData = $pager->getPaginationData(); 

        return $this->render('ArnoldActualitesBundle:Actualites:getallactualites.html.twig', array(

            'pager'=> $pager, 'pageData'=> $pageData
        ));
    }

    public function getrecentactualitesAction($limit)
    {
        $limit = (int) $limit;

        $em = $this->getDoctrine()->getManager();

        $actu = $em->getRepository('ArnoldActualitesBundle:Actualites')->recentActu($limit);

        return $this->render('ArnoldActualitesBundle:Actualites:getrecentactualites.html.twig', array(
            'actu' => $actu
        ));
    }

}
