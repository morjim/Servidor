<?php
require_once 'modelo/modelo.php';

class registroControlador(){
    private $modelo

    public function __construct(){
        $this->modelo=new Modelo();
    }

    public function aniadirUsuario(){
        $usuario = $this -> modelo -> aniadirUsuario();
        require 'vista/registro.php';
    }

    
}

?>