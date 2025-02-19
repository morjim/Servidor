<?php
require_once 'modelo/modelo.php';

class Controlador{
    private $modelo;
    public function __construct($conn){
        global $conn;
        $this->modelo = new Modelo($conn);
    }

    public function listarProductos(){
        $product=$this->modelo->obtenerProductos();
        require 'vista/lista.php';
    }

    public function mostrarDetalle($id){
        $product=$this->modelo->obtenerProducto($id);
        if($product){
            require 'vista/detalle.php';
        }else{
            echo "No se encontró el producto";
        }
    }

   
}


?>