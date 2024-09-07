<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PublicController;

$router = new Router();
session_start();

$router->get('/', [PublicController::class, 'index']);
$router->get('/about', [PublicController::class, 'about']);
//debugging($router);

$router->checkRoutes();