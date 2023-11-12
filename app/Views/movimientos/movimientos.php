<?= $header ?>
<?= $style ?>
<div class="card shadow mt-1 mx-5 border-white" id="table">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover">
                <thead class=" thead-light">
                    <tr>
                        <th>Codigo del movimiento</th>
                        <th>Codigo del Activo</th>
                        <th>Fecha</th>
                        <th>Observaciones</th>
                        <th>Motivo del movimiento</th>
                        <th>Responsable</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Movimiento
                    </button>
                    <div class="modal fade" id="exampleModal" data-bs-backdrop=" static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRAR MOVIMIENTO</h1>
                                </div>
                                <div class="modal-body">
                                    <form action="editaractivoo" method="post" enctype="multipart/form-data">
                                        <div class="col-12 col-md-8">
                                            <label for="nombre">Codigo</label>
                                            <input type="text" name="id" class="form-control">
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Buscar</button>
                                        </div>
                                    </form>
                                    <form method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <div class=" row">
                                                <div class="col-12 col-md-4">
                                                    <label for="nombre"></label>
                                                    <input type="text" name="id" class="form-control">
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="nombre"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="nombre"></label>
                                                        <input type="text" class="form-control" ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                        <div class="col-12 col-md-8">
                                                            <div class="form-group">
                                                                <label for="nombre"></label>
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-md-4">
                                                            <div class="form-group">
                                                                <label for="nombre"></label>
                                                                <input type="text" class="form-control" v>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-12 col-md-6">

                                                        <label for="nombre"></label>
                                                        <input type="text" class="form-control">
                                                    </div>

                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="idcondicion_x"></label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 col-md-6">
                                                        <label for="idcondicion_x"></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="form-group">
                                                            <label for="idcondicion_x"></label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                    </form>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($movimientos as $movimiento) : ?>
                        <tr>

                            <th><?= $movimiento['id_movimientos'] ?></th>
                            <td><?= $movimiento['codigo_act'] ?></td>
                            <td><?= $movimiento['fecha'] ?></td>
                            <td><?= $movimiento['observacion'] ?></td>
                            <td><?= $movimiento['nombret'] ?></td>
                            <td><?= $movimiento['nombre'] . " " . $movimiento['apellido'] ?></td>
                            <td>
                                <a href="<?= base_url('editarmov/' . $movimiento['id_movimientos']) ?>" class="btn btn-info" type="button" data-bs-target="#modalUpdate" style="background-color: rgb(100, 145, 74);"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square text-light' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                                    </svg></a>
                                <a href="<?= base_url('borrar/' . $movimiento['id_movimientos']) ?>" type="button" class="btn btn-danger">Borrar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <script>
                let table = new DataTable('#tabla', {
                    perPage: 5,
                    perPageSelect: [5, 7, 10, 15],

                });
            </script>
            <?= $footer ?>