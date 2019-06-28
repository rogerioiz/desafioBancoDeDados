<?php

$dsn = "mysql:host=localhost;dbname=tabelinha;port3306";
$user ="root";
$pass="";

try{
    $db = new PDO ($dsn, $user, $pass);
} catch (PDOException $ex){
    echo "<h1>Houve uma falha na conexão! Verefique se os dados de conexão estão corretos!</h1>";
    exit;
}