<?php 
namespace app\coure;

class Controller {
    public function render($view, $data = []) {
        extract($data);
        require __DIR__ . "/../views/$view.php";
    }
}
