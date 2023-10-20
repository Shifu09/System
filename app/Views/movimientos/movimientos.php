<?= $header ?>
<?= $style ?>
<div class="card shadow" style=" width:85%; left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla">
                <thead>
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
                        Registrar movimiento
                    </button>
                    <!-- /**
                    * TODO: Modal (form) de Registro de movimiento
                    */
                    -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE MOVIMIENTOS</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarResp" method="post" enctype="multipart/form-data">
                                        <div class=" row">
                                            <div class="col-12 col-md-4">
                                                <div class=" form-group">
                                                    <label for="nombre">Codigo del activo</label>
                                                    <select name="codigo" class="form-control" required>
                                                        <option value="">Seleccione una opción...</option>
                                                        <?php


                                                        use App\Models\Activos;

                                                        $condicion = new Activos();
                                                        $datos['activos'] =  $condicion->orderBy('codigo')->findAll();
                                                        foreach ($datos['activos'] as $dato) {

                                                            echo '<option value=' . $dato['codigo'] .  '>' . $dato['codigo'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class=" form-group">
                                                    <label for="nombre">Nombre</label>
                                                    <select name="cedula" class="form-control" required>
                                                        <option value="">Seleccione una opción...</option>
                                                        <?php

                                                        use App\Models\Responsables;


                                                        $condicion = new Responsables();
                                                        $datos['responsables'] =  $condicion->orderBy('cedula')->findAll();
                                                        foreach ($datos['responsables'] as $dato) {

                                                            echo '<option value=' . $dato['cedula'] .  '>' . $dato['nombre'] . " " . $dato['apellido'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="descripcion">Motivo</label>
                                                    <select name="motivo" class="form-control" required>
                                                        <option value="">Seleccione una opción...</option>
                                                        <?php

                                                        use App\Models\Motivo;


                                                        $condicion = new Motivo();
                                                        $datos['motivos'] =  $condicion->orderBy('id_motivo')->findAll();
                                                        foreach ($datos['motivos'] as $dato) {

                                                            echo '<option value=' . $dato['id_motivo'] .  '>' . $dato['nombre'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="descripcion">Zona</label>
                                                <select name="zona" class="form-control" required>
                                                    <option value="">Seleccione una opción...</option>
                                                    <?php

                                                    use App\Models\Zona;

                                                    $condicion = new Zona();
                                                    $datos['zonas'] =  $condicion->orderBy('id_zona')->findAll();
                                                    foreach ($datos['zonas'] as $dato) {

                                                        echo '<option value=' . $dato['id_zona'] .  '>' . $dato['nombre'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-4">
                                        <div class="form-group">
                                            <label for="descripcion">Ubicacion</label>
                                            <select name="ubicacion" class="form-control" required>
                                                <option value="">Seleccione una opción...</option>
                                                <?php

                                                use App\Models\ubicacion;

                                                $condicion = new ubicacion();
                                                $datos['ubicaciones'] =  $condicion->orderBy('id_ubicacion')->findAll();
                                                foreach ($datos['ubicaciones'] as $dato) {

                                                    echo '<option value=' . $dato['id_ubicacion'] .  '>' . $dato['sede'] . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="form-group">
                                            <label for="periodo">Fecha del Movimiento</label>
                                            <input type="date" name="fecha" id="periodo" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-16">
                                        <label for="periodo">Observaciones</label>
                                        <textarea name="observaciones" id="observaciones" cols="3" rows=3" class="form-control" placeholder="Observaciones  "></textarea>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php foreach ($movimientos as $movimiento) : ?>
                        <tr>

                            <td><?= $movimiento['id_movimientos'] ?></td>
                            <td><?= $movimiento['codigo_act'] ?></td>
                            <td><?= $movimiento['fecha'] ?></td>
                            <td><?= $movimiento['observacion'] ?></td>
                            <td><?= $movimiento['nombret'] ?></td>
                            <td><?= $movimiento['nombre'] . " " . $movimiento['apellido'] ?></td>

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
                                        <a href="<?= base_url('borrar/' . $movimiento['id_movimientos']) ?>" type="button" class="btn btn-danger">Borrar</a>
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