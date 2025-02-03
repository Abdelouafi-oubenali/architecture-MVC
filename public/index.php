<?php 
var_dump(require_once "../app/config/Config.php");
$pdo = Config::connect();
phpinfo();

var_dump($pdo);

?>