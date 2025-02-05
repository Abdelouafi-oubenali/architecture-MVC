<?php 
namespace app\controllers\back;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class AuthController {
    protected $cours;
    protected $twig;
    protected $loder;

    public function __construct(){
        $this->loder = new FilesystemLoader('C:\laragon\www\architecture-MVC\app\views');
        $this->twig = new Environment($this->loder);
    }

    public function showLoginForm() {
        echo $this->twig->render('login.html.twig');
    }
}

