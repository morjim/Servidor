<?php
require 'bd.php';
class notasModelo{
    private $conexion;

    public function __construct($dbConexion){
        $this->conexion = $dbConexion;
    }

    public function getNotas(){
        $sql = "SELECT * FROM notas";
        $result =$this-> conexion->query($sql);

        if($result -> num_rows > 0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
}

    public function addNotas($texto){
        $sql = "INSERT INTO notas (nota) VALUES ('$texto')";
       $this->conexion->query($sql);
    }
    public function deleteNotas($id){
        $sql = "DELETE FROM notas WHERE id = '$id'";
        $this->conexion->query($sql);
    }
}

?>