<?php
    $dbHost = "89.46.111.66";
    $dbUser = "Sql1215928";
    $dbPass = "13kxg2yw63";
    $dbDatabase = "Sql1215928_1";

    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbDatabase = "joc";
 
 
$charset = 'utf8mb4';

$dsn = "mysql:host=$dbHost;dbname=$dbDatabase;charset=$charset";
$opt = array();
$pdo = new PDO($dsn, $dbUser, $dbPass, $opt);   
 
?>