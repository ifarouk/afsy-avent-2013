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
						'quantity' => '6cl',
					),
					array(
						'name'     => 'Jus de citrons verts',
						'quantity' => '3cl',
					),
					array(
						'name'     => 'Feuilles de menthe',
						'quantity' => '7',
					),
					array(
						'name'     => 'Eau gazeuse',
					),
					array(
						'name'     => 'Sucre',
						'quantity' => '2 cuillères à café',
					),
				),
			),
			'Tequila Sunrise' => array(
				'ingredients' => array(
					array(
						'name'     => 'Tequila',
						'quantity' => '6cl',
					),
					array(
						'name'     => 'Jus d\'oranges',
						'quantity' => '12cl',
					),
					array(
						'name'     => 'Sirop de grenadine',
						'quantity' => '2cl',
					),
				),
			),
			'Bloody Mary' => array(
				'ingredients' => array(
					array(
						'name'     => 'Vodka',
						'quantity' => '4cl',
					),
					array(
						'name'     => 'Jus de tomates',
						'quantity' => '12cl',
					),
					array(
						'name'     => 'Jus de citron',
						'quantity' => '0.5cl',
					),
					array(
						'name'     => 'Sauce worcestershire',
						'quantity' => '0.5cl',
					),
					array(
						'name'     => 'Tabasco',
						'quantity' => '2 gouttes',
					),
					array(
						'name'     => 'Sel de céleri',
					),
					array(
						'name'     => 'Sel',
					),
					array(
						'name'     => 'Poivre',
					),
				),
			),
			'Piña Colada' => array(
				'ingredients' => array(
					array(
						'name'     => 'Rhum blanc',
						'quantity' => '4cl',
					),
					array(
						'name'     => 'Rhum ambré',
						'quantity' => '2cl',
					),
					array(
						'name'     => 'Jus d\'ananas',
						'quantity' => '12cl',
					),
					array(
						'name'     => 'Lait de coco',
						'quantity' => '4cl',
					),
				),
			),
			'Cosmopolitan' => array(
				'ingredients' => array(
					array(
						'name'     => 'Vodka',
						'quantity' => '4cl',
					),
					array(
						'name'     => 'Triple sec',
						'quantity' => '2cl',
					),
					array(
						'name'     => 'Jus de cranberry',
						'quantity' => '2cl',
					),
					array(
						'name'     => 'Jus de citron verts',
						'quantity' => '1cl',
					),
				),
			),
			'Gin Tonic' => array(
				'ingredients' => array(
					array(
						'name'     => 'Schweppes',
					),
					array(
						'name'     => 'Gin',
						'quantity' => '3cl',
					),
				),
			),
			'Monaco' => array(
				'ingredients' => array(
					array(
						'name'     => 'Bière',
						'quantity' => '15cl',
					),
					array(
						'name'     => 'Sirop de grenadine',
						'quantity' => '1cl',
					),
					array(
						'name'     => 'Limonade',
						'quantity' => '5cl',
					),
				),
			),
		);
    	$response = new JsonResponse();

		return $response->setData(array(
		    'coktails' => $coktails
		));
    }
}
