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
     * @Route("/translation-demo", name="translation_demo", options={"expose"=true})
     * @Template()
     */
    public function translationDemoAction()
    {
        return array();
    }
}
