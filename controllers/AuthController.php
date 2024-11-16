<?php

namespace Controllers;

use MVC\Router;
use Model\Users;
use Model\UserLevel;

class AuthController {
    public static function login(Router $router) {
        $alerts = [];
        $user = [];
        $title = 'auth_login_title';

        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = new Users($_POST);
            $alerts = $user->validateLogin();
            
            if(empty($alerts)) {
                $user = Users::where('email', $user->email);

                if(!$user) {
                    $user = new Users;
                    $user->email = s($_POST['email']);
                    Users::setAlert('error', 'auth_alert_user-not-exist');
                } else {
                    if( password_verify($_POST['password'], $user->password) ) {
                        //Verify the level of access and redirect
                        $userLevel = UserLevel::where('id_user', $user->id);

                        session_start();
                        $_SESSION['id'] = $user->id;
                        $_SESSION['name'] = $user->name;
                        $_SESSION['lastname'] = $user->lastname;
                        $_SESSION['email'] = $user->email;

                        // Verificar el nivel de acceso y redireccionar
                        if($userLevel->id_level === '1') {
                            $_SESSION['userLevel'] = $userLevel->id_level;
                            header('Location: /admin/dashboard');
                        }elseif($userLevel->id_level === '2') {
                            $_SESSION['userLevel'] = $userLevel->id_level;
                            header('Location: /builder/dashboard');
                        }elseif($userLevel->id_level === '3') {
                            $_SESSION['userLevel'] = $userLevel->id_level;
                            header('Location: /commercial/dashboard');
                        }else {
                            header('Location: /');
                        }
                        
                    } else {
                        Users::setAlert('error', 'auth_alert_password_wrong');
                    }
                }
            }
        }

        $alerts = Users::getAlerts();
        
        // Render a la vista 
        $router->render('auth/login', [
            'title' => $title,
            'alerts' => $alerts,
            'user' => $user
        ]);
    }

    public static function logout() {
        if($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION = [];
            session_destroy();
            $_SESSION = [];
            header('Location: /');
        }       
    }
}