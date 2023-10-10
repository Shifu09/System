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
                        Registrar Cargo
                    </button>
                    <!-- /**
                    * TODO: Modal (form) de Registro de Cargo
                    */
                    -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE CARGO</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardar" method="post" enctype="multipart/form-data">
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
                    <!-- /**
                    * TODO: Modal (form) Edicion de Cargo
                    */
                    -->
                    <div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDICION DE CARGO</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarcargo" method="post" enctype="multipart/form-data">
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
                    <?php foreach ($cargos as $cargo) : ?>
                        <tr>
                            <td><?= $cargo['id_cargo'] ?></td>
                            <td><?= $cargo['nombre_cargo'] ?></td>
                            <td>
                                <a href="<?= base_url('editarcargo/' . $cargo['id_cargo']) ?>" class="btn btn-info" type="button">Editar</a>
                                <a href="<?= base_url('borrar/' . $cargo['id_cargo']) ?>" class="btn btn-danger" type="button">Borrar</a>
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
            <script>
                let mensaje = '<php echo $mensaje ?>';
                if (mensaje == '1') {
                    alert("SIUUU");
                } else if (mensaje == '0') {
                    alert("nooo");
                }
            </script>
            <?= $footer ?>