<?php

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
 
require_once('inc_global.php');


$query="SELECT id FROM back ORDER BY RAND() LIMIT 1 ";
$req1 = $pdo->query($query);
$req1->execute();
$list1 = $req1->fetch(PDO::FETCH_OBJ);


$query="select id from quotes ORDER BY RAND() LIMIT 0,1 ";
$req2 = $pdo->query($query);
$req2->execute();
$list2 = $req2->fetch(PDO::FETCH_OBJ);


return $list1['id']."|".$list2['id'];
 
?>
