<?php 
class Config {
   private static $pdo = null;
   public static function connect (){
      if(self::$pdo == null){
        try{
            self::$pdo = new PDO("pgsql:host=localhost;dbname=youdemy_db", "root", "", [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC

            ]);
        }catch (PDOException $e){
            die("Erreur de connexion : " . $e->getMessage());
        }
      }
      return self::$pdo;
   }
}
?>