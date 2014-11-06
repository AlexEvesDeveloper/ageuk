<?php

namespace Ageuk\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class AllController extends Controller
{
    /**
     * @Route("/all")
     * @Template()
     */
    public function indexAction()
    {
        return array(
        	'courses' => $this->getDoctrine()->getRepository('AgeukUtilBundle:Course')->findAll()
        );
    }
}