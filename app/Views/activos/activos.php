<?= $header ?>
<?= $style ?>

<div class="card shadow mt-1 mx-5 border-white table-responsive" id="table" style="width:85%;  left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover">
                <thead class=" thead-light">
                    <tr>
                        <th>Codigo</th>
                        <th>Serial</th>
                        <th>Descripcion</th>
                        <th>Modelo</th>
                        <th>Proveedor</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Activo
                    </button>
                    <!-- /**
                    * TODO: Modal (form) de Registro de Activos
                    */
                    -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE ACTIVOS</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarActivo" method="post" enctype="multipart/form-data">
                                        <div class=" form-group">
                                            <label for="nombre">Codigo del Activo</label>
                                            <input type="text" class="form-control" placeholder="Codigo" name="codigo">
                                        </div>
                                        <div class="form-group">
                                            <label for="observaciones">Descripcion</label>
                                            <textarea name="descripcion" id="observaciones" cols="3" rows=3" class="form-control" placeholder="Descripcion "></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="nombre">Marca</label>
                                                    <select name="marca" class="form-control" required onChange="selectGerenciasRespCons()" required>
                                                        <option value="">Seleccione una opción...</option>
                                                        <?php

                                                        use App\Models\Marca;

                                                        $marca = new Marca();
                                                        $datos['marcas'] = $marca->findAll();
                                                        foreach ($datos['marcas'] as $dato) {

                                                            echo '<option value=' . $dato['id_marca'] .  '>' . $dato['nombre'] . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="form-group">
                                                    <label for="nombre">Modelo</label>
                                                    <input type="text" name="modelo" class="form-control" placeholder="Modelo">
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Serial</label>
                                                        <input type="text" name="seria" class="form-control" placeholder="Serial">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="nombre">Condicion del Activo</label>
                                                        <select name="condicion" class="form-control" required onChange="selectGerenciasRespCons()" required>
                                                            <option value="">Seleccione una opción...</option>

                                                            <?php

                                                            use App\Models\Condicion_act;

                                                            $condicion = new Condicion_act();
                                                            $datos['condicion_act'] = $condicion->findAll();
                                                            foreach ($datos['condicion_act'] as $dato) {

                                                                echo '<option value=' . $dato['id_activo_condicion'] .  '>' . $dato['nombre'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group">
                                                        <label for="nombre">Tipo de Activo</label>
                                                        <select name="tipo" class="form-control" required onChange="selectGerenciasRespCons()" required>
                                                            <option value="">Seleccione una opción...</option>
                                                            <?php

                                                            use App\Models\tipo;

                                                            $condicion = new tipo();
                                                            $datos['tipos'] = $condicion->findAll();
                                                            foreach ($datos['tipos'] as $dato) {

                                                                echo '<option value=' . $dato['id_tipo'] .  '>' . $dato['nombre'] . '</option>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="proveedor">Nro. de Factura </label>
                                                        <input type="text" name="factura" class="form-control" placeholder="Nro.Factura">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label>Proveedor</label>
                                                        <input type="text" name="proveedor" class="form-control" placeholder="Proveedor">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="proveedor">Costo</label>
                                                        <input type="text" name="costo" class="form-control" placeholder="Costo">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="orden">Número de Orden</label>
                                                        <input type="text" name="orden" class="form-control" placeholder="Número de Orden">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="periodo">Periodo de garantía desde</label>
                                                        <input type="date" name="inicio" id="periodo" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="periodo">Periodo de garantía hasta</label>
                                                        <input type="date" name="fin" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="observaciones">Observaciones</label>
                                                <textarea name="observacion" id="observaciones" cols="3" rows=3" class="form-control" placeholder="Observaciones  "></textarea>
                                            </div>
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
                    <?php foreach ($activos as $activo) : ?>
                        <tr>
                            <th><?= $activo['codigo'] ?></th>
                            <td><?= $activo['serial'] ?></td>
                            <td><?= $activo['descripcion'] ?></td>
                            <td><?= $activo['modelo'] ?></td>
                            <td><?= $activo['proveedor'] ?></td>
                            <?php
                            if ($activo['asignado'] == 0) {
                                echo "<td>Por asignar</td>";
                            } else {
                                echo "<td>Asignado</td>";
                            }
                            ?>
                            <td>
                                <a href="<?= base_url('editaractivo/' . $activo['codigo']) ?>" class="btn btn-info" style="background-color: rgb(100, 145, 74);" type="button"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square text-light' viewBox='0 0 16 16'>
                                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                                    </svg> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill='currentColor' class='bi bi-pencil-square text-light' viewBox="0 0 16 16">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg></a>
                                <a href="<?= base_url('deshabilitaract/' . $activo['codigo']) ?>" class="btn btn-danger" id="dele" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building-fill-dash" viewBox="0 0 16 16">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1Z" />
                                        <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v7.256A4.493 4.493 0 0 0 12.5 8a4.493 4.493 0 0 0-3.59 1.787A.498.498 0 0 0 9 9.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .39-.187A4.476 4.476 0 0 0 8.027 12H6.5a.5.5 0 0 0-.5.5V16H3a1 1 0 0 1-1-1V1Zm2 1.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3 0v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z" />
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

            <?= $footer ?>