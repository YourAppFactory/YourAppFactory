<?php

namespace Controllers;

use MVC\Router;

class BuilderController {
    public static function dashboard(Router $router){
        isBuilder();
        $title = "builder_dashboard_title";
        $router->render('/builder/dashboard',[
            'title' => $title
        ]);
    }

    public static function apps(Router $router){
        isBuilder();
        $title = "builder_creation_app_title";
        $router->render('/builder/apps',[
            'title' => $title
        ]);
    }

    public static function guides(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/index',[
            'title' => $title
        ]);
    }

    public static function guidesGym(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/gym',[
            'title' => $title
        ]);
    }

    public static function guidesAppIndex(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/appindex',[
            'title' => $title
        ]);
    }

    public static function features(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/index',[
            'title' => $title
        ]);
    }

    public static function publishing(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-3";
        $router->render('/builder/publishing/index',[
            'title' => $title
        ]);
    }

    public static function guidesMarketplace(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/marketplace',[
            'title' => $title
        ]);
    }

    public static function guideCourses(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/courses',[
            'title' => $title
        ]);
    }

    public static function guideAnyKind(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/anykind',[
            'title' => $title
        ]);
    }

    public static function guideStore(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/store',[
            'title' => $title
        ]);
    }

    public static function guideRestaurants(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/restaurants',[
            'title' => $title
        ]);
    }

    public static function guideService(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/service',[
            'title' => $title
        ]);
    }
}