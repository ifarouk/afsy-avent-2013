<?php

namespace LaNetscouade\AfsyAventDemo\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/cocktails")
     * @Template()
     * @Method({"GET"})
     */
    public function getCoktailsAction()
    {

    	$coktails = array(
    		'Mojito' => array(
				'ingredients' => array(
					array(
						'name'     => 'Rhum Cubain',
						'quantity' => '6cl'
					),
					array(
						'name'     => 'Jus de citrons verts',
						'quantity' => '3cl'
					),
					array(
						'name'     => 'Feuilles de menthe',
						'quantity' => '7'
					),
					array(
						'name'     => 'Eau gazeuse'
					),
					array(
						'name'     => 'Sucre',
						'quantity' => '2 cuillères à café'
					),
				)
			),
			'Tequila Sunrise' => array(
				'ingredients' => array(
					array(
						'name'     => 'Tequila',
						'quantity' => '6cl'
					),
					array(
						'name'     => 'Jus d\'oranges',
						'quantity' => '12cl'
					),
					array(
						'name'     => 'Sirop de grenadine',
						'quantity' => '2cl'
					)
				)
			),
		);
    	$response = new JsonResponse();

		return $response->setData(array(
		    'coktails' => $coktails
		));
    }
}
