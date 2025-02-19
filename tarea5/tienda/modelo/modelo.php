<?php
require_once "bd.php";

class Modelo{
    private $conn;
    public function __construct($dbConn){
        $this->conn = $dbConn;
    }

    public function obtenerProductos(){
        $sql = "SELECT * FROM tienda";
        $result = $this->conn->query($sql);
    

        if($result->num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
    }
    public function obtenerProducto($id){
        $sql = "SELECT * FROM tienda WHERE id = '$id'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_assoc();
        }
        return null;
    }

    public function aniadirSugerencias(){
        $sql = "INSERT INTO sugerencias texto value (?)";
        $result =$this->conn->query($sql);

        if($result-> num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
    }

    public function listarSugerencias($id){
        $sql = "SELECT * FROM sugerencias where id = '$id'";
        $result = $this->conn->query($sql);
        if($result->num_rows>0){
            return $result->fetch_all();
    }
    return null;
    }

    public function aniadirUsuario(){
        $sql = "INSERT INTO usuario (email, contraseña) value (? ?)";
        $result =$this->conn->query($sql);

        if($result -> num_rows>0){
            return $result->fetch_all(MYSQLI_ASSOC);
        }else{
            return [];
        }
        }

}
?>