<?php
require_once 'controlador/notasController.php';
$controller = new notasController();
$action = $_GET['action'] ?? 'list';

switch('action') {
    case 'add':
        $content = $_POST['content']?? '';
        if(!empty($content)){
            $controller->addNota($content);
        }
        break;
    case 'delete':
        $id =$_GET['id'] ?? 0;
        if($id){
            $controller->deleteNota($id);
        }
        break;
    default:
        $controller->listNotas();
        break;
}

?>