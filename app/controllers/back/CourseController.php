<?php
namespace app\controllers\back;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

use app\coure\Controller;
use app\models\User\Course;


class CourseController extends controller{
    protected $cours;
    protected $twig;
    protected $loder;

    public function __construct(){
        $this->cours= new Course();
        $this->loder = new FilesystemLoader('C:\laragon\www\architecture-MVC\app\views');
        $this->twig = new Environment($this->loder);
    }

    public function home()
    {
        $allArticles=$this->cours->getCourses();
        // var_dump($allArticles);  
       
        echo  $this->twig->render('index.html.twig',['cours'=>$allArticles]);
    }
//    cours => le vriable a qui traville 
//    index => page 

    public function cours(){
        $cour=$this->cours->getCourseById($_GET['id']);
        
        // $this->render('article',['course'=>$article]);
        echo  $this->twig->render('article.html.twig',['cour'=>$cour]);
    }
}