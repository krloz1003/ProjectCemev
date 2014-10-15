<?php

namespace Salud\HospitalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('HospitalBundle:Default:index.html.twig', array('name' => $name));
    }
}
