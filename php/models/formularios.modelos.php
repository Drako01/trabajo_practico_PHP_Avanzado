<?php

require_once "conexion.php";

class ModuloFormularios{    
    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, pass)
        VALUES (:nombre, :email, :pass )");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);

        if($stmt -> execute()){
            return "Ok";
            
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();

        $stmt = null;
    }

}