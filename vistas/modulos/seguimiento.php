<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Seguimiento</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="seguimiento">Home</a></li>
                        <li class="breadcrumb-item active">Seguimiento</li>
                    </ol>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#modalAgregarPdf"> Subir PDF</button>
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
                                    <th>Nombre de Archivo</th>
                                    <th>Fecha y Hora</th>
                                    <th>Formato</th>
                                    <th>Observaciones</th>
                                    <th>Validación</th>
                                    <th>Acciones</th>
                                    
                                </tr>
                            </thead>
                            <tbody>

                               <?php

                                $valor = null;
                                $seguimiento = ControladorSeguimiento::ctrMostrarSeguimiento($valor);
                                
                                foreach ($seguimiento as $key => $value) {
                                    echo '<tr>';
                                    echo '<td>' . $value["ID_seguimiento"] . '</td>';
                                    
                                    echo '<td>' . $value["nombre_archivo"] . '</td>';
                                    echo '<td>' . $value["fecha"] . '</td>';
                                    echo '<td>' . $value["tipo_formato"] . '</td>';
                                    echo '<td>' . $value["observaciones"] . '</td>';

                                    echo '<td><button class="btn btn-sm btn-primary btnValidarSeguimiento" id_seguimiento="'. $value["ID_seguimiento"] . '"data-toggle="modal" data-target="#modalValidarSeguimiento">Validar</button></td>';
                                    
                                    echo  '<td><button class="btn btn-xs btn-primary" btnValidarSeguimiento" id_seguimiento="'. $value["ID_seguimiento"] . '"data-toggle="modal" data-target="#modalEditarSeguimineto"><i class="fas fa-pen"></i></button>
                                        <button class="btn btn-xs btn-danger" btnValidarSeguimiento" id_seguimiento="'. $value["ID_seguimiento"] . '"data-toggle="modal" data-target="#modalEliminarSeguimiento"><i class="fas fa-trash"></i></button>
                                        <button class="btn btn-xs btn-warning" btnValidarSeguimiento" id_seguimiento="'. $value["ID_seguimiento"] . '"data-toggle="modal" data-target="#modalVisualizarSeguimiento"><i class="fas fa-eye"></i></button>
                                        </td>';
                                    echo '</tr>';
                                }
                               

                                ?>



                            </tbody>
                        </table>
                    </div>



<!-- =====================================================================

MODAL AGREGAR 

====================================================================== -->

                    <div class="modal fade" id="modalAgregarPdf">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Subir PDF</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <label for="descripcionObservacion">Archivo</label>
                                        <input type="file" accept=".pdf" name="archivoPrograma" class="form-control" required>
                                    </div>
                                    <div class="modal-body">
                                        <label for="descripcionObservacion">Observacion</label>
                                        <input type="text" class="form-control" name="descripcionObservacion" required>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                    </div>
                                    <?php
                                        ControladorSeguimiento::ctrCrearSeguimiento();
                                    ?>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->


<!-- =====================================================================

MODAL EDITAR 

====================================================================== -->

                    <div class="modal fade" id="modalEditarPrograma">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Editar programa de formación</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="" method="POST">
                                    <div class="modal-body">
                                        <label for="descripcionprograma">Descripción</label>
                                        <input type="text" class="form-control" name="descripcionPrograma" required>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->


<!-- =====================================================================

MODAL Eliminar 

====================================================================== -->

                    <div class="modal fade" id="modalEliminarPrograma">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Eliminar el formato</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="" method="POST">
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="button" class="btn btn-primary">Aceptar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->

                </div>
            </div>
        </div>
    </section>

</div>