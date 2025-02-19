<?php 
require_once __DIR__.'/../bd/bd.php';

class Modelo {
    private $conn;

    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    public function registrarUser ($nombre, $gmail, $contraseña, $rol) {
        $sql = "SELECT * FROM usuarios WHERE gmail = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $gmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            return "El usuario ya está registrado.";
        }

        $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, gmail, contraseña, rol) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $nombre, $gmail, $contraseña_hash, $rol);
        if ($stmt->execute()) {
            return true;
        } else {
            return "Error al registrar el usuario.";
        }
    }

    public function loginUser ($gmail, $contraseña) {
        $sql = "SELECT * FROM usuarios WHERE gmail = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $gmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return false; // Usuario no encontrado
        }

        $user = $result->fetch_assoc();
        if (password_verify($contraseña, $user['contraseña'])) {
            return $user; // Credenciales correctas
        } else {
            return false; // Contraseña incorrecta
        }
    }
}
?>
