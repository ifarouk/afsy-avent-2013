<?php

namespace LaNetscouade\ApiDemoBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController as BaseController;
use FOS\RestBundle\View\View;

/**
 * Class CocktailController
 * @package LaNetscouade\ApiDemoBundle\Controller
 */
class CocktailController extends BaseController
{

       /**
        * @return mixed
        */
       public function getAction()
       {
          return ;
       }
    /**
     * get list action
     * @return mixed
     */
    public function getCocktailsAction()
    {
        $view = new View($this->dataStore);
        return $this->get('fos_rest.view_handler')->handle($view);
    }

    /**
     * get show action
     * @param $id
     * @return mixed
     */
    public function getCocktailAction($id)
    {
        $view = new View($this->dataStore[$id]);
        return $this->get('fos_rest.view_handler')->handle($view);
    }

    //to improve readability, we set variable here.
    private $dataStore = array(
        array(
            'id'=>1,
            'name' => 'Mojito',
            'ingredients' => array(
                array(
                    'name' => 'Rhum Cubain',
                    'quantity' => '6cl',
                ),
                array(
                    'name' => 'Jus de citrons verts',
                    'quantity' => '3cl',
                ),
                array(
                    'name' => 'Feuilles de menthe',
                    'quantity' => '7',
                ),
                array(
                    'name' => 'Eau gazeuse',
                ),
                array(
                    'name' => 'Sucre',
                    'quantity' => '2 cuillères à café',
                ),
            ),
        ),
        array(
            'id'=>2,
            'name' => 'Tequila Sunrise',
            'ingredients' => array(
                array(
                    'name' => 'Tequila',
                    'quantity' => '6cl',
                ),
                array(
                    'name' => 'Jus d\'oranges',
                    'quantity' => '12cl',
                ),
                array(
                    'name' => 'Sirop de grenadine',
                    'quantity' => '2cl',
                ),
            ),
        ),
        array(
            'id'=>3,
            'name' => 'Bloody Mary',
            'ingredients' => array(
                array(
                    'name' => 'Vodka',
                    'quantity' => '4cl',
                ),
                array(
                    'name' => 'Jus de tomates',
                    'quantity' => '12cl',
                ),
                array(
                    'name' => 'Jus de citron',
                    'quantity' => '0.5cl',
                ),
                array(
                    'name' => 'Sauce worcestershire',
                    'quantity' => '0.5cl',
                ),
                array(
                    'name' => 'Tabasco',
                    'quantity' => '2 gouttes',
                ),
                array(
                    'name' => 'Sel de céleri',
                ),
                array(
                    'name' => 'Sel',
                ),
                array(
                    'name' => 'Poivre',
                ),
            ),
        ),
        array(
            'id'=>4,
            'name' => 'Piña Colada',
            'ingredients' => array(
                array(
                    'name' => 'Rhum blanc',
                    'quantity' => '4cl',
                ),
                array(
                    'name' => 'Rhum ambré',
                    'quantity' => '2cl',
                ),
                array(
                    'name' => 'Jus d\'ananas',
                    'quantity' => '12cl',
                ),
                array(
                    'name' => 'Lait de coco',
                    'quantity' => '4cl',
                ),
            ),
        ),
        array(
            'id'=>5,
            'name' => 'Cosmopolitan',
            'ingredients' => array(
                array(
                    'name' => 'Vodka',
                    'quantity' => '4cl',
                ),
                array(
                    'name' => 'Triple sec',
                    'quantity' => '2cl',
                ),
                array(
                    'name' => 'Jus de cranberry',
                    'quantity' => '2cl',
                ),
                array(
                    'name' => 'Jus de citron verts',
                    'quantity' => '1cl',
                ),
            ),
        ),
        array(
            'id'=>6,
            'name' => 'Gin Tonic',
            'ingredients' => array(
                array(
                    'name' => 'Schweppes',
                ),
                array(
                    'name' => 'Gin',
                    'quantity' => '3cl',
                ),
            ),
        ),

    );
}
