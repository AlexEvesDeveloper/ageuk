<?php

namespace Ageuk\EventBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class NewController extends Controller
{
    /**
     * @Route("/new")
     * @Template()
     */
    public function indexAction(Request $request)
    {
    	$event = new Entity\Event();
    	$form = $this->createForm(new Form\EventType(), $event);
    	$form->handleRequest($request);

    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($event);
    		$em->flush();
    	}

        return array(
        	'form' => $form->createView()
        );
    }
}
