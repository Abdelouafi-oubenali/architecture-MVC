<?php 
namespace app\Config;
use PDO;
use PDOException;

class Database {
   private static ?PDO $pdo = null;

   public static function connect(): PDO {
      if (self::$pdo === null) {
         try {
            self::$pdo = new PDO("pgsql:host=localhost;port=5433;dbname=youcode", "postgres", "kizaru2004", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
         } catch (PDOException $e) {
            die("Erreur de connexion : " . $e->getMessage());
         }
      }
      return self::$pdo;
   }
}
?>
