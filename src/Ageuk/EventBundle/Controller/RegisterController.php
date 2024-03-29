<?php

namespace Ageuk\EventBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class RegisterController extends Controller
{
    /**
     * @Route("/view/{event}/register/{delegate}")
     * @ParamConverter("event", class="AgeukUtilBundle:Event")
     * @ParamConverter("delegate", class="AgeukUtilBundle:DelegateUser")
     */
    public function indexAction(Entity\Event $event, Entity\DelegateUser $delegate)
    {
        $em = $this->getDoctrine()->getManager();

        

        if(count($event->getDelegates()) >= $event->getCapacity()){
            $event->getCourse()->addSubscribedDelegate($delegate);
            $delegate->addSubscribedCourse($event->getCourse());

            $em->persist($event);
            $em->flush();
            
            return $this->redirect($this->generateUrl('ageuk_home_default_index'));
        }

        $event->addDelegate($delegate);

        $em->persist($event);
        $em->flush();

        return $this->redirect($this->generateUrl('ageuk_event_view_index', array('event' => $event->getId())));
    }
}