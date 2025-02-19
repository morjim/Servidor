<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

$conexion = new mysqli("localhost","root","","gestion_notas");
if($conexion->connect_error){
    die("Fallo la conexion: ".$conexion->connect_error);
}

?>