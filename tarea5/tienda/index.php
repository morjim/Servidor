<?php
require_once 'controlador/controlador.php';
require_once 'modelo/bd.php';
$controlador = new Controlador($conn);
$action = $_GET['action'] ?? 'list';
$id = $_GET['id'] ?? 0;
switch($action){
    case 'list':
        $controlador->listarProductos();
        break;

    case 'detail':
        if(isset($_GET['id'])){
            $controlador -> mostrarDetalle($_GET['id']);
        }else{
            echo "Error: No se ha proporcionado el id del producto.";
        }
        break;

        default:
        $controlador -> listarProductos();
        break;
}

?>