<?php
require_once 'modelo/taskModel.php';

class taskController{
    private $model;

    public function __construct(){
        $this->model = new taskModel();
    }

    public function list_task(){
        $task = $this->model->getTask();
        require 'vista/taskView.php';
    }

    public function add_task($tittle){
        $this->model->addTask($tittle);
        $this->list_task();
    }

    public function completeTask($id){
        $this-> model ->completeTask($id);
        $this->list_task();
}
}
?>