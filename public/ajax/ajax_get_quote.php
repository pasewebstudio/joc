<?php
//header('Content-Type: text/html; charset=UTF-8');
//header("Content-type: application/json; charset=utf-8");

//error_reporting(0);
require_once('inc_global.php');


$query="select * from quotes where id = 1 LIMIT 0,1 ";
$req = $pdo->query($query);
$req->execute();
$list = $req->fetch(PDO::FETCH_OBJ);

echo "<h3>".$list->quote ."</h3><i>".$list->author."</i>";


?>
