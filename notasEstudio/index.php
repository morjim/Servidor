<?php
require_once 'controlador/notasControlador.php';
require_once 'modelo/notasModelo.php';
require_once 'modelo/bd.php';
$controlador = new notasControlador($conexion);
$action=$_GET['action'] ?? 'list';
$id = $_GET['id'] ?? 0;

switch($action){
    case 'add':
        $texto=$_POST['nota'];
        $controlador->addNotas($texto);
        break;
    case 'delete':
        $controlador->deleteNotas($id);
        break;
    default :
        $controlador->getNotas();
        break;
}
