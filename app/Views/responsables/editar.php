<?= $header ?>
<?= $style ?>

<body onload="$('#modalUpdate').modal('show');">
    <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-sm">
            <div class="modal-content" id="modal-content">
                <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">EDICION DE CARGO</h1>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('actualizar'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Codigo</label>
                            <input type="text" name="id" readonly class="form-control" value="<?= $cargos['id_cargo'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" value="<?= $cargos['nombre_cargo'] ?>">
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn btn-secondary" href="<?= base_url('cargo'); ?>">Cerrar</a>
                            <button type="submit" style="background-color: #66944c; color:#ffff" class="btn">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#modalUpdate').modal('show');
        });
    </script>