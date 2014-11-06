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
    	$form = $this->createForm(new Form\EventType(), $event, array(
            'action' => $this->generateUrl('ageuk_event_new_index')
        ));
    	$form->handleRequest($request);

    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($event);
    		$em->flush();

            return $this->redirect($this->generateUrl('ageuk_event_view_index', array('event' => $event->getId())));
    	}

        return array(
        	'form' => $form->createView()
        );
    }
}
