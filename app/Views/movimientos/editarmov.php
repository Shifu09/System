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
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#staticBackdrop').modal('show');
    });
</script>