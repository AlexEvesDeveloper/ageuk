<?php

namespace Ageuk\HomeBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class DashboardController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction(Request $request)
    {       
        return array(

        );
    }
}