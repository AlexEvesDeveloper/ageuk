<?php

namespace Ageuk\CourseBundle\Controller;

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
    	$course = new Entity\Course();
    	$form = $this->createForm(new Form\CourseType(), $course, array(
            'action' => $this->generateUrl('ageuk_course_new_index')
        ));
    	$form->handleRequest($request);

    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();
    		$em->persist($course);
    		$em->flush();

            return $this->redirect($this->generateUrl('ageuk_course_view_index', array('course' => $course->getId())));
    	}

        return array(
        	'form' => $form->createView()
        );
    }
}
