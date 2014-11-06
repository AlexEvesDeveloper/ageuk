<?php

namespace Ageuk\EventBundle\Controller;

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
        $upcomingEvents = $this->getDoctrine()->getRepository('AgeukUtilBundle:Event')->findAllUpcomingEvents();
        $pastEvents = $this->getDoctrine()->getRepository('AgeukUtilBundle:Event')->findAllPastEvents();

        return array(
        	'events' => $this->getDoctrine()->getRepository('AgeukUtilBundle:Event')->findAll(),
            'upcomingEvents' => $upcomingEvents,
            'pastEvents' => $pastEvents 
        );
    }
}