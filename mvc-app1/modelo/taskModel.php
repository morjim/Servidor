<?php
class taskModel{
    private $task=[];

   public function __construct(){
    $this->tasks=[
        ['id' => 1, 'name' => 'Task 1', 'completed'=>true],
        ['id' =>2, 'name'=> 'Task 2 ', 'completed'=>false]
    ]:
   }

   public function getAllTask(){
    return $this->tasks;
   }

   public function addTask($title){
    $id =count($this->task)+1;
    $this->tasks[]=['id'=>$id,'name'=>$title,'completed'=>false];
   }

   public function completeTask($id){
    foreach($this->tasks as &$task){
        if($task['id']==$id){
            $task['completed']=true
            return;
        }   
        }
   }

   public function deleteTask($id){
    foreach($this->task as &$task){
        if($task['id']==$id){
            unset($task);
            return;
            }
    }



}


?>