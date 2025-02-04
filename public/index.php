<?php 
require_once dirname(__FILE__, 2).'/vendor/autoload.php';
use app\Config\Database;
$pdo = Database::connect();
var_dump($pdo);
?>
