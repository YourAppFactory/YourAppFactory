<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\AdminController;
use Controllers\PublicController;
use Controllers\BuilderController;
use Controllers\CommercialController;
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
$router->get('/terms', [PublicController::class, 'terms']);
$router->get('/privacy', [PublicController::class, 'privacy']);
//debugging($router);

//APIs Main
$router->get('/api/yourappfactory/main-slider', [PublicAPISController::class, 'getMainSlider']);
$router->get('/api/yourappfactory/language', [PublicAPISController::class, 'getLanguage']);
$router->get('/api/yourappfactory/content-services', [PublicAPISController::class, 'getServices']);
$router->get('/api/yourappfactory/alerts', [PublicAPISController::class, 'alerts']);

//Auth
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

//superAdmin
$router->get('/admin/dashboard', [AdminController::class, 'dashboard']);
$router->get('/admin/users', [AdminController::class, 'users']);
$router->get('/admin/api/consult-users', [AdminController::class, 'consultUsers']);
$router->get('/admin/users/new', [AdminController::class, 'newUser']);
$router->post('/admin/users/new', [AdminController::class, 'newUser']);
$router->get('/admin/users/edit', [AdminController::class, 'editUser']);
$router->post('/admin/users/edit', [AdminController::class, 'editUser']);
$router->get('/admin/users/delete', [AdminController::class, 'deleteUser']);
$router->get('/admin/user', [AdminController::class, 'user']);
$router->get('/admin/profile', [AdminController::class, 'profile']);
$router->post('/admin/profile', [AdminController::class, 'profile']);

//builder
$router->get('/builder/dashboard', [BuilderController::class, 'dashboard']);
$router->get('/builder/apps', [BuilderController::class, 'apps']);
$router->get('/builder/apps/guides', [BuilderController::class, 'guides']);
$router->get('/builder/apps/features', [BuilderController::class, 'features']);
$router->get('/builder/apps/publishing', [BuilderController::class, 'publishing']);

//commercial
$router->get('/commercial/dashboard', [CommercialController::class, 'dashboard']);

$router->checkRoutes();