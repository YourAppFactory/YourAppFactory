<?php

define('IMAGES_FOLDER', $_SERVER['DOCUMENT_ROOT'].'/images/');
define('DOCS_FOLDER', $_SERVER['DOCUMENT_ROOT'].'/docs/');

//Función para imprimir el código a probar y detener la ejecución del código siguiente
function debugging($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

function sText($var) : string{
    if(str_contains($var, "'") === true){
        $var = str_replace("'", "´", $var);
    }
    return $var;
}

function redirection(string $url){
    $id = s($_GET['id']);
    //Validar la URL por ID válido
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id){
        header("Location:${url}");
    }

    return $id;
}

function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

//Revisa la página actual para resaltar el ícono del menú
function current_page($path){
    if(str_contains($_SERVER['REQUEST_URI'], $path) === true){
        echo 'active';
    } else{
        return;
    }
}

//Revisa la página actual para resaltar el ícono del menú del dashboard
function admin_page($path){
    if(str_contains($_SERVER['REQUEST_URI'], $path) === true){
        echo 'dashboard__link--current';
    } else{
        return;
    }
}

function isAdmin() : void {
    if(!isset($_SESSION['level_admin'])){
        header('Location: /');
    }
}



function isCommercial() : void {
    if(!isset($_SESSION['level_commercial'])){
        header('Location: /');
    }
}

function isBuilder() : void {
    if(!isset($_SESSION['level_builder'])){
        header('Location: /');
    }
}

//Compueba si el usuario está logueado y redirige a su dashboard
function sessionActive() : void {
    if(isset($_SESSION['level_admin'])){
        echo '/admin/dashboard';
    } elseif(isset($_SESSION['level_commercial'])){
        echo '/builder/dashboard';
    } elseif(isset($_SESSION['level_builder'])){
        echo '/builder/dashboard';
    } else{
        echo '/';
    }
}

function chooseLanguage() {
    if(isset($_GET['lang'])) {
        $_SESSION['lang'] = s($_GET['lang']);
        setcookie("lang_cookie", s($_GET['lang']), time() + 31536000, "/");
    }else if(isset($_COOKIE['lang_cookie'])) {
        $_SESSION['lang'] = $_COOKIE['lang_cookie'];
    }else {
        $_SESSION['lang'] = DEFAULT_LANGUAGE;
    }
    
    return $_SESSION['lang'];
}

//Función para leer e imprimir cada valor del array de idiomas
function tt($key) {
    ob_start();
    $language = chooseLanguage();
    $translations = json_decode(file_get_contents('../lang.json'), true);
    $keys = array_keys($translations);

    if(!in_array($key, $keys)){
        return 'Correct key in: ' . $key;
    } else{
        $strings = $translations[$key][$language];   

        return $strings;
    }
    ob_clean();
}