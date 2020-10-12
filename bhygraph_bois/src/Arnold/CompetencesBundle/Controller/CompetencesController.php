<?php

namespace Arnold\CompetencesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFondation\Request;

class CompetencesController extends Controller
{
    public function getallcompetencesAction() 
    {

        $em = $this->getDoctrine()->getManager();

        $competences = $em->getRepository('ArnoldCompetencesBundle:Competences')->findBy([]);

        return $this->render('ArnoldCompetencesBundle:Competences:getallcompetences.html.twig', array(
            'competences' =>$competences
        ));
    }

    public function getcompetencesAction($id)
    {
        $id = (int) $id;

        // permet de recuperation du entiey manager
        $em = $this-> getDoctrine() ->getManage(); 

// permet de recuperer et envoyer une requette
        $competences = $em->getRepository('ArnoldCompetencesBundle:Competences')->findBy(['id'=>$id]);

// verifier que l'entity id est vide
        if(!$competences){
            throw new NotFoundHttpExeption('cet Competences n\'existe pas');

        };

        $competences = $competences[0];

        return $this->render('ArnoldCompetencesBundle:Competences:getcompetences.html.twig', array(
            'competences' => $competences
        ));
    }

}
