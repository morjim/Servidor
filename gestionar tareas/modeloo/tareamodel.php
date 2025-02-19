<?php 
require_once 'bd.php';

/**
 * Modelo para manejar las operaciones relacionadas con las tareas en la base de datos.
 * 
 * @author Luis <luisgalvez@gmail.com>
 * @version 1.0
 */
class Tareamodel {

    public $conn;

    /**
     * Constructor de la clase. Establece la conexión a la base de datos.
     * 
     * @author Luis <luisgalvez@gmail.com>
     * @version 1.0
     */
    public function __construct() {
        global $conn;
        $this->conn = $conn;
    }

    /**
     * Lista todas las tareas desde la base de datos.
     * 
     * @return array Devuelve un arreglo con los datos de las tareas.
     * 
     * @author Luis <luisgalvez@gmail.com>
     * @version 1.0
     */
    public function listarTarea() {
        global $conn;  
        $sql = "SELECT * FROM titulo";  
        $result = $conn->query($sql);   

        $tareas = [];
        while ($row = $result->fetch_assoc()) {  
            $tareas[] = $row; 
        }
        return $tareas; 
    }

    /**
     * Añade una nueva tarea a la base de datos.
     * 
     * @param string $titulo Título de la nueva tarea.
     * 
     * @return void
     * 
     * @author Luis <luisgalvez@gmail.com>
     * @version 1.0
     */
    public function añadirTarea($titulo) {
        global $conn;
        // Usamos prepared statements para evitar inyecciones SQL.
        $stmt = $conn->prepare("INSERT INTO titulo (titulo, completado) VALUES (?, 0)");
        $stmt->bind_param("s", $titulo);  // 's' indica que el parámetro es una cadena
        if ($stmt->execute()) {
            echo "Tarea añadida exitosamente"; 
        } else {
            echo "Error al añadir tarea: " . $conn->error; 
        }
    }

    /**
     * Marca una tarea como completada en la base de datos.
     * 
     * @param int $id El ID de la tarea a completar.
     * 
     * @return void
     * 
     * @author Luis <luisgalvez@gmail.com>
     * @version 1.0
     */
    public function CompletarTarea($id) {
        global $conn;
        // Usamos prepared statements para evitar inyecciones SQL.
        $stmt = $conn->prepare("UPDATE titulo SET completado = 1 WHERE id = ?");
        $stmt->bind_param("i", $id);  // 'i' indica que el parámetro es un entero
        $stmt->execute();
    }
}
?>
