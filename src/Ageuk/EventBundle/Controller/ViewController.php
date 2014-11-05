<?php

namespace Ageuk\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class ViewController extends Controller
{
    /**
     * @Route("/view/{event}")
     * @ParamConverter("event", class="AgeukUtilBundle:Event")
     * @Template()
     */
    public function indexAction(Entity\Event $event)
    {
        return array(
        	'event' => $event
        );
    }
}