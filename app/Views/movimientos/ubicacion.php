<?= $header ?>
<?= $style ?>
<div class="card shadow" style=" width:85%; left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre de la zona</th>
                        <th>Direccion</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Ubicacion
                    </button>
                    <!-- /**
                    * TODO: Modal (form) de Registro de Cargo
                    */
                    -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE UBICACION</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarUbicacion" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="nombre">Direccion</label>
                                            <input type="text" id="nombre" class="form-control" placeholder="Direccion" name="direccion">
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

                    <?php foreach ($ubicaciones as $ubicacion) : ?>
                        <tr>
                            <td><?= $ubicacion['id_ubicacion'] ?></td>
                            <td><?= $ubicacion['sede'] ?></td>
                            <td><?= $ubicacion['direccion'] ?></td>
                            <td>
                                <a href="<?= base_url('borrar/' . $ubicacion['id_ubicacion']) ?>" class="btn btn-danger" type="button">Borrar</a>
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