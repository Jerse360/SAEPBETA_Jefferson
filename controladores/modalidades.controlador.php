<?php

class ControladorModalidades {

    // Mostrar una o todas las modalidades
    static public function ctrMostrarModalidades($valor = null) {
        $respuesta = ModeloModalidades::mdlMostrarModalidades($valor);
        return $respuesta;
    }

    // Crear modalidad
    static public function ctrCrearModalidad() {
        if (isset($_POST["nombreModalidad"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["nombreModalidad"])) {

                $tabla = "modalidad";
                $datos = array("modalidad" => $_POST["nombreModalidad"]);

                $respuesta = ModeloModalidades::mdlIngresarModalidad($tabla, $datos);

                if ($respuesta == "ok") {
                    echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Modalidad registrada correctamente",
                        confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "modalidades";
                        }
                    });
                    </script>';
                }
            }
        }
    }

    // Editar modalidad
    static public function ctrEditarModalidad() {
        if (isset($_POST["editIdModalidad"])) {
            if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ. ]+$/', $_POST["editNombreModalidad"])) {

                $datos = array(
    "id_modalidad" => $_POST["editIdModalidad"],
    "modalidad" => $_POST["editNombreModalidad"]
);

                $respuesta = ModeloModalidades::mdlEditarModalidad($datos);

                if ($respuesta == "ok") {
                    echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Modalidad actualizada correctamente",
                        confirmButtonText: "Cerrar"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "modalidades";
                        }
                    });
                    </script>';
                }
            }
        }
    }

   
}
