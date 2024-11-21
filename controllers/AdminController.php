<?php

namespace Controllers;

use MVC\Router;
use Model\Role;
use Model\Users;
use Model\UsersRole;
use Model\UserLevel;

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
        $users = Users::all();
        $router->render('/admin/users',[
            'title' => $title,
            'users' => $users
        ]);
    }

    public static function consultUsers(Router $router){
        isAdmin();
        $title = "admin_users_title";
        $id = $_SESSION['id'];
        $consult = "SELECT u.id, u.name, u.lastname, u.email, r.level 
        FROM users u
        LEFT JOIN user_level ul ON u.id = ul.id_user
        LEFT JOIN role r ON ul.id_level = r.id
        WHERE u.id != $id
        ORDER BY name;";
        $users = UsersRole::consultSQl($consult);
        
        echo json_encode($users);
    }

    public static function newUser(Router $router){
        isAdmin();
        $title = "admin_new_user_title";
        $user = new Users;
        $alerts = [];
        $levels = Role::all();
        $userRole = 0;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST;
            $user->sincronize($args);
            $alerts = $user->validate();
            if(empty($alerts)){
                $user->password = password_hash($user->password,PASSWORD_BCRYPT);
                $result = $user->save();
                if($result){
                    $user = Users::where('email',$user->email);
                    $userLevel = new UserLevel();
                    $userLevel->id_user = $user->id;
                    $userLevel->id_level = $_POST['role'];
                    $userLevel->save();
                    header('Location: /admin/users');
                }
                $alerts = Users::getAlerts();
            }
        }
        $router->render('/admin/new',[
            'title' => $title,
            'alerts' => $alerts,
            'user' => $user,
            'levels' => $levels,
            'userRole' => $userRole
        ]);
    }

    public static function editUser(Router $router){
        isAdmin();
        $title = "admin_edit_user_title";
        $alerts = [];
        $user = Users::find($_GET['id']);
        $role = UserLevel::where('id_user',$user->id);
        $levels = Role::all();
        $userRole = $role->id_level;

        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST;
            
            if($args['password'] === '' && $args['password2'] === ''){
                $args['password'] = $user->password;
                $args['password2'] = $user->password;
            }
            $user->sincronize($args);
            $alerts = $user->validatePassword();

            $role->id_level = $_POST['role'];
            if(empty($alerts)){
                if($_POST['password'] !== ''){
                    $user->password = password_hash($args['password'],PASSWORD_BCRYPT);
                }       
                unset($user->password2);

                $alerts = $user->validate();
                if(empty($alerts)){
                    $result = $user->save();
                    $role->save();
                    if($result){
                        Users::setAlert('success','user_alert-user-updated');
                    } else {
                        Users::setAlert('error','user_alert-user-error');
                    }
                    $alerts = Users::getAlerts();
                    header('Location: /admin/users');
                }
            }
        }
        $router->render('/admin/edit',[
            'title' => $title,
            'alerts' => $alerts,
            'user' => $user,
            'levels' => $levels,
            'userRole' => $userRole
        ]);
    }

    public static function deleteUser(){
        isAdmin();
        $id = s($_GET['id']);
        $id = filter_var($id, FILTER_VALIDATE_INT);
        $user = Users::find($id);
        $result = $user->delete();
        if($result){
            header('Location: /admin/users');
        }
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
        $id = $_SESSION['id'];
        $user = Users::find($id);
        $title = "admin_profile_title";
        $alerts = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $args = $_POST;
            
            if($args['password'] === '' && $args['password2'] === ''){
                $args['password'] = $user->password;
                $args['password2'] = $user->password;
            }
            $user->sincronize($args);
            $alerts = $user->validatePassword();

            if(empty($alerts)){
                if($_POST['password'] !== ''){
                    $user->password = password_hash($args['password'],PASSWORD_BCRYPT);
                }
                unset($user->password2);

                $alerts = $user->validate();
                if(empty($alerts)){
                    //debugging($user);
                    $result = $user->save();
                    if($result){
                        Users::setAlert('success','profile_alert-profile-updated');
                    } else {
                        Users::setAlert('error','profile_alert-profile-error');
                    }
                    $alerts = Users::getAlerts();
                }
            }
            
        }
        $router->render('/admin/profile',[
            'title' => $title,
            'alerts' => $alerts,    
            'user' => $user
        ]);
    }
}