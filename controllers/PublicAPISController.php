<?php

namespace Controllers;


class PublicAPISController{
    public static function getLanguage(){
        echo json_encode($_SESSION['lang']);
    }

    public static function getMainSlider(){
        $slides = file_get_contents(__DIR__.'/../slides.json');
        echo $slides;
    }

    public static function getServices(){
        $services = file_get_contents(__DIR__.'/../final_business_types.json');
        echo $services;
    }

    public static function alerts(){
        //leer el archivo de alerts.json
        $archivo = file_get_contents(__DIR__.'/../alerts.json');
        //convertir el json a un arreglo asociativo
        $archivo = json_decode($archivo, true);

        echo json_encode($archivo);
    }
}