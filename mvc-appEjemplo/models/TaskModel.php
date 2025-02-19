 
<?php 
/**
 * @author Antonio Moreno Jiménez <alu-antmorjim@foc.es> 
 * @version 1.0.1 Estable
 */
class TaskModel { 
    private $tasks = []; 
 /**
  * Es el constructor, que crea una lista de tareas
  */
    public function __construct() { 
        // Datos iniciales 
        $this->tasks = [ 
            ['id' => 1, 'title' => 'Comprar pan', 'completed' => 
false], 
            ['id' => 2, 'title' => 'Llamar a mamá', 'completed' => 
true], 
        ]; 
    } 
 /**
  * Muestra la lista de tareas
  */
    public function getTasks() { 
        return $this->tasks; 
    } 
 /**
  * Añade tareas a a la lista
  * @param string $title Título de la tarea
  */
    public function addTask($title) { 
        $id = count($this->tasks) + 1; 
        $this->tasks[] = ['id' => $id, 'title' => $title, 
'completed' => false]; 
    } 
 /**
  * Comprueba si las tareas están completadas
  * @param int $id Identificador de la tarea
  */
    public function completeTask($id) { 
        foreach ($this->tasks as &$task) { 
            if ($task['id'] == $id) { 
                $task['completed'] = true; 
                return; 
            } 
        } 
    } 
} 