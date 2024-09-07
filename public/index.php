<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PublicController;
use Controllers\PublicAPISController;

$router = new Router();
session_start();

$router->get('/', [PublicController::class, 'index']);
$router->get('/about', [PublicController::class, 'about']);
//debugging($router);

//APIs Main
$router->get('/api/yourappfactory/main-slider', [PublicAPISController::class, 'getMainSlider']);
$router->get('/api/yourappfactory/language', [PublicAPISController::class, 'getLanguage']);

$router->checkRoutes();