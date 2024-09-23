<?php

namespace Controllers;

use MVC\Router;

class PublicController{
    public static function index(Router $router){
        $titulo = "home_title";
        $home = true;
        $router->render('/pages/index',[
            'titulo' => $titulo,
            'home' => $home
        ]);
    }

    public static function about(Router $router){
        $titulo = "about_title";
        $router->render('/pages/about',[
            'titulo' => $titulo
        ]);
    }

    public static function retail(Router $router){
        $titulo = "retail_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function restaurant(Router $router){
        $titulo = "restaurant_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function hairsalon(Router $router){
        $titulo = "hairsalon_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function spa(Router $router){
        $titulo = "spa_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function gym(Router $router){
        $titulo = "gym_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function healthcare(Router $router){
        $titulo = "healthcare_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function realestate(Router $router){
        $titulo = "realestate_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function education(Router $router){
        $titulo = "education_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function entertainment(Router $router){
        $titulo = "entertainment_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function eventagency(Router $router){
        $titulo = "eventagency_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function travelagency(Router $router){
        $titulo = "travelagency_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function professionalservices(Router $router){
        $titulo = "professionalservices_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function automotive(Router $router){
        $titulo = "automotive_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function nonprofit(Router $router){
        $titulo = "nonprofit_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }

    public static function church(Router $router){
        $titulo = "church_title";
        $router->render('/pages/services',[
            'titulo' => $titulo
        ]);
    }
}