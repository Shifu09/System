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
                    <div class="modal fade" id="exampleModal" data-bs-backdrop=" static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRAR MOVIMIENTO</h1>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="guardarmov" enctype="multipart/form-data">
                                        <div class=" row">
                                            <div class="col-12 col-md-5 ">
                                                <label>Nombre y cedula del responsable</label>
                                                <select name="resp" class="form-control" onChange="selectGerenciasRespCons()">
                                                    <option>Seleccione una opción...</option>
                                                    <?php

                                                    use App\Models\Responsables;


                                                    $resp = new Responsables();
                                                    $datos['resp'] =  $resp->where('estado', 1)->findAll();
                                                    foreach ($datos['resp'] as $dato) {

                                                        echo '<option value=' . $dato['cedula'] .  '>' . $dato['cedula'] . " - " . $dato['nombre'] . "  " .  $dato['apellido'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label>Zona</label>
                                                    <select name="zona" class="form-control" required>
                                                        <option value="">Seleccione una opción...</option>
                                                        <?php


                                                        use App\Models\Zona;

                                                        $zona = new zona();
                                                        $datos['zona'] =  $zona->orderBy('id_zona')->findAll();
                                                        foreach ($datos['zona'] as $dato) {

                                                            echo '<option value=' . $dato['id_zona'] .  '>' . $dato['nombre'] . "  " .  $dato['direccion'] .  '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3">
                                                <div class="form-group">
                                                    <label>Ubicación</label>
                                                    <select name="ubicacion" class="form-control" required>
                                                        <option value="">Seleccione una opción...</option>
                                                        <?php


                                                        use App\Models\ubicacion;

                                                        $ubicacion = new ubicacion();
                                                        $datos['zona'] =  $ubicacion->orderBy('id_ubicacion')->findAll();
                                                        foreach ($datos['zona'] as $dato) {

                                                            echo '<option value=' . $dato['id_ubicacion'] .  '>' . $dato['sede'] .  '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class=" row">
                                                <div class="col-12 col-md-8">
                                                    <label>Codigo y decripción del activo</label>
                                                    <select name="codigo" class="form-control" onChange="selectGerenciasRespCons()">
                                                        <option>Seleccione una opción...</option>
                                                        <?php

                                                        use App\Models\Activos;


                                                        $resp = new Activos();
                                                        $datos['activos'] =  $resp->where('asignado', 0)->findAll();
                                                        foreach ($datos['activos'] as $dato) {

                                                            echo '<option value=' . $dato['codigo'] .  '>' . $dato['codigo'] . " | " .  $dato['descripcion'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Motivo de la entrega</label>
                                                        <select name="motivo" class="form-control" onChange="selectGerenciasRespCons()">

                                                            <option value=" Recepción de cargo del responsable">Recepción de cargo del responsable</option>
                                                            <option value="Adquisición del activo">Adquisión del activo</option>
                                                            <option value="Traslado desde otra dependencia">Traslado desde otra dependencia</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-3">
                                                    <div class="form-group">
                                                        <label>Fecha</label>
                                                        <input type="date" name="fecha" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>
                                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php foreach ($movimientos as $movimiento) : ?>
                        <tr>
                            <th><?= $movimiento['id_movimientos'] ?></th>
                            <td><?= $movimiento['codigo'] ?></td>
                            <td><?= $movimiento['fecha'] ?></td>
                            <td><?= $movimiento['motivo'] ?></td>
                            <td><?= $movimiento['nombre'] . "  " . $movimiento['apellido'] ?></td>
                            <td>
                                <a href="<?= site_url('editarmov/' . $movimiento['id_movimientos']) ?>" class="btn btn-info" type="button" data-bs-target="#modalUpdate" style="background-color: rgb(100, 145, 74);"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square text-light' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill='currentColor' class='bi bi-pencil-square text-light' viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></a>
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
            </script>
            <?= $footer ?>