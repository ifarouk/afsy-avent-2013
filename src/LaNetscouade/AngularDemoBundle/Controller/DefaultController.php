<?php

namespace LaNetscouade\AngularDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/angular-demo1", name="angular_demo1", options={"expose"=true})
     * @Template()
     */
    public function angularDemo1Action()
    {
        return array();
    }

    /**
     * @Route("/angular-demo2", name="angular_demo2", options={"expose"=true})
     * @Template()
     */
    public function angularDemo2Action()
    {
        return array();
    }
}
