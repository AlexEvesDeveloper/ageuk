<?php

namespace Ageuk\DelegateBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class EventsWidgetController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request)
    {       
        return array(
        	'delegate' => $this->getUser()
        );
    }
}