<?php 
use app\coure\Router;
use app\controllers\back\CourseController;


$router = new Router();

$router->get('/', CourseController::class, 'home');
// articleController::class => path de controller

$router->get('/article', CourseController::class, 'article');

$router->post('/addArticle', CourseController::class,'addArticle');

$router->dispatch();