<?php

    require_once "conexion.php";

    class ModeloProgramas{

        static public function mdlMostrarProgramas(){
            
            $stmt = Conexion::conectar()->prepare("SELECT * FROM programas");
    
            $stmt-> execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $stmt->close();
            $stmt = null;

        }//fin de la funcion mdlMostrarProgramas

        static public function mdlIngresarPrograma($tabla, $datos){
            try {
                $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_programa, version_programa) VALUES (:nombre_programa, :version_programa)");
                $stmt->bindParam(":nombre_programa", $datos["nombre_programa"], PDO::PARAM_STR);
                $stmt->bindParam(":version_programa", $datos["version_programa"], PDO::PARAM_STR);
                if($stmt->execute()){
                    return "ok";
                }else{
                    return "error";
                }
            }catch (Exception $e) {
                return $e->getMessage();
            }finally{
                $stmt -> closeCursor();
                $stmt = null;
            }
        }



    }

?>