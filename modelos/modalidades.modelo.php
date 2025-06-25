<?php

require_once "conexion.php";

class ModeloModalidades {

    // Mostrar una o todas las modalidades
    static public function mdlMostrarModalidades($dato ) {
        if ($dato == null) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM modalidad");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM modalidad WHERE ID_modalidad = :id");
            $stmt->bindParam(":id", $dato, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        
        $stmt->close();
        $stmt = null;
    }

    // Insertar nueva modalidad
    static public function mdlIngresarModalidad($tabla, $datos) {
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(modalidad) VALUES (:modalidad)");
    $stmt->bindParam(":modalidad", $datos["modalidad"], PDO::PARAM_STR);

    if ($stmt->execute()) {
        return "ok";
    } else {
        return "error";
    }

    $stmt->close();
    $stmt = null;
}


    // Editar modalidad
   static public function mdlEditarModalidad($datos) {
    $stmt = Conexion::conectar()->prepare("UPDATE modalidad SET modalidad = :modalidad WHERE ID_modalidad = :id_modalidad");

    $stmt->bindParam(":modalidad", $datos["modalidad"], PDO::PARAM_STR);
    $stmt->bindParam(":id_modalidad", $datos["id_modalidad"], PDO::PARAM_INT);

    if ($stmt->execute()) {
        return "ok";
    } else {
        return "error";
    }

    $stmt->close();
    $stmt = null;
}


    
}
