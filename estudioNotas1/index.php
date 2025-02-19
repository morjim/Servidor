<?php
require_once 'controlador/controladorNotas.php';
require_once 'modelo/modeloNotas.php';
require_once 'modelo/bd.php';
$controlador = new controladorNotas($conexion);
$action = $_GET['action'] ?? 'list';
switch($action){
    case 'add':
        $text
}

/*
$controlador = new controladorNotas($conexion);
$action=$_GET['action']??'list';

switch($action){
    case 'add':
        $texto=$_POST['nota'];
        $controlador->addNota($texto);
        break;
    case 'delete':
        $id=$_GET['id'];
        $controlador->delete($id);
        break;
    default:
    $controlador->getNotas();
    break;
}
*/
?>