<?php 
require_once 'model/modelo.php';

class Controlador{
    private $modelo;
    public function __construct(){
        global $conn;
        $this->modelo = new Modelo($conn);
    }

    public function listarUsuarios(){
        $users=$this->modelo->ObtenerUser();
        require 'view/vista.php';
    }

    public function eliminarUser($id){
        $this->modelo->eliminarUser($id);
        $this->listarUsuarios();
    }
    public function agregarUsuario($nombre, $email) {
        if ($this->modelo->agregarUsuario($nombre, $email)) {
            
            $this->listarUsuarios();
        } else {
            
            echo "Error al agregar el usuario.";
        }
    }


}

?>