<?php 
require_once 'model/tareamodel.php';


class ControladorTarea{
    private $model;

    public function __construct(){
        $this->model=new Tareamodel();
}

public function listarTarea(){
    $tareas=$this->model->listarTarea();
    require 'view/vista.php';
}
public function añadirTarea($titulo) {
    $this->model->añadirTarea($titulo);
    $this->listarTarea(); 
}

public function CompletarTarea($id){
    $this->model->CompletarTarea($id);
    $this->listarTarea();
}


}
?>