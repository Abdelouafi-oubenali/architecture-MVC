<?php 
use app\coure\Router;
use app\controllers\back\CourseController;


$router = new Router();
$router->get('/', CourseController::class,'home');
// articleController::class => path de controller
// home => name de methode qui apelle

$router->get('/artcle', CourseController::class, 'cours');

$router->post('/addArticle', CourseController::class,'addArticle');

$router->dispatch();