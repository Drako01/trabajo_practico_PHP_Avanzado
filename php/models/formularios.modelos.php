<?php

require_once "conexion.php";

// Formulario de Usuarios
class ModeloFormularios
{
    static public function mdlRegistro($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, email, pass)
        VALUES (:nombre, :email, :pass )");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();

        $stmt = null;
    }

    // Seleccionar Registro

    static public function mdlSeleccionarRegistro($tabla, $item, $valor)
    {
        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

            $stmt->execute();

            return $stmt->fetchAll();
            $stmt->closeCursor();

            $stmt = null;
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item = :$item ORDER BY id DESC");

            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);

            $stmt->execute();
            return $stmt->fetch();
            $stmt->closeCursor();

            $stmt = null;
        }
    
    }

    // Actualizar Registro

    static public function mdlActualizarRegistro($tabla, $datos)
    {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, pass= :pass WHERE id = :id");
        
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":pass", $datos["pass"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "Ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();

        $stmt = null;
    }

    //Eliminar Registro

    static public function mdlEliminarRegistro($tabla, $valor)
    {
        $stmt = Conexion::conectar()->prepare("DELETE FROM  $tabla WHERE id = :id");

        $stmt->bindParam(':id', $valor, PDO::PARAM_STR);
        if ($stmt->execute()) {
            return "Ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt->closeCursor();

        $stmt = null;
    }
}

//************************************************************************************************************************************//
// Formulario de Contacto
class ModeloContactos
{
    static public function mdlRegistroContacto($tabla_contacto, $datos_contacto)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla_contacto (nombre_c, apellido_c, telefono_c, email_c, mensaje_c)
        VALUES (:nombre_c, :apellido_c, :telefono_c , :email_c, :mensaje_c)");

        $stmt->bindParam(":nombre_c", $datos_contacto["nombre_c"], PDO::PARAM_STR);
        $stmt->bindParam(":apellido_c", $datos_contacto["apellido_c"], PDO::PARAM_STR);
        $stmt->bindParam(":telefono_c", $datos_contacto["telefono_c"], PDO::PARAM_STR);
        $stmt->bindParam(":email_c", $datos_contacto["email_c"], PDO::PARAM_STR);
        $stmt->bindParam(":mensaje_c", $datos_contacto["mensaje_c"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "Ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->closeCursor();

        $stmt = null;
    }
}
