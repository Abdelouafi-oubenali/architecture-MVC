<?php 
namespace app\coure;

class Router {
    protected $routes = [];
    private function addrote ($route,$controller,$action,$method)
    // $route => Représente l’URL du chemin défini. Exemple : "/home", "/login".
    // $controller => Indique le nom du contrôleur qui sera exécuté lorsque l’utilisateur accède à cette route. Exemple : "HomeController", "AuthController".
    // $action => Correspond à la méthode (fonction) à exécuter dans le contrôleur spécifié. Exemple : "index", "authenticate"
    // $method => Définit la méthode HTTP utilisée (GET, POST, PUT, DELETE).
    {
        $this->routes[$method][$route] = [
            'controller' => $controller, 
            'action' => $action
        ];  
    }

    // function get 
    public function get($route,$controller,$action)
    {
        $this->addrote($route,$controller,$action,"GET");
    }

    //function post
    public function post($route,$controller,$action)
    { 
        $this->addrote($route,$controller,$action,'POST');
    }
   

    // dispatch 
    public function dispatch()
    {
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $method =  $_SERVER['REQUEST_METHOD'];
        // var_dump($method);
        if (array_key_exists($uri, $this->routes[$method])) {
            $controller = $this->routes[$method][$uri]['controller'];
            var_dump($controller);
            // in ry ena methode ex = post----> /hom --------> countroler 
            $action = $this->routes[$method][$uri]['action'];
            $controller = new $controller();
            $controller->$action();
        } else {
            // $this->render('404');
        }
    }

}
