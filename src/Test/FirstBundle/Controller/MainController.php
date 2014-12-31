<?php

namespace Test\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DOMDocument;

class MainController extends Controller
{
    public function dadadaAction($name)
    {
       // return $this->render('TestFirstBundle:Default:index.html.twig', array('name' => $name));

        return $this->hallo($name);
    }

    public function hallo($name)
    {
        return $this->render('TestFirstBundle:Default:index.html.twig', array('name' => $name));
    }

}
