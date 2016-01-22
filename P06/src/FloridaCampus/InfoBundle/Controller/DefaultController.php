<?php

namespace FloridaCampus\InfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InfoBundle:Default:index.html.twig');
    }
    
    public function holaAction($nombre, Request $request)
    {
    	return $this->render('InfoBundle:Default:action1.html.twig',array('nombre'=>$nombre));
    }

    public function infoAction()
    {
    	return $this->render('InfoBundle:Default:info.html.twig');
    }
}
