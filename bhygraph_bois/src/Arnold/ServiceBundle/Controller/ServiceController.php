<?php

namespace Arnold\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\HttpException;//permet de renvoyer un message d'erreur
use Symfony\Component\HttpFoundation\Request;

class ServiceController extends Controller
{
    public function getAction($id) 
    {
        $id = (int) $id; 

        $em = $this->getDoctrine()->getManager(); 

        $service = $em->getRepository('ArnoldServiceBundle:Service')->findBy(['id'=>$id]);

        if(!$service){
            throw new NotFoundHttpExeption('cet Service n\'existe pas');

        };

        $service = $service[0];  

        return $this->render('ArnoldServiceBundle:Service:get.html.twig', array(
            'service' =>$service
        ));
    }

    public function getrecentAction($limit)
    {
        
        $limit = (int) $limit;

        $em = $this->getDoctrine()->getManager();

        $service = $em->getRepository('ArnoldServiceBundle:Service')->recentService($limit);

        return $this->render('ArnoldServiceBundle:Service:getrecent.html.twig', array(
            'service' =>$service
        ));
    }

    public function getallAction() 
    {

        $em = $this->getDoctrine()->getManager();

        $service = $em->getRepository('ArnoldServiceBundle:Service')->findBy([]);
        
        return $this->render('ArnoldServiceBundle:Service:getall.html.twig', array(
            'service' =>$service
        ));
    }

    public function getparentsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $service = $em->getRepository('ArnoldServiceBundle:Service')->queryallparentshome();

        return $this->render('ArnoldServiceBundle:Service:getparents.html.twig', array(
            'service' =>$service
        ));
    }

    public function getchildrenAction($id)
    {
        $id = (int)$id;
        $em = $this->getDoctrine()->getManager();
        $children = $em->getRepository('ArnoldServiceBundle:Service')->queryallchildrenhome($id);
        return $this->render('ArnoldServiceBundle:Service:getchildren.html.twig', array(
            'children' => $children
        ));
    }

}
