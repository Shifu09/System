<?= $header ?>
<?= $style ?>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">CONSULTA DE REPONSABLE</h1>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class=" row">
                            <div class="col-12 col-md-4">
                                <label for="nombre">Cedula</label>
                                <input type="text" name="id" readonly class="form-control" value="<?= $x->cedula ?>">
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" readonly class="form-control" value="<?= $x->nombre ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" readonly class="form-control" value="<?= $x->apellido ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="nombre">Correo Electronico</label>
                                    <input type="text" readonly class="form-control" value="<?= $x->correo ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Telefono</label>
                                    <input type="text" readonly class="form-control" value="<?= $x->telefono ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6">

                            <label for="nombre">Condicion</label>
                            <input type="text" readonly class="form-control" value="<?= $x->nombre_condicion ?>">
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="idcondicion_x">Cargo</label>
                                <input type="text" readonly class="form-control" value="<?= $x->nombre_cargo ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="idcondicion_x">Gerencia</label>
                            <input type="text" readonly class="form-control" value="<?= $x->nombre_gerencia ?>">
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="idcondicion_x">Division</label>
                                <input type="text" readonly class="form-control" value="<?= $x->nombre_div ?>">
                            </div>
                        </div>
                    </div>
                </form>

                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" href="<?= site_url('resp'); ?>">Cerrar</a>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR RESPONSABLE</h1>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= site_url('actualizaresp'); ?>" enctype="multipart/form-data" autocomplete="off">
                    <div class="form-group">
                        <div class=" row">
                            <div class="col-12 col-md-4">
                                <label for="nombre">Cedula</label>
                                <input type="text" name="id" readonly class="form-control" value="<?= $x->cedula ?>" required>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" name="nombre" class="form-control" value="<?= $x->nombre ?>" required spellcheck="false">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" name="apellido" class="form-control" value="<?= $x->apellido ?>" required spellcheck="false">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                    <label for="nombre">Correo Electronico</label>
                                    <input type="text" name="correo" class="form-control" value="<?= $x->correo ?>" required>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Telefono</label>
                                    <input type="text" name="telefono" class="form-control" value="<?= $x->telefono ?>" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <label for="nombre">Condicion</label>
                            <select name="condicion" class="form-control" required>
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
                                <select name="cargo" class="form-control" required>
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
                            <select name="gerencia" class="form-control" onChange="selectGerenciasxCons()" required>
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
                                <select name="division" class="form-control" onChange="selectGerenciasxCons()" required>
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