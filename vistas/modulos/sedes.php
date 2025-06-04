<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Sedes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Sedes</li>
                    </ol>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm float-right"data-toggle="modal" data-target="#modalAgregarSede"> Agregar Sede</button>
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
                                    <th>nombre</th>
                                    <th>Direccion</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Colegio Sagrado Corazon de jesus</td>
                                    <td>Centro Tuluá</td>
                                    <td><button class="btn btn-success btn-sm">Activo</button></td>
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarsede"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Bicentenario Plaza</td>
                                    <td>Cl 28 # 19 38 C</td>
                                    <td><button class="btn btn-success btn-sm">Activo</button></td>
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarsede"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>Colegio Saleciano</td>
                                    <td>Cl. 34 #Carrera 26</td>
                                    <td><button class="btn btn-success btn-sm">Activo</button></td>
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarsede"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>CLEM Tuluá</td>
                                    <td>Salida de Tuluá</td>
                                    <td><button class="btn btn-danger btn-sm">Inactivo</button></td>
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarsede"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                
                                <!-- 
                                <?php for ($i = 1; $i <= 50; $i++): ?>
                                    <tr>
                                        <td><?php echo "SENA-" . str_pad($i, 3, "0", STR_PAD_LEFT); ?></td>
                                        <td><?php echo "Sede " . $i; ?></td>
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
 modal agregar sede
 =============== -->

 <div class="modal fade" id="modalAgregarSede">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar sede de formación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form action="" method="POST">
             <div class="modal-body">
                <label for="descripcionSede">Descripción</label>
                <input type="text" class="form-control" name="descripcionsede" required>  
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
 modal editar sede
 =============== -->

 <div class="modal fade" id="modalEditarsede">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar sede de formación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form action="" method="POST">
             <div class="modal-body">
                <label for="descripcionsede">Descripción</label>
                <input type="text" class="form-control" name="descripcionsede" required>  
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