<?php
require_once 'controller/controlador.php'; 

$controller = new Controlador(); 
$action = $_GET['action'] ?? 'list'; 

switch ($action) {
    case 'add':
        $name = $_POST['name'] ?? ''; 
        $email = $_POST['email'] ?? '';  
        if (!empty($name) && !empty($email)) {
            $controller->agregarUsuario($name, $email);  
        }
        break;

    case 'delete':
        $id = $_GET['id'] ?? 0;  
        if ($id) {
            $controller->eliminarUser($id);  
        }
        break;

    default:
        $controller->listarUsuarios();  
        break;
}
?>
