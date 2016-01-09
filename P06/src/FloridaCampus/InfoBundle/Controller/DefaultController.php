<?php

namespace FloridaCampus\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoBundle:Default:index.html.twig');
    }
    
    public function holaAction($nombre)
    {
    	return $this->render('InfoBundle:Default:action1.html.twig',array('nombre'=>$nombre));
    }
}
