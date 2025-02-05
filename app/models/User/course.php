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
    public function getUserByEmail($email) {
        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getCourseById($id){
        $query = "SELECT * FROM courses WHERE id = :id";
        $result = $this->connection->prepare($query);
        $result->execute(['id' => $id]);
        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email, $password) {
        $stmt = $this->connection->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }
}
?>
