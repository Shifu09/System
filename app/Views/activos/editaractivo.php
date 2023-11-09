<?= $header ?>
<?= $style ?>


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR ACTIVO</h1>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('actualizaractivo'); ?>" method="post" enctype="multipart/form-data">
                    <div class=" form-group">
                        <label for="nombre">Codigo</label>
                        <input type="text" class="form-control" readonly placeholder="Codigo" name="id" value="<?= $x->codigo ?>">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <textarea name="descripcion" id="descripcion" cols="3" rows="3" class="form-control"></textarea  value="<?= $x->descripcion ?>">
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="nombre">Marca</label>
                                <select name="marca" class="form-control" onChange="selectGerenciasRespCons()">
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
                                <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="<?= $x->modelo ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input type="text" name="seria" class="form-control" placeholder="Serial" value="<?= $x->serial ?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="nombre">Condicion del Activo</label>
                                    <select name="condicion" class="form-control" onChange="selectGerenciasRespCons()">
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
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="proveedor">Proveedor</label>
                                    <input type="text" name="proveedor" class="form-control" placeholder="Proveedor" value="<?= $x->proveedor ?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="proveedor">Nro. de Factura </label>
                                    <input type="text" name="factura" class="form-control" placeholder="Nro.Factura" value="<?= $x->n_factura ?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="proveedor">Costo</label>
                                    <input type="text" name="costo" class="form-control" placeholder="Costo" value="<?= $x->costo ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="orden">Número de Orden</label>
                                    <input type="text" name="orden" class="form-control" placeholder="Número de Orden" value="<?= $x->n_orden ?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="periodo">Periodo de garantía desde</label>
                                    <input type="date" name="inicio" id="periodo" class="form-control" value="<?= $x->garantia_inicio ?>">
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="periodo">Periodo de garantía hasta</label>
                                    <input type="date" name="fin" class="form-control" value="<?= $x->garantia_fin ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observaciones</label>
                            <textarea name="observacion" cols="3" rows="3" class="form-control"></textarea>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <a type="button" class="btn btn-primary" data-bs-target="#modalUpdate2" data-bs-toggle="modal">Volver a la consulta</a>
            <a type="button" class="btn btn-secondary" href="<?= site_url('activos'); ?>">Cerrar</a>
            <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>
            </form>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="modalUpdate2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">CONSULTA ACTIVO</h1>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data">
                    <div class=" form-group">
                        <label for="nombre">Codigo</label>
                        <input type="text" class="form-control" value="<?= $x->codigo ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input type="text" name="descripcion" class="form-control" value="<?= $x->descripcion ?>">
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="nombre">Marca</label>
                                <input type="text" class="form-control" value="<?= $x->nombre_marca ?>" readonly>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label for="nombre">Modelo</label>
                                <input type="text" class="form-control" value="<?= $x->modelo ?>" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Serial</label>
                                    <input type="text" class="form-control" value="<?= $x->serial ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="nombre">Condicion del Activo</label>
                                    <input type="text" class="form-control" value="<?= $x->nombre_condicion ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="nombre">Tipo de Activo</label>
                                    <input type="text" class="form-control" value="<?= $x->nombre_tipo ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="proveedor">Proveedor</label>
                                    <input type="text" class="form-control" value="<?= $x->proveedor ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="proveedor">Nro. de Factura </label>
                                    <input type="text" class="form-control" value="<?= $x->n_factura ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="proveedor">Costo</label>
                                    <input type="text" class="form-control" value="<?= $x->costo ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label>Número de Orden</label>
                                    <input type="text" class="form-control" placeholder="Número de Orden" value="<?= $x->n_orden ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="periodo">Periodo de garantía desde</label>
                                    <input type="date" n class="form-control" value="<?= $x->garantia_inicio ?>" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="form-group">
                                    <label for="periodo">Periodo de garantía hasta</label>
                                    <input type="date" class="form-control" value="<?= $x->garantia_fin ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" aria-disabled="">
                            <label for="descripcion">Observaciones</label>
                            <input value="<?= $x->observacion ?>" cols="5" rows="5" class="form-control" readonly>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="<?= site_url('activos'); ?>">Cerrar</a>
                <a type="button" class="btn btn-primary" data-bs-target="#staticBackdrop" data-bs-toggle="modal">Modificar Activo</a>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#modalUpdate2').modal('show');
    });
</script>