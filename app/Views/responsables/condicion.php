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
                        Registrar Condicion
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE CONDICION</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action=" guardarcon" method="post" enctype="multipart/form-data" ">
                                        <div class=" form-group">
                                        <label>Nombre</label>
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
        <?php foreach ($condicion as $con) : ?>
            <tr>
                <td><?= $con['id_condicion'] ?></td>
                <td><?= $con['nombre_condicion'] ?></td>
                <td>
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
                            <a href="<?= base_url('borrarcon/' . $con['id_condicion']) ?>" type="button" class="btn btn-danger">Borrar</a>
                        </div>
                    </div>
                </div>
            </div>
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