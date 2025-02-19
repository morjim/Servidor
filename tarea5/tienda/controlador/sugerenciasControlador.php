<?php
require_once 'modelo/modelo.php';
class sugerenciasControlador(){
    private $modelo ;

    public function __construct(){
        $this->modelo = new modelo();
        }
    public function aniadirSugerencias(){
        $sugerencia =$this-> modelo-> aniadirSugerencia();
        require 'vista/sugerencias.php'; 
    }

    public function listarSugerencias($id){
        $sugerencia =$this-> modelo-> obtenerSugerencia($id);
        if($sugerencia){
            require 'vista/sugerencias.php';
        }else{
            echo "No se encontró la sugerencia";
        }
    }

}

?>