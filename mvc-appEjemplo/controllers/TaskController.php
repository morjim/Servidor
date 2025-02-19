 <?php 
 /**
 * @author Antonio Moreno Jiménez <alu-antmorjim@foc.es> 
 * @version 1.0.1 Estable
 * requiere el modelo
 */
require_once 'models/TaskModel.php'; 
 
class TaskController { 
    private $model; 
    /**
     * el constructor crea un objeto de la clase taskmodel
     */
    public function __construct() { 
        $this->model = new TaskModel(); 
    } 
    /**
     * la funcion lista muestra todas las tareas llamando al modelo
     */
    public function listTasks() { 
        $tasks = $this->model->getTasks(); 
        require 'views/tasks.php'; 
    } 
    /**
     * Añadir tarea
     * @param string $title
     * lista tareas
     */
    public function addTask($title) { 
        $this->model->addTask($title); 
        $this->listTasks(); 
    } 
 
    public function completeTask($id) { 
        $this->model->completeTask($id); 
        $this->listTasks(); 
    } 
} 