<?php
require_once __DIR__ .'/../modelo/notasModel.php';
class notasController{
    private $model;

    public function __construct(){

        $this->model = new notasModel();
    }

    public function listNotas(){
        $notas=$this-> model -> getNotas();
        require 'vista/notasView.php';
    }

    public function addNotas($content){
        $this-> model -> addNota($content);
        $this->listNotas();
    }

    public function deleteNotas($id){
        $this->model->deleteNota($id);
        $this->listNotas();
    
    }
}

?>