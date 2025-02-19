<?php
require_once './controller/controlador.php';

$controller = new Controlador();
$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'register':
        $controller->register();
        break;
    case 'login':
        $controller->login();
        break;
    case 'admin':
        $controller->adminPage();
        break;
    case 'user':
        $controller->userPage();
        break;
    case 'logout':
        $controller->logout();
        break;
    default:
        $controller->login();
        break;
}

