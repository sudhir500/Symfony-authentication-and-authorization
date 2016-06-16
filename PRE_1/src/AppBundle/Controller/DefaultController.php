<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class DefaultController extends Controller
{
    public function  __construct()
    {

    }

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/admin",name="admin")
     */
    public function adminAction()
    {
        if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            prx('user not authorized');
            throw $this->createAccessDeniedException();
        }
        else {
            $user = $this->getUser();
            echo 'its admin page<br />';
            prx($user);
        }
    }

    /**
     * @Route("/user",name="user")
     */
    public function userAction()
    {
        prx("I am normal user");
    }

    /**
     * @Route("/abc",name="abc")
     * @Security("has_role('ROLE_USER')")
     */
    public function abcAction(){
        prx('abcd called');
    }

    /**
     * @Route("/sudhir")
     */
    public function sudhirAction(){
        prx('sudhir called');
    }

}
