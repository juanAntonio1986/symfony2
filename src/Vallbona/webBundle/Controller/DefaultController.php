<?php

namespace Vallbona\webBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VallbonawebBundle:Default:index.html.twig');
    }
     public function articlesAction()
    {
        return $this->render('VallbonawebBundle:Default:articles.html.twig');
    }
}
