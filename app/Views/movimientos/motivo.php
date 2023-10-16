<?= $header ?>
<?= $style ?>
<div class="card shadow mt-1 mx-5 border-white" style="width:85%;  left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover">
                <thead class=" thead-light">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Motivo
                    </button>
                    <!-- /**
                    * TODO: Modal (form) de Registro de Cargo
                    */
                    -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE MOTIVO</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarmotivo" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($motivos as $motivo) : ?>
                        <tr>

                            <td><?= $motivo['id_motivo'] ?></td>
                            <td><?= $motivo['nombre'] ?></td>
                            <td>
                                <a href="<?= base_url('editarcargo/' . $motivo['id_motivo']) ?>" class="btn btn-info" type="button" data-bs-target="#modalUpdate">Read/Editar</a>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Borrar</button>
                            </td>
                        </tr>
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5>AVISO</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Seguro que deseas borrar el registro seleccionado?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        <a href="<?= base_url('borrar/' . $motivo['id_motivo']) ?>" type="button" class="btn btn-danger">Borrar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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