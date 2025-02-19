<?php

class notasModel{
    private $notas = [];

    public function __construct(){
        $this->notas = [
           ["id"=>1, 'content' => 'Nota 1'],
           ["id"=>2, 'content' => 'Nota 2']
        ];
    }

    public function getNotas(){
        return $this->notas;
    }

    public function addNotas($content){
        $id = count($this->notas) + 1;
        $this ->notas[] = ["id"=>$id, 'content'=>$content];
    }

    public function deleteNota($id){
        $this ->notas = array_filter($this->notas, function($nota) use ($id){
            return $nota['id'] != $id;
            });
    }






}