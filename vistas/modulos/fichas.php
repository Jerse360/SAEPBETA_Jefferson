<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Fichas</h1>
                </div>
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">fichas</li>
                    </ol>
                </div>

                <div class="col-sm-12">
                    <button class="btn btn-primary btn-sm float-right"data-toggle="modal" data-target="#modalAgregarficha"> Agregar Ficha</button>
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
                                    <th>Programa</th>
                                    <th>Sede</th>
                                    <th>Codigo</th>
                                    <th>Modalidad</th>
                                    <th>Nivel Formacion</th>
                                    <th>Fecha Inicio</th>                                  
                                    <th>Fecha Fin</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>ADSO</td>
                                    <td>Bicentenario Plaza</td>
                                    <td>2823094</td>
                                    <td>Presencial</td>
                                    <td>Mañana</td>
                                    <td>01/05/2025</td>                                    
                                    <td>30/06/2026</td>
                                    <td><button class="btn btn-success btn-sm">Activo</button></td>
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarPrograma"><i class="fas fa-pencil-alt"></i></button></td>
                                </tr>
                                <tr>
                                    <td>SST</td>
                                    <td>Colegio sagrado corazon</td>
                                    <td>3140277</td>
                                    <td>Presencial</td>
                                    <td>Mañana</td>
                                    <td>01/05/2026</td>                                    
                                    <td>20/08/2027</td>
                                    <td><button class="btn btn-danger btn-sm">Inactivo</button></td>
                                    <td><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modalEditarFicha"><i class="fas fa-pencil-alt"></i></button></td>
                                <!-- 
                                <?php for ($i = 1; $i <= 50; $i++): ?>
                                    <tr>
                                        <td><?php echo "SENA-" . str_pad($i, 3, "0", STR_PAD_LEFT); ?></td>
                                        <td><?php echo "Ficha de Formación " . $i; ?></td>
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
 modal agregar Programa
 =============== -->

 <div class="modal fade" id="modalAgregarficha">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar Ficha de formación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form action="" method="POST">
             <div class="modal-body">
                <label for="descripcionFicha">Descripción</label>
                <input type="text" class="form-control" name="descripcionFicha" required>  
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
 modal editar Programa
 =============== -->

 <div class="modal fade" id="modalEditarFicha">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Agregar Ficha de formación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            <form action="" method="POST">
             <div class="modal-body">
                <label for="descripcionFicha">Descripción</label>
                <input type="text" class="form-control" name="descripcionFicha" required>  
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