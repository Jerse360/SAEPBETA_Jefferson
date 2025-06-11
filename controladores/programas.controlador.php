<?php

    class ControladorProgramas{

        /*=============================================
        MOSTRAR PROGRAMAS
        =============================================*/

        static public function ctrMostrarProgramas(){
            
            $respuesta = ModeloProgramas::mdlMostrarProgramas();
            return $respuesta;
            
        }//   fin metodo ctrMostrarProgramas

        /*=============================================
        REGISTRO DE PROGRAMAS
        =============================================*/

        static public function ctrCrearPrograma(){

            if(isset($_POST["descripcionPrograma"]) && isset($_POST["versionPrograma"])){
                if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["descripcionPrograma"]) &&
                   preg_match('/^[a-zA-Z0-9_.-]+$/', $_POST["versionPrograma"])){

                    $tabla = "programas";
                    $datos = array(
                        "nombre_programa" => $_POST["descripcionPrograma"],
                        "version_programa" => $_POST["versionPrograma"]
                    );

                    $respuesta = ModeloProgramas::mdlIngresarPrograma($tabla, $datos);

                    if($respuesta == "ok"){
                        echo '<script>
                        swal.fire({
                            type: "success",
                            title: "El programa ha sido guardado correctamente",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"
                            }).then(function(result){
                                if(result.value){
                                window.location = "programas";
                                }
                            })
                        </script>';
                    }
                }
            }
        }
    }



?>