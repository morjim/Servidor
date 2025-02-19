<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conexion = new mysqli("localhost", "root", "", "estudio");
if($conexion ->connect_errno ) {
    die("Fallo la conexión" . $conexion->connect_error);
}