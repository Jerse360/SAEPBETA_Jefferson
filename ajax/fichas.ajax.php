<?php

require_once "../controladores/fichas.controlador.php";
require_once "../modelos/fichas.modelo.php";

class AjaxFichas {

    public $id_ficha;
    public $estado_ficha;

    /**
     * Traer datos de una ficha específica por su ID
     */
    public function ajaxTraerFicha() {
        $valor = $this->id_ficha;
        $respuesta = ControladorFichas::ctrMostrarFichas($valor);
        echo json_encode($respuesta);
    }

    /**
     * Cambiar el estado de una ficha (Activo / Inactivo)
     */
    public function ajaxCambiarEstadoFicha() {
        $valorId = $this->id_ficha;
        $estado = $this->estado_ficha;
        $respuesta = ControladorFichas::ctrCambiarEstadoFicha($valorId, $estado);
        echo json_encode($respuesta);
    }

} // Fin clase AjaxFichas


// Petición AJAX: Cambiar estado de una ficha
if (isset($_POST["id_cambiarEstado"]) && isset($_POST["estadoFicha"])) {
    $activarEstado = new AjaxFichas();
    $activarEstado->id_ficha = $_POST["id_cambiarEstado"];
    $activarEstado->estado_ficha = $_POST["estadoFicha"];
    $activarEstado->ajaxCambiarEstadoFicha();
}

// Petición AJAX: Traer datos de una ficha específica
elseif (isset($_POST["id_ficha"]) && !isset($_POST["estadoFicha"])) {
    $ficha = new AjaxFichas();
    $ficha->id_ficha = $_POST["id_ficha"];
    $ficha->ajaxTraerFicha();
}

