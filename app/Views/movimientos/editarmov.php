<?= $header ?>
<?= $style ?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">CONSULTA DE MOVIMIENTO</h1>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                    <div class=" row">
                        <div class=" form-group">
                            <label for="nombre">Codigo del Activo</label>
                            <input type="text" class="form-control" readonly placeholder="Codigo" name="codigo" value="<?= $x->codigo ?>">
                        </div>
                        <div class="form-group">
                            <label for="observaciones">Descripción del Activo</label>
                            <input type="text" class="form-control" readonly placeholder="Codigo" name="codigo" value="<?= $x->descripcion ?>">
                            <br>
                        </div>
                        <div class="modal-header" style="background-color: #153757; width: 100%;">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">DATOS DEL RESPONSABLE</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="form-group">
                                <label for="nombre">Nombre y Apellido</label>
                                <input type="text" readonly class="form-control" value="<?= $x->nombre . "  " . $x->apellido  ?>">
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-group">
                                <label for="nombre">Cedula</label>
                                <input type="text" readonly class="form-control" value="<?= $x->cedula ?>">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="nombre">Cargo</label>
                            <input type="text" readonly class="form-control" value="<?= $x->nombre_cargo ?>">
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="nombre">Gerencia</label>
                            <input type="text" readonly class="form-control" value="<?= $x->nombre_gerencia ?>">
                        </div>
                    </div>
            </div>
            </form>

            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="<?= site_url('movimientos'); ?>">Cerrar</a>
                <a type="button" class="btn btn-primary" data-bs-target="#modalUpdate2" data-bs-toggle="modal">Modificar Responsable</a>
            </div>
        </div>
    </div>
</div>
</div>


<div class="modal fade" id="modalUpdate2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR MOVIMIENTO</h1>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= site_url('actualizarmov'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class=" row">
                            <div class="col-12 col-md-4">
                                <label for="nombre">Codigo</label>
                                <input type="text" name="id" readonly class="form-control" value="<?= $x->codigo ?>">
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Descripción</label>
                                    <input type="text" name="nombre" class="form-control" value="<?= $x->descripcion ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" name="apellido" class="form-control">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" name="apellido" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Telefono</label>
                                    <input type="text" name="telefono" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="nombre">Condicion</label>
                            <select name="condicion" class="form-control">
                                <option value="">Seleccione una opción...</option>
                                <?php


                                use App\Models\condicion;

                                $condicion = new condicion();
                                $datos['condicion'] =  $condicion->orderBy('id_condicion')->findAll();
                                foreach ($datos['condicion'] as $dato) {

                                    echo '<option value=' . $dato['id_condicion'] .  '>' . $dato['nombre_condicion'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="idcondicion_x">Cargo</label>
                                <select name="cargo" class="form-control">
                                    <option value="">Seleccione una opción...</option>
                                    <?php

                                    use App\Models\Cargo;

                                    $cargo = new Cargo();
                                    $datos['cargos'] = $cargo->findAll();
                                    foreach ($datos['cargos'] as $dato) {

                                        echo '<option value=' . $dato['id_cargo'] .  '>' . $dato['nombre_cargo'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="idcondicion_x">Gerencia</label>
                            <select name="gerencia" class="form-control" onChange="selectGerenciasxCons()">
                                <option value="">Seleccione una opción...</option>
                                <?php

                                use App\Models\gerencia;

                                $gerencia = new gerencia();
                                $datos['gerencia'] = $gerencia->findAll();
                                foreach ($datos['gerencia'] as $dato) {

                                    echo '<option value=' . $dato['id'] .  '>' . $dato['nombre'] . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="idcondicion_x">Division</label>
                                <select name="division" class="form-control" onChange="selectGerenciasxCons()">
                                    <option value="">Seleccione una opción...</option>
                                    <?php

                                    use App\Models\Division;

                                    $gerencia = new Division();
                                    $datos['division'] = $gerencia->findAll();
                                    foreach ($datos['division'] as $dato) {

                                        echo '<option value=' . $dato['id_div'] .  '>' . $dato['nombre_div'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal">Volver a la consulta</a>
                            <a type="button" class="btn btn-secondary" href="<?= site_url('resp'); ?>">Cerrar</a>
                            <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('#staticBackdrop').modal('show');
    });
</script>