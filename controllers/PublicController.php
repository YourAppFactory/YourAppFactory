<?php

namespace Controllers;

use MVC\Router;
use Model\Promo;

class PublicController{
    public static function index(Router $router){
        $title = "home_title";
        $home = true;
        $promo = Promo::find(1);
        $router->render('/pages/index',[
            'title' => $title,
            'home' => $home,
            'promo' => $promo
        ]);
    }

    public static function about(Router $router){
        $title = "about_title";
        $router->render('/pages/about',[
            'title' => $title
        ]);
    }

    public static function pricing(Router $router){
        $lang = $_SESSION['lang'] ?? 'en';
        $title = "pricing_title";
        $router->render('/pages/pricing',[
            'title' => $title,
            'lang' => $lang
        ]);
    }

    public static function marketing(Router $router){
        $title = "marketing_title";
        $router->render('/pages/marketing',[
            'title' => $title
        ]);
    }

    public static function retail(Router $router){
        $title = "retail_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function restaurant(Router $router){
        $title = "restaurant_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function hairsalon(Router $router){
        $title = "hairsalon_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function spa(Router $router){
        $title = "spa_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function gym(Router $router){
        $title = "gym_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function healthcare(Router $router){
        $title = "healthcare_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function realestate(Router $router){
        $title = "realestate_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function education(Router $router){
        $title = "education_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function entertainment(Router $router){
        $title = "entertainment_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function eventagency(Router $router){
        $title = "eventagency_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function travelagency(Router $router){
        $title = "travelagency_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function professionalservices(Router $router){
        $title = "professionalservices_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function automotive(Router $router){
        $title = "automotive_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function nonprofit(Router $router){
        $title = "nonprofit_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function community(Router $router){
        $title = "community_title";
        $router->render('/pages/services',[
            'title' => $title
        ]);
    }

    public static function terms(Router $router){
        $title = "terms_title";
        $router->render('/pages/terms',[
            'title' => $title
        ]);
    }

    public static function privacy(Router $router){
        $title = "privacy_title";
        $router->render('/pages/privacy',[
            'title' => $title
        ]);
    }

    public static function indexNew(Router $router){
        $title = "home_title";
        $home2 = true;
        $promo = Promo::find(1);
        $router->render('/pages/indexNew',[
            'title' => $title,
            'home2' => $home2,
            'promo' => $promo
        ]);
    }
}