<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PublicController;
use Controllers\PublicAPISController;

$router = new Router();
session_start();

$router->get('/', [PublicController::class, 'index']);
$router->get('/about', [PublicController::class, 'about']);
$router->get('/marketing', [PublicController::class, 'marketing']);
$router->get('/contact', [PublicController::class, 'contact']);
$router->get('/retail', [PublicController::class, 'retail']);
$router->get('/restaurant', [PublicController::class, 'restaurant']);
$router->get('/hairsalon', [PublicController::class, 'hairsalon']);
$router->get('/spa', [PublicController::class, 'spa']);
$router->get('/gym', [PublicController::class, 'gym']);
$router->get('/healthcare', [PublicController::class, 'healthcare']);
$router->get('/realestate', [PublicController::class, 'realestate']);
$router->get('/education', [PublicController::class, 'education']);
$router->get('/entertainment', [PublicController::class, 'entertainment']);
$router->get('/eventagency', [PublicController::class, 'eventagency']);
$router->get('/travelagency', [PublicController::class, 'travelagency']);
$router->get('/professionalservices', [PublicController::class, 'professionalservices']);
$router->get('/automotive', [PublicController::class, 'automotive']);
$router->get('/nonprofit', [PublicController::class, 'nonprofit']);
$router->get('/community', [PublicController::class, 'community']);
//debugging($router);

//APIs Main
$router->get('/api/yourappfactory/main-slider', [PublicAPISController::class, 'getMainSlider']);
$router->get('/api/yourappfactory/language', [PublicAPISController::class, 'getLanguage']);
$router->get('/api/yourappfactory/content-services', [PublicAPISController::class, 'getServices']);

$router->checkRoutes();