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
                                    <th>Nombre</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>                                    
                                    <td>Vinculacion laboral</td>                                    
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarmodalidad"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>                                    
                                    <td>Pasantias</td>                                   
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarmodalidad"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>                                    
                                    <td>Proyecto Productivo</td>                                    
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarmodalidad"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>                                    
                                    <td>Monitorias</td>                                    
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarmodalidad"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>                            
                                    <td>Contrato aprendizaje</td>                                    
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarmodalidad"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                
                                <!-- 
                                <?php for ($i = 1; $i <= 50; $i++): ?>
                                    <tr>
                                        <td><?php echo "SENA-" . str_pad($i, 3, "0", STR_PAD_LEFT); ?></td>
                                        <td><?php echo "modalidad de Formación " . $i; ?></td>
                                        <td><?php echo ($i % 2 == 0) ? "Activo" : "Inactivo"; ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endfor; ?> -->

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

<!-- ==========
 modal agregar modalidad
 =============== -->

 <div class="modal fade" id="modalAgregarmodalidad">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar modalidad de formación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form action="" method="POST">
             <div class="modal-body">
                <label for="descripcionmodalidad">Descripción</label>
                <input type="text" class="form-control" name="descripcionmodalidad" required>  
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

    <!-- ==========
 modal editar modalidad
 =============== -->

 <div class="modal fade" id="modalEditarmodalidad">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar modalidad de formación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form action="" method="POST">
             <div class="modal-body">
                <label for="descripcionmodalidad">Descripción</label>
                <input type="text" class="form-control" name="descripcionmodalidad" required>  
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