<?php

namespace Arnold\CommentaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Arnold\CommentaireBundle\Entity\Commentaire;
use Arnold\CommentaireBundle\Form\CommentaireType;

class CommentaireController extends Controller
{
    public function getrecentrealisationAction($limit,$id)
    {
        $id = (int) $id;
        $limit = (int) $limit;  

        $em = $this->getDoctrine()->getManager(); 

        $actu = $em->getRepository('ArnoldCommentaireBundle:Commentaire')->recentrealisation($limit, $id);

        return $this->render('ArnoldCommentaireBundle:Commentaire:getrecentrealisation.html.twig', array(
            'comment' =>$comment
        ));
    }

    public function getrecentnewsAction($limit, $id)
    {
        $id = (int) $id;
        $limit = (int) $limit;

        $em = $this->getDoctrine()->getManager();

        $comment = $em->getRepository('ArnoldCommentaireBundle:Commentaire')->recentActu($limit, $id);
        return $this->render('ArnoldCommentaireBundle:Commentaire:getrecentnews.html.twig', array(
            'comment' =>$comment
        ));
    }

    public function getallrealisationAction($id)
    {
        $id = (int) $id;

        $em = $this->getDoctrine()->getManager();

        $realis = $em->getRepository('ArnoldCommentaireBundle:Commentaire')->findBy(['realisation'=>$id]);


        return $this->render('ArnoldCommentaireBundle:Commentaire:getallCommentaire.html.twig', array(

            'realis' =>$realis
       
        ));
    }

    public function getallnewsAction($id)
    {
        $id = (int) $id;

        $em = $this->getDoctrine()->getManager();

        $com = $em->getRepository('ArnoldCommentaireBundle:Commentaire')->findBy(['actualites'=>$id]);

        return $this->render('ArnoldCommentaireBundle:Commentaire:getallnews.html.twig', array(
            'com'=> $com
        ));
    }

    public function createRealisationAction(Request $request, $id)
    {
        $id = (int)$id;

        $com = new Commentaire();
//perment d'installer un formulaire a partir du model creer
        $form = $this->createForm(CommentaireType::class, $com);
        //permet
        if ($form -> isValid()){
            $em = $this->getDoctrine()->getManager();
            $rea = $em->getRepository('ArnoldRealisationBundle:Realisation')->find($id);
            $com = $form->getData();
            $com = $com->setRealisation($rea);
            $em -> persist($com);
            $em -> flush();

        }
        return $this->render('ArnoldCommentaireBundle:Commentaire:createrealisation.html.twig', array(
            'form' => $form -> createView()
        )); 
    }

    public function createActualitesAction(Request $request,$id)
    {
        $id = (int)$id;
        $com = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $com);
     if ($request->isMethod('POST')) {
        if ($form -> handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $act = $em->getRepository('ArnoldActualitesBundle:Actualites')->find($id);
            $com = $form->getData();
            $com = $com->setActualites($act);
            $em -> persist($com);  
            $em -> flush();
            return $this->redirect($this->generateUrl('arnold_actualites_Actualites_get', ['id' => $id]));
        } else {
            throw new NotFoundHttpException('Le devis n\'a pas été envoyé ');
        }
    }
        return $this->render('ArnoldCommentaireBundle:Commentaire:createactualites.html.twig', array(
            'form' => $form -> createView(), 'id' => $id
        ));
    }
}