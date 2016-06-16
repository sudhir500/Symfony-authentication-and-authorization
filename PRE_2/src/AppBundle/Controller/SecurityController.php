<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction()
    {


        $helper = $this->get('security.authentication_utils');
        return $this->render('default/login.html.twig', [
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
            'path'  => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ]);
    }
    /**
     * @Route("/login_check_2", name="security_login_check")
     */
    public function loginCheckAction()
    {

    }
}