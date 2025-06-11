<?php

class ControladorUsuarios{

    public function ctrIngresoUsuario(){
        if (isset($_POST["ingEmail"])){
            if (preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["ingEmail"]) && preg_match("/^[a-zA-Z0-9]+$/",$_POST["ingPassword"])){


                    $tabla = "usuarios";
                    $item = "email";
                    $valor = $_POST["ingEmail"];

                    $respuesta=ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);
                    // var_dump($respuesta);
                    
                    if ($respuesta["email"] == $_POST["ingEmail"] && $respuesta["clave"]==$_POST["ingPassword"] && $respuesta["estado"]=="Activo"){
                        
                        $_SESSION["iniciarSesion"] = "ok";
                        $_SESSION["idUsuario"]=$respuesta["ID_usuarios"];
                        $_SESSION["nombres"]=$respuesta["nombres"];
                        $_SESSION["apellidos"]=$respuesta["apellidos"];
                        $_SESSION["idRol"]=$respuesta["ID_rol"];
                        
                       
                        echo '<script>window.location = "inicio";</script>';

                    }

                }//fn del pregmatch

        }



    }//Fin método ingreso de usuario



}//FIN DE CLASE USUARIOS