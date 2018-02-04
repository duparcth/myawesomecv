<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/test/{name}/{firstname}", name="homepage")
     * @Template()
     */
    public function indexAction($name, $firstname)
    {
        return array('name' => $name, 'firstname' => $firstname);
    }

    /**
     * @Route("/demo", name="demo")
     * @Template()
     */
    public function demoAction(Request $request)
    {
        return array();
    }
}
