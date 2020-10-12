<?php

namespace Brice\MesMenusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Brice\MesMenusBundle\Form\contactsType;
use Brice\MesMenusBundle\Entity\contacts;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class contactsController extends Controller
{
    public function createAction(Request $request)
    {
        $conts = new contacts();

        $form = $this->createForm(contactsType::class, $conts);
    if ($request->isMethod('POST')){

        if ($form ->handleRequest($request)-> isValid()){
            $em = $this->getDoctrine()->getManager();
            $contacts= $form->getData();
            $em -> persist($contacts);
            $em -> flush();
            return $this->redirect($this->generateURL('homepage')); 
        } else {
            throw new NotFoundHttpException('le contacts n\'a pas ete envoyer');
        }
    } 
        return $this->render('BriceMesMenusBundle:contacts:create.html.twig', array(
            'form' => $form -> createView()
        ));
    }

}
