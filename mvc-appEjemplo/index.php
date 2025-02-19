 
<?php 
/**
 * @author Antonio Moreno Jiménez <alu-antmorjim@foc.es> 
 * @version 1.0.1 Estable
 */
require_once 'controllers/TaskController.php'; 
 
$controller = new TaskController(); 
 
$action = $_GET['action'] ?? 'list'; 
 
switch ($action) { 
    case 'add': 
        $title = $_POST['title'] ?? ''; 
        if (!empty($title)) { 
            $controller->addTask($title); 
        } 
        break; 
 
    case 'complete': 
        $id = $_GET['id'] ?? 0; 
        $controller->completeTask($id); 
        break; 
 
    default: 
        $controller->listTasks(); 
        break; 
}