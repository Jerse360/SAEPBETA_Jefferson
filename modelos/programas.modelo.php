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

        static public function mdlIngresarPrograma($tabla, $dato){

            try {
                $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_programa) VALUES (:nombre_programa)");

                $stmt->bindParam(":nombre_programa", $dato, PDO::PARAM_STR);
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