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
        $this->render('index',['articles'=>$allArticles]);
    }

    public function article(){
        $article=$this->cours->getCourseById($_GET['id']);
        $this->render('article',['article'=>$article]);
    }
}