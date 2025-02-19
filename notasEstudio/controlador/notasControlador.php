<?php
require_once 'modelo/notasModelo.php';
class notasControlador{
    private $modelo;
    public function __construct($conexion){
       // global $conexion;
        $this->modelo=new notasModelo($conexion);
    }

    public function getNotas(){
        $notas=$this->modelo->getNotas();
        require 'vista/notasVista.php';
    }

    public function addNotas($texto){
        if($this->modelo->addNotas($texto)){
            echo "Nota agregada con exito";
           
        }
        $this->getNotas();
    }

    public function deleteNotas($id){
        if($id){
            $this->modelo->deleteNotas($id);
            echo "Nota eliminada con exito";
        }
        $this->getNotas();
       
    }



}