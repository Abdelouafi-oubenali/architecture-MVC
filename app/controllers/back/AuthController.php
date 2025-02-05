<?php 
namespace app\controllers\back;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use app\models\User\Course;
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
    public function showLregsterForm(){
        echo $this->twig->render('regster.html.twig');
    }
    public function register() {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($name) || empty($email) || empty($password)) {
            echo $this->twig->render('auth/register.html.twig', ['error' => 'entrer all data']);
            return;
        }
        
        $userModel = new Course();
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $userModel->createUser($name, $email, $hashedPassword);
        header('Location: /login');
        exit;
    }
    
}
public function login() {
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        $userModel = new Course();
        $user = $userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user;
            header('Location: /');
            exit;
        } else {
            echo $this->twig->render('auth/login.html.twig', ['error' => ' le code au email no courcct  ']);
        }
    }
}

}
