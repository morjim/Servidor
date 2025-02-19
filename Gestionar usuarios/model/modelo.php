<?php 
require_once 'bd/bd.php';

class modelo{
    private $conn;
    public function __construct($dbConn){
        $this->conn = $dbConn; 

}
    public function ObtenerUser(){
        $sql="Select * from users";
        $result = $this->conn->query($sql);


        if($result->num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
    }

    public function agregarUsuario($nombre,$email){
        $sql="INSERT INTO users (nombre,email) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss",$nombre, $email);
        return $stmt->execute();
    }

    public function eliminarUser($id){
        $sql="DELETE FROM users where id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }













}








?>