<?php

    require_once "../controladores/programas.controlador.php";
    require_once "../modelos/programas.modelo.php";

    class AjaxProgramas{

        public $id_programa;

        public function ajaxTraerPrograma(){

            $valor = $this->id_programa;
            $respuesta = ControladorProgramas::ctrMostrarProgramas($valor);
            echo json_encode($respuesta);

        }//Fin ajaxTraerprograma

    }//fin clase Ajaxprogramas

    if (isset($_POST["id_programa"])){
        $programa = new AjaxProgramas();
        $programa->id_programa = $_POST["id_programa"];
        $programa->ajaxTraerPrograma();       
    }