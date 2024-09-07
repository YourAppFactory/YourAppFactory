<?php

namespace Controllers;

use MVC\Router;

class PublicController{
    public static function index(Router $router){
        $titulo = "home_title";
        $router->render('/pages/index',[
            'titulo' => $titulo
        ]);
    }

    public static function about(Router $router){
        $titulo = "about_title";
        $router->render('/pages/about',[
            'titulo' => $titulo
        ]);
    }
}