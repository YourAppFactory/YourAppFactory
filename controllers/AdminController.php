<?php

namespace Controllers;

use MVC\Router;

class AdminController {
    public static function dashboard(Router $router){
        isAdmin();
        $title = "admin_dashboard_title";
        $router->render('/admin/dashboard',[
            'title' => $title
        ]);
    }

    public static function users(Router $router){
        isAdmin();
        $title = "admin_users_title";
        $router->render('/admin/users',[
            'title' => $title
        ]);
    }

    public static function user(Router $router){
        isAdmin();
        $title = "admin_user_title";
        $router->render('/admin/user',[
            'title' => $title
        ]);
    }

    public static function profile(Router $router){
        isAdmin();
        $title = "admin_profile_title";
        $router->render('/admin/profile',[
            'title' => $title
        ]);
    }
}