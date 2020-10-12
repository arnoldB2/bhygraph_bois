<?php

namespace Arnold\CommentaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArnoldCommentaireBundle:Default:index.html.twig');
    }
}
