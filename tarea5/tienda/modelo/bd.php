<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "root", "", "mecagooo");
if($conn ->connect_error){
    die("Conexión fallida: " . $conn->connect_error);
}
?>