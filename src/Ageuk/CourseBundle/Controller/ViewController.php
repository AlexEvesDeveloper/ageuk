<?php

namespace Ageuk\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use Ageuk\UtilBundle\Entity;
use Ageuk\UtilBundle\Form;

class ViewController extends Controller
{
    /**
     * @Route("/view/{course}")
     * @ParamConverter("course", class="AgeukUtilBundle:Course")
     * @Template()
     */
    public function indexAction(Entity\Course $course)
    {
        return array(
        	'course' => $course
        );
    }
}