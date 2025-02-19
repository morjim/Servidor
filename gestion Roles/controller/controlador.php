<?php 
require_once __DIR__ . '/../model/modelo.php';

class Controlador {
    private $model;

    public function __construct() {
        $this->model = new Modelo();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'];
            $gmail = $_POST['gmail'];
            $contraseña = $_POST['contraseña'];
            $rol = $_POST['rol'];
    
            $result = $this->model->registrarUser ($nombre, $gmail, $contraseña, $rol);
    
            if ($result === true) {
                echo "Usuario registrado exitosamente. <a href='?action=login'>Iniciar sesión</a>";
            } else {
                echo htmlspecialchars($result); 
            }
        } else {
            require __DIR__ . '/../view/register-view.php'; 
        }
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $gmail = $_POST['gmail'];
            $contraseña = $_POST['contraseña'];

            $user = $this->model->loginUser ($gmail, $contraseña);
            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nombre'] = $user['nombre'];
                $_SESSION['user_rol'] = $user['rol'];

                if ($user['rol'] === 'admin') {
                    header("Location: ?action=admin");
                } else {
                    header("Location: ?action=user");
                }
                exit;
            } else {
                echo "Credenciales incorrectas.";
                
                header("Location: ?action=login");
                exit;
            }
        } else {
            require './view/vista.php';
        }
    }

    public function adminPage() {
        if (isset($_SESSION['user_rol']) && $_SESSION['user_rol'] === 'admin') {
            require __DIR__.'/../admin-page.php';
        } else {
            header("Location: ?action=login");
            exit;
        }
    }

    public function userPage() {
        if (isset($_SESSION['user_rol']) && $_SESSION['user_rol'] === 'user') {
            require __DIR__.'/../user-page.php';
        } else {
            header("Location: ?action=login");
            exit;
        }
    }

    public function logout() {
        session_destroy();
        header("Location: ?action=login");
        exit;
    }
}
?>