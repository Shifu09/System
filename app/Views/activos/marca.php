<?= $header ?>
<?= $style ?>
<div class="card shadow mt-1 mx-5 border-white" id="table">
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
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Marca
                    </button>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE MARCAS</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarMarca" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nombre">Nombre de la marca</label>
                                            <input type="text" class="form-control" placeholder="Nombre" name="nombre">
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

        </div>
        <?php foreach ($marcas as $marca) : ?>
            <tr>
                <td><?= $marca['id_marca'] ?></td>
                <td><?= $marca['nombre'] ?></td>
                <td>
                    <a href="<?= base_url('editarmarca/' . $marca['id_marca']) ?>" class="btn btn-info" style="background-color: rgb(100, 145, 74);" type="button"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square text-light' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                        </svg></a>
                    <a href="<?= base_url('borrar/' . $marca['id_marca']) ?>" class="btn btn-danger" type="button">Borrar</a>
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