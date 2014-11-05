<?php

namespace Ageuk\AdminBundle\Controller;

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
    public function newAction(Request $request)
    {
    	$user = new Entity\AdminUser();
    	$form = $this->createForm(new Form\AdminUserType, $user);

    	$form->handleRequest($request);
    	if($form->isValid()){
    		$em = $this->getDoctrine()->getManager();

    		$user->setUsername($form->getData()->getEmail());
    		$user->setPassword(password_hash($form->getData()->getPassword(), PASSWORD_BCRYPT, array('cost' => 12)));

    		$em->persist($user);
    		$em->flush();

    		return $this->redirect($this->generateUrl('ageuk_home_default_index'));
    	}
        
        return array(
        	'form' => $form->createView()
        );
    }
}
