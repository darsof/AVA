<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'ava';

try{
    $conexion = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
}catch(PDOException $error){
    die('No se establecio conexión'." ".$error->getMessage());
}
?>