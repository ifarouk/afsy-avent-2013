<?php

namespace LaNetscouade\AngularDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;



class DefaultController extends Controller
{

    /**
     * @Route("/", name="angular_demo1", options={"expose"=true})
     * @Template()
     */
    public function indexAction()
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

    /**
     * @Route("/angular-demo3", name="angular_demo3", options={"expose"=true})
     * @Template()
     */
    public function angularDemo3Action()
    {
        return array();
    }
}
