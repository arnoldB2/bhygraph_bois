<?php

namespace Brice\MesMenusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AproposController extends Controller
{
    public function getAction($id) 
    {
        $id = (int) $id;

        $em = $this->getDoctrine()->getManager();

        $apropos = $em->getRepository('BricedCommentaireBundle:apropos')->findBy(['id' =>$id] );
        if(!$apropos){
            throw new NotFoundHttpExeption('cet apropos n\'existe pas');

        }; 

        $apropos = $apropos[0];
        return $this->render('BriceMesMenusBundle:Apropos:get.html.twig', array(
            'apropos' => $apropos
        ));
    }

    public function getallAction()
    {
        $em = $this->getDoctrine()->getManager();

        $apropos = $em->getRepository('BriceMesMenusBundle:Apropos')->findBy([] );

        return $this->render('BriceMesMenusBundle:Apropos:getall.html.twig', array(
            'apropos' => $apropos
        ));
    }

}
