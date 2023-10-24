<?= $header ?>
<?= $style ?>

<body onload="$('#modalUpdate2').modal('show');">

    <div class="modal fade" id="modalUpdate2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR ACTIVO</h1>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('actualizaractivo'); ?>" method="post" enctype="multipart/form-data">
                        <div class=" form-group">
                            <label for="nombre">Codigo</label>
                            <input type="text" class="form-control" placeholder="Codigo" name="id" value="<?= $activo['codigo'] ?>">
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
                                    <input type="text" name="modelo" class="form-control" placeholder="Modelo" value="<?= $activo['modelo'] ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label>Serial</label>
                                        <input type="text" name="seria" class="form-control" placeholder="Serial" value="<?= $activo['serial'] ?>">
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
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="proveedor">Proveedor</label>
                                        <input type="text" name="proveedor" class="form-control" placeholder="Proveedor" value="<?= $activo['proveedor'] ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="proveedor">Nro. de Factura </label>
                                        <input type="text" name="factura" class="form-control" placeholder="Nro.Factura" value="<?= $activo['n_factura'] ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="proveedor">Costo</label>
                                        <input type="text" name="costo" class="form-control" placeholder="Costo" value="<?= $activo['costo'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="orden">Número de Orden</label>
                                        <input type="text" name="orden" class="form-control" placeholder="Número de Orden" value="<?= $activo['n_orden'] ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="periodo">Periodo de garantía desde</label>
                                        <input type="date" name="inicio" id="periodo" class="form-control" value="<?= $activo['garantia_inicio'] ?>">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4">
                                    <div class="form-group">
                                        <label for="periodo">Periodo de garantía hasta</label>
                                        <input type="date" name="fin" class="form-control" value="<?= $activo['garantia_fin'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea name="descripcion" id="descripcion" cols="3" rows="3" class="form-control"></textarea  value="<?= $activo['descripcion'] ?>">
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <a type="button" class="btn btn-secondary" href="<?= base_url('activo'); ?>">Cerrar</a>
                <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>
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