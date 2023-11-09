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
                        Registrar movimiento
                    </button>
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