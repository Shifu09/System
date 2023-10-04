<?= $header ?>
<?= $style ?>
<div class="card shadow mt-1 mx-5 border-white" style="width:85%;  left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                    <a href="<?= base_url('borrarcon/' . $con['id_condicion']) ?>" class="btn btn-danger" type="button">Borrar</a>
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