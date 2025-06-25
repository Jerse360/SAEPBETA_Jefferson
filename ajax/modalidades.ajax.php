<?php

require_once "../controladores/modalidades.controlador.php";
require_once "../modelos/modalidades.modelo.php";

class AjaxModalidades {

    public $id_modalidad;

    // Método para traer una modalidad por ID
    public function ajaxTraerModalidad() {
        $valor = $this->id_modalidad;
        $respuesta = ControladorModalidades::ctrMostrarModalidades($valor);
        echo json_encode($respuesta);
    }

}

// Verificar si viene la solicitud con id_modalidad
if (isset($_POST["id_modalidad"])) {
    $modalidad = new AjaxModalidades();
    $modalidad->id_modalidad = $_POST["id_modalidad"];
    $modalidad->ajaxTraerModalidad();
}
