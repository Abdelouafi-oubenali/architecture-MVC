<?php 
use app\coure\Router;
use app\controllers\back\CourseController;
use app\controllers\back\AuthController ;



$router = new Router();
$router->get('/', CourseController::class,'home');
// articleController::class => path de controller
// home => name de methode qui apelle


$router->get('/article', CourseController::class, 'cours');

$router->post('/addArticle', CourseController::class,'addArticle');

$router->get('/login' , AuthController ::class ,'showLoginForm' );

$router->get('/register' ,AuthController::class , 'showLregsterForm' );

$router->post('/register' ,AuthController::class , 'register' );


$router->dispatch();    
