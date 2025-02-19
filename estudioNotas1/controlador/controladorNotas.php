<?php
require_once 'modelo/modeloNotas.php';

class controladorNotas {
  private $modeloNotas;

  public function __construct($conexion) {
    $this->modelo= new modeloNotas();
  }

  public function getNotas(){
    $notas=$this->modelo->getNotas();
    require 'vista/vistaNotas.php';
  }

  public function addNotas($nota){
    $this->modelo->addNotas($nota);
    $this->getNotas();
  }

  public function deleteNotas($id){
    $this->modelo->deleteNotas($id);
    $this->getNotas();

  }

}





/*
require_once 'modelo/modeloNotas.php';

class controladorNotas{
    private $modeloNotas;

  public function __construct($conexion){
    $this->modeloNotas = new modeloNotas($conexion);
  }

  public function getNotas(){
    $notas= $this->modeloNotas->getNotas();
    require "vista/vistaNotas.php";
  }

  public function addNotas($texto){
    $this->modeloNotas->addNotas($texto);
    $this->getNotas();
  }

  public function deleteNotas($id){
    $this->modeloNotas->deleteNotas($id);
    $this->getNotas();
  }
*/
?>