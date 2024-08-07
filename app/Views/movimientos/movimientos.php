<?php
echo view('templates/header')
?>
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
                        <th>Motivo del movimiento</th>
                        <th>Responsable</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Movimiento
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
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" class="btn-close" data-bs-dismiss="modal">Cerrar</button>
                                        <a type="button" class="btn btn-primary" data-bs-target="#modalUpdate2" data-bs-toggle="modal">Modificar Responsable</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($movimientos as $movimiento) : ?>
                        <tr>
                            <th><?= $movimiento['id_movimientos'] ?></th>
                            <td><?= $movimiento['codigo'] ?></td>
                            <td><?= $movimiento['fecha'] ?></td>
                            <td><?= $movimiento['observacion'] ?></td>
                            <td><?= $movimiento['nombret'] ?></td>
                            <td><?= $movimiento['nombre'] . " " . $movimiento['apellido'] ?></td>



                            <td>
                                <a href="<?= site_url('editarmov/' . $movimiento['id_movimientos']) ?>" class="btn btn-info" type="button" data-bs-target="#modalUpdate" style="background-color: rgb(100, 145, 74);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill='currentColor' class='bi bi-pencil-square text-light' viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </a>
                                <a href="<?= site_url('pdf/' . $movimiento['id_movimientos']) ?>" class="btn btn-danger" type="button" data-bs-target="#modalUpdate">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="currentColor" class="bi bi-file-earmark-pdf-fill" viewBox="0 0 16 16">
                                        <path d="M5.523 12.424c.14-.082.293-.162.459-.238a7.878 7.878 0 0 1-.45.606c-.28.337-.498.516-.635.572a.266.266 0 0 1-.035.012.282.282 0 0 1-.026-.044c-.056-.11-.054-.216.04-.36.106-.165.319-.354.647-.548zm2.455-1.647c-.119.025-.237.05-.356.078a21.148 21.148 0 0 0 .5-1.05 12.045 12.045 0 0 0 .51.858c-.217.032-.436.07-.654.114zm2.525.939a3.881 3.881 0 0 1-.435-.41c.228.005.434.022.612.054.317.057.466.147.518.209a.095.095 0 0 1 .026.064.436.436 0 0 1-.06.2.307.307 0 0 1-.094.124.107.107 0 0 1-.069.015c-.09-.003-.258-.066-.498-.256zM8.278 6.97c-.04.244-.108.524-.2.829a4.86 4.86 0 0 1-.089-.346c-.076-.353-.087-.63-.046-.822.038-.177.11-.248.196-.283a.517.517 0 0 1 .145-.04c.013.03.028.092.032.198.005.122-.007.277-.038.465z" />
                                        <path fill-rule="evenodd" d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm5.5 1.5v2a1 1 0 0 0 1 1h2l-3-3zM4.165 13.668c.09.18.23.343.438.419.207.075.412.04.58-.03.318-.13.635-.436.926-.786.333-.401.683-.927 1.021-1.51a11.651 11.651 0 0 1 1.997-.406c.3.383.61.713.91.95.28.22.603.403.934.417a.856.856 0 0 0 .51-.138c.155-.101.27-.247.354-.416.09-.181.145-.37.138-.563a.844.844 0 0 0-.2-.518c-.226-.27-.596-.4-.96-.465a5.76 5.76 0 0 0-1.335-.05 10.954 10.954 0 0 1-.98-1.686c.25-.66.437-1.284.52-1.794.036-.218.055-.426.048-.614a1.238 1.238 0 0 0-.127-.538.7.7 0 0 0-.477-.365c-.202-.043-.41 0-.601.077-.377.15-.576.47-.651.823-.073.34-.04.736.046 1.136.088.406.238.848.43 1.295a19.697 19.697 0 0 1-1.062 2.227 7.662 7.662 0 0 0-1.482.645c-.37.22-.699.48-.897.787-.21.326-.275.714-.08 1.103z" />
                                    </svg>
                                </a>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </tbody>
                <script>
                    let table = new DataTable('#tabla', {
                        perPage: 4,
                        perPageSelect: [5, 7, 10, 15],

                    });
                </script>

                <?= $footer ?>