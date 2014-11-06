<?php

namespace Ageuk\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class UnregisterController extends Controller
{
    /**
     * @Route("/view/{event}/unregister/{delegate}")
     * @ParamConverter("event", class="AgeukUtilBundle:Event")
     * @ParamConverter("delegate", class="AgeukUtilBundle:DelegateUser")
     */
    public function indexAction(Entity\Event $event, Entity\DelegateUser $delegate)
    {
        $event->removeDelegate($delegate);

        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();

        return $this->redirect($this->generateUrl('ageuk_event_view_index', array('event' => $event->getId())));
    }
}