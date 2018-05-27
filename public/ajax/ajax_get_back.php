<?php
//header('Content-Type: text/html; charset=UTF-8');
//header("Content-type: application/json; charset=utf-8");

//error_reporting(0);
require_once('inc_global.php');


$query="SELECT img FROM back ORDER BY RAND() LIMIT 1 ";
$req = $pdo->query($query);
$req->execute();
$list = $req->fetch(PDO::FETCH_OBJ);
   
echo $list->img;

 
?>
