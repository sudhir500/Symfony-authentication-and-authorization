<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        echo '<pre>';
        echo 'Home page';
        echo '</pre>';
        die();
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/mouse", name="mouse")
     */
    public function checkSessionAction(Request $request)
    {
        echo '<pre>';
        echo realpath($this->container->getParameter('kernel.root_dir').'/..');
        //print_r(52);
        echo '</pre>';
        die();
        return $this->container;
    }
}
