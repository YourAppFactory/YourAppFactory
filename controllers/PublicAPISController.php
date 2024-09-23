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
}