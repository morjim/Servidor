<?php 
require_once 'model/bd.php';  
require_once 'model/tareamodel.php';  
require_once 'controller/ControladorTarea.php';  

$controller = new ControladorTarea();

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'add':
        $title = $_POST['title'] ?? '';
        if (!empty($title)) {
            $controller->añadirTarea($title);
        }
        break;

    case 'complete':
        $id = $_POST['id'] ?? 0; 
        if ($id > 0) {
            $controller->CompletarTarea($id);
        }
        break;

    case 'list':
    default:
        $controller->listarTarea();
        break;
}
?>