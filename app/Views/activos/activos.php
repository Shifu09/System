<?= $header ?>
<?= $style ?>

<div class="card shadow mt-1 mx-5 border-white" style="width:85%;  left: 5%;">
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                                <form action="guardarActivo" method="post" enctype="multipart/form-data">
                                    <div class=" form-group">
                                        <label for="nombre">Codigo</label>
                                        <input type="text" class="form-control" placeholder="Codigo" name="codigo">
                                    </div>
                                    <div class="form-group">
                                        <label for="descripcion">Descripción</label>
                                        <textarea name="descripcion" id="descripcion" cols="3" rows="3" class="form-control" placeholder="Descripción del activo"></textarea>
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
                                            <div class="col-12 col-lg-4">
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="proveedor">Proveedor</label>
                                                    <input type="text" name="proveedor" class="form-control" placeholder="Proveedor">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <div class="form-group">
                                                    <label for="proveedor">Nro. de Factura </label>
                                                    <input type="text" name="factura" class="form-control" placeholder="Nro.Factura">
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
                                            <textarea name="observaciones" id="observaciones" cols="3" rows=3" class="form-control" placeholder="Observaciones  "></textarea>
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
                <td><?= $activo['codigo'] ?></td>
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
                    <a href="<?= base_url('editarcargo/' . $activo['codigo']) ?>" class="btn btn-info" type="button">Editar</a>
                    <a href="<?= base_url('borrar/' . $activo['codigo']) ?>" class="btn btn-danger" type="button">Borrar</a>
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