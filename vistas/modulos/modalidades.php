<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Modalidad</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Modalidad</li>
                    </ol>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm float-right"data-toggle="modal" data-target="#modalAgregarModalidad"> Agregar Modalidad</button>
                </div>


            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
    <tr>
        <th>Codigo</th>
        <th>Nombre</th>
        <th>Acciones</th>
    </tr>
</thead>
<tbody>
    <?php
    $modalidades = ControladorModalidades::ctrMostrarModalidades();
    if ($modalidades) {
        foreach ($modalidades as $modalidad) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($modalidad["ID_modalidad"]) . '</td>';
            echo '<td>' . htmlspecialchars($modalidad["modalidad"]) . '</td>';
            echo '<td>
                    <button class="btn btn-xs btn-primary btnEditarModalidad" 
                            idModalidad="' . $modalidad["ID_modalidad"] . '" 
                            data-toggle="modal" data-target="#modalEditarmodalidad">
                        <i class="fas fa-pencil-alt"></i>
                    </button>
                  </td>';
            echo '</tr>';
        }
    }
    ?>
</tbody>


                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

<!-- ========== MODAL AGREGAR MODALIDAD ========== -->

<div class="modal fade" id="modalAgregarModalidad">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar modalidad de formación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST">
  <div class="modal-body">
    <label for="nombreModalidad">Nombre</label>
    <input type="text" class="form-control" name="nombreModalidad" required>
  </div>
  <div class="modal-footer justify-content-between">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
  <?php
    $crearModalidad = new ControladorModalidades();
    $crearModalidad->ctrCrearModalidad();
  ?>
</form>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


    <!-- ========== MODAL EDITAR MODALIDAD ========== -->

<div class="modal fade" id="modalEditarmodalidad">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar modalidad de formación</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST">
                <div class="modal-body">
                    <input type="hidden" class="form-control" id="editIdModalidad" name="editIdModalidad" required>

                    <label for="editNombreModalidad">Nombre</label>
                    <input type="text" class="form-control" id="editNombreModalidad" name="editNombreModalidad" required>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

                <?php
                    $editar = new ControladorModalidades();
                    $editar->ctrEditarModalidad();
                ?>
            </form>
        </div>
    </div>
</div>
