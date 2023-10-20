<?= $header ?>
<?= $style ?>
<div class="card shadow" style=" width:85%; left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Nuevo Tipo de Activo
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO TIPO DE ACTIVO</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarTipo" method="post" enctype="multipart/form-data">
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
                    <?php foreach ($tipos as $tipo) : ?>
                        <tr>
                            <td><?= $tipo['id_tipo'] ?></td>
                            <td><?= $tipo['nombre'] ?></td>
                            <td>

                                <a href="<?= base_url('borrar/' . $tipo['id_tipo']) ?>" class="btn btn-danger" type="button">Borrar</a>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <script>
                var tabla = document.querySelector('#tabla');
                var datable = new DataTable(tabla, {
                    perPage: 5,
                    perPageSelect: [5, 7, 10, 15]
                });
            </script>
            <?= $footer ?>