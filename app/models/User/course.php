<?php 

namespace app\models\User;

use app\Config\Database;
use PDO;

class Course {

    protected $connection;

    public function __construct(){
        $this->connection = Database::connect();
        if (!$this->connection) {
            die("Erreur de connexion à la base de données");
        }
    }
    
    public function getCourses(){
        $query = "SELECT * FROM courses";
        $result = $this->connection->prepare($query);
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCourseById($id){
        $query = "SELECT * FROM courses WHERE id = :id";
        $result = $this->connection->prepare($query);
        $result->execute(['id' => $id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }
}
?>
