<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Menu
    {
        public $title;
        public $ingredients;
    }

class LunchController
{
    public function show()
    {
        // $number = random_int(0, 100);

        $recipeJson = file_get_contents(dirname(__DIR__).'/App/Recipe/data.json');
        $ingredientJson = file_get_contents(dirname(__DIR__).'/App/Ingredient/data.json');

        $recipe = json_decode($recipeJson);

        $menus = [];

        foreach($recipe as $obj) { //foreach element in $recipe
            foreach($obj as $item) { //foreach element in $obj
                $needle = $item->ingredients;

                $ingredients = [];
                foreach($needle as $val) { // check if ingredients is available
                    if(strpos($ingredientJson,$val) !== false) {
                        $ready = true;
                    } else {
                        $ready = false;
                        break 1;
                    }
                    $ingredients[]=$val;
                }

                $menu = new Menu();
                if($ready) { // create new menu
                    $menu->title=$item->title;
                    $menu->ingredients=$ingredients;
                }

                if($menu->title==null) { // add new menu into array if not null
                    // do nothing
                } else {
                    $menus[] = $menu;
                }
            }
        }

        $response = new Response(json_encode($menus));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}