<?php
namespace app\controllers\back;

use app\coure\Controller;
use app\models\User\Course;
class CourseController extends controller{
    protected $cours;
    public function __construct(){
        $this->cours= new Course();
    }

    public function home()
    {
        $allArticles=$this->cours->getCourses();
        $this->render('index',['cours'=>$allArticles]);
    }
//    cours => le vriable a qui traville 
//    index => page 

    public function cours(){
        $article=$this->cours->getCourseById($_GET['id']);
        $this->render('article',['course'=>$article]);
    }
}