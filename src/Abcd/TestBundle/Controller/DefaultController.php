<?php

namespace Abcd\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AbcdTestBundle:Default:index.html.twig', array('name' => $name));
    }
}
