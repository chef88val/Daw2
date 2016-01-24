<?php

namespace FloridaCampus\InfoBundle\Controller;

use FloridaCampus\InfoBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    public function infoAction(Request $request)
    {
        $task = new Task();
        $form = $this->createFormBuilder($task)
        ->add('task', TextType::class,array('label' => 'Pon tu nombre aquí'))
        //->add('dueDate', DateType::class)
        ->add('save', SubmitType::class, array('label' => 'Comprueba que pasa'))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return $this->forward('InfoBundle:Default:hola',array('nombre'=>$request->request->get('form')['task']));
        }
    
        return $this->render('InfoBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));    
    }

    public function newAction(Request $request)
    {
        $task = new Task();
        $form = $this->createFormBuilder($task)
        ->add('task', TextType::class,array('label' => ' Pon tu nombre aquí'))
        //->add('dueDate', DateType::class)
        ->add('save', SubmitType::class, array('label' => ' Comprueba que pasa '))
        //->add('saveAndAdd', SubmitType::class, array('label' => 'Save and Add'))
        ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            return $this->forward('InfoBundle:Default:hola',array('nombre'=>$request->request->get('form')['task']));
        }
    
        return $this->render('InfoBundle:Default:new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}
