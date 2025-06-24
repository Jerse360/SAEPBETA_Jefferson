<?php
require_once "controladores/asignacion.controlador.php";
require_once "modelos/asignacion.modelo.php";
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Asignar Evaluador</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-body">
                <table id="tablaAprendices" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Documento</th>
                            <th>Nombre Aprendiz</th>
                            <th>Ficha</th>
                            <th>Empresa</th>
                            <th>Modalidad</th>
                            <th>Instructor</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $aprendices = ControladorAsignacion::ctrMostrarAprendices();
                        foreach ($aprendices as $a) {
                            echo "<tr>";
                            echo "<td>{$a['numero']}</td>";
                            echo "<td>{$a['nombres']} {$a['apellidos']}</td>";
                            echo "<td>{$a['ficha']}</td>";
                            echo "<td>{$a['nombre_empresa']}</td>";
                            echo "<td>{$a['modalidad']}</td>";
                            echo "<td>" . ($a['nombre_instructor'] ? $a['nombre_instructor'] . ' ' . $a['apellido_instructor'] : '<span class=\"text-danger\">Sin asignar</span>') . "</td>";
                            echo "<td>
                            <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#modalEvaluadores'>Asignar</button>
                            <button class='btn btn-danger btn-sm' onclick=\"return false;\">Eliminar</button>
                            </td>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

<!-- Modal evaluadores -->
<div class="modal fade" id="modalEvaluadores">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Seleccionar Evaluador</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <table id="tablaEvaluadores" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Documento</th>
              <th>Nombre</th>
              <th class="text-center">Acción</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $evaluadores = ControladorAsignacion::ctrMostrarEvaluadores();
            foreach ($evaluadores as $e) {
              echo "<tr>";
              echo "<td>{$e['numero']}</td>";
              echo "<td>{$e['nombres']} {$e['apellidos']}</td>";
              echo "<td class='text-center'>
                      <button type='button' class='btn btn-warning btn-sm' onclick='return false;'>
                        <i class='fas fa-check'></i> Asignar
                      </button>
                    </td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


</div>


