<?php

namespace MediaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/1")
     */
    public function indexAction()
    {
        return $this->render('MediaBundle:Default:index.html.twig');
    }
}
