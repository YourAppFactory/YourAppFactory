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
}