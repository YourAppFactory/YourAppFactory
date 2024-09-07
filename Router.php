<?php

namespace MVC;

class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }
    

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function checkRoutes()
    {
        define('DEFAULT_LANGUAGE', 'en');
        chooseLanguage();        

        $url_actual = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            $fn = $this->getRoutes[$url_actual] ?? null;
        } else {
            $fn = $this->postRoutes[$url_actual] ?? null;
        }
        if ( $fn ) {
            call_user_func($fn, $this);
        } else {
            echo "Página No Encontrada o Ruta no válida";
        }
    }

    public function render($view, $data = []){
        $lang_file = __DIR__ . "/lang.json";

        if (file_exists($lang_file)) {
            $lang_json = file_get_contents($lang_file);
            $lang_array = json_decode($lang_json, true);
            if (is_array($lang_array)) {
                $data = array_merge($data, $lang_array);
            }
        }

        foreach ($data as $key => $value) {
            $$key = $value; 
        }

        ob_start();

        include_once __DIR__ . "/views/$view.php";
        $content = ob_get_clean(); 

        $pattern = '/\{%\s*([\w-]+)\s*%\}/';
        $content = preg_replace_callback($pattern, function($matches) use ($data) {
            $lang = chooseLanguage();
            $variable_name = $matches[1];
            return isset($data[$variable_name][$lang]) ? $data[$variable_name][$lang] : 'Correct key in: ' . $variable_name . '';
        }, $content);

        
        $url_actual = $_SERVER['PATH_INFO'] ?? '/';

        if(str_contains($url_actual, '/commercial')) {
            include_once __DIR__ . "/views/layouts/commercial-layout.php";
        } elseif(str_contains($url_actual, '/builder')) {
            include_once __DIR__ . "/views/layouts/builder-layout.php";
        } elseif(str_contains($url_actual, '/admin')) {
            include_once __DIR__ . "/views/layouts/admin-layout.php";
        } else {
            include_once __DIR__ . "/views/layouts/main-layout.php";
        }
    }
}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           