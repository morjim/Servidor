<?php
require_once 'controlador/taskController.php';

$controller = new TaskController();
$action = $_GET['action'] ?? 'list';

switch ($action){
    case 'add':
        $tittle =$_POST['tittle'] ?? '';
        if (!empty($tittle)){
            $controller->add_task($tittle);
        }
        break;
    case 'completed': 
        $id = $_GET['id'] ?? 0;
        $controller -> completeTask($id);
        break;
    default:
        $controller->list_task();
        break;
}

?>