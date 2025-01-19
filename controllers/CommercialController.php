<?php

namespace Controllers;

use MVC\Router;

class CommercialController {
    public static function dashboard(Router $router){
        isCommercial();
        $title = "commercial_dashboard_title";
        $router->render('/commercial/dashboard',[
            'title' => $title
        ]);
    }
}