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

    public static function guidesCourses(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/courses',[
            'title' => $title
        ]);
    }

    public static function guidesAnyKind(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/anykind',[
            'title' => $title
        ]);
    }

    public static function guidesStore(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/store',[
            'title' => $title
        ]);
    }

    public static function guidesRestaurants(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/restaurants',[
            'title' => $title
        ]);
    }

    public static function guidesService(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/service',[
            'title' => $title
        ]);
    }

    public static function guidesEvents(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/events',[
            'title' => $title
        ]);
    }

    public static function guidesDirectory(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/directory',[
            'title' => $title
        ]);
    }

    public static function guidesAttendance(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-1";
        $router->render('/builder/guides/attendance',[
            'title' => $title
        ]);
    }

    public static function featuresColors(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/colors',[
            'title' => $title
        ]);
    }

    public static function featuresImages(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/images',[
            'title' => $title
        ]);
    }

    public static function featuresGym(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/gym',[
            'title' => $title
        ]);
    }

    public static function featuresFiles(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/files',[
            'title' => $title
        ]);
    }

    public static function featuresSubscriptions(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/subscriptions',[
            'title' => $title
        ]);
    }

    public static function featuresCommunity(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/community',[
            'title' => $title
        ]);
    }

    public static function featuresProRegister(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/pro-register',[
            'title' => $title
        ]);
    }

    public static function featuresRegister(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/register',[
            'title' => $title
        ]);
    }

    public static function featuresProgressiveLoyalty(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/progressive-loyalty',[
            'title' => $title
        ]);
    }

    public static function featuresProForms(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/pro-forms',[
            'title' => $title
        ]);
    }

    public static function featuresFolders(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/folders',[
            'title' => $title
        ]);
    }

    public static function featuresNotifications(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/push-notifications',[
            'title' => $title
        ]);
    }

    public static function featuresProfileAndProRegister(Router $router){
        isBuilder();
        $title = "builder_creation_section_title-2";
        $router->render('/builder/features/profile-and-pro-register',[
            'title' => $title
        ]);
    }
}