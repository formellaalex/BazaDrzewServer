<?php

namespace drzewaDbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('drzewaDbBundle:Default:index.html.twig', array('name' => $name));
    }
}
