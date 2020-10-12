<?php

namespace Brice\MesMenusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Brice\MesMenusBundle\Form\DevisType;
use Brice\MesMenusBundle\Entity\Devis;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DevisController extends Controller
{
    public function createAction(Request $request) 
    {
        $dev = new Devis();
        $form = $this->createForm(DevisType::class, $dev); 
    if($request->isMethod('POST')){
    
        if ($form ->handleRequest($request)-> isValid()){
            $em = $this->getDoctrine()->getManager();
            // $rea = $em->getRepository('ArnoldServiceBundle:Service')->find($id);
            $devis = $form->getData();
            // $devis = $devis->setService($service);
            $em -> persist($devis);
            $em -> flush(); 
            return $this->redirect($this->generateURL('homepage')); 
        } else {
            throw new NotFoundHttpException('le devis n\'a pas ete envoyer');
        }
    }
        return $this->render('BriceMesMenusBundle:Devis:create.html.twig', array(
            'form' => $form -> createView()
        ));
    }

    public function getallAction(Request $request)
    {
        $dev = new Devis();
        $form = $this->createForm(DevisType::class, $dev); 
    if($request->isMethod('POST')){
    
        if ($form ->handleRequest($request)-> isValid()){
            $em = $this->getDoctrine()->getManager();
            // $rea = $em->getRepository('ArnoldServiceBundle:Service')->find($id);
            $devis = $form->getData();
            // $devis = $devis->setService($service);
            $em -> persist($devis);
            $em -> flush(); 
            return $this->redirect($this->generateURL('homepage')); 
        } else {
            throw new NotFoundHttpException('le devis n\'a pas ete envoyer');
        }
    }
        return $this->render('BriceMesMenusBundle:Devis:getall.html.twig', array(
            'form' => $form -> createView()

        ));
    }

}
