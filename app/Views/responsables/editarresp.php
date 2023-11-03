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




<script>
    $(document).ready(function() {
        $('#staticBackdrop').modal('show');
    });
</script>