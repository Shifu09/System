<?= $header ?>
<?= $style ?>

<div class="modal fade" id="modalUpdate2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                <h1 class="modal-title fs-5" id="exampleModalLabel">DESHABILITAR RESPONSABLE</h1>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= site_url('disableresp'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class=" row">
                            <div class="col-12 col-md-4">
                                <label for="nombre">Cedula</label>
                                <input type="text" name="id" readonly class="form-control" value="<?= $x->cedula ?>">
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" disabled class="form-control" value="<?= $x->nombre ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Apellido</label>
                                    <input type="text" disabled class="form-control" value="<?= $x->apellido ?>">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Motivo</label>
                                    <textarea name="motivo" cols="5" rows="5" class="form-control" placeholder="Motivo de la deshabilitacion" style="width: 315%;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
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
        $('#modalUpdate2').modal('show');
    });
</script>