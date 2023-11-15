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
                        <th> Fecha</th>
                        <th>Observaciones</th>
                        <th>Motivo del movimiento</th>
                        <th>Responsable</th>
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
                                                <label for="nombre">Responsable</label>
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
                                                    <label for="nombre">Zona</label>
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
                                                    <label for="nombre">Ubicación</label>
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
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="periodo">Fecha</label>
                                                        <input type="date" name="fecha" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-12 col-md-8">
                                                    <label for="nombre">Codigo del Activo</label>
                                                    <select name="codigo" class="form-control" onChange="selectGerenciasRespCons()">
                                                        <option class="search">Seleccione una opción...</option>
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
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="idcondicion_x"></label>
                                                        <select name="motivo" class="form-control" onChange="selectGerenciasRespCons()">

                                                            <option value=" Recepción de cargo del responsable">Recepción de cargo del responsable</option>
                                                            <option value="Adquisición del activo">Adquisión del activo</option>
                                                            <option value="Traslado desde otra dependencia">Traslado desde otra dependencia</option>
                                                        </select>
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
                            <td><?= $movimiento['codigo'] ?></td>

                            <td><?= $movimiento['fecha'] ?></td>

                            <td><?= $movimiento['motivo'] ?></td>
                            <td><?= $movimiento['nombre'] . " " . $movimiento['apellido'] ?></td>
                            <td>

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