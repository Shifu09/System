<?= $header ?>
<?= $style ?>

<body onload="$('#modalUpdate2').modal('show');">

    <div class="modal fade" id="modalUpdate2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" data-bs-target="#exampleModal" style="background-color: #153757;">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">MODIFICAR UBICACION</h1>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('actualizarubi'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nombre">Codigo</label>
                            <input type="text" name="id" readonly class="form-control" value="<?= $ubicacion['id_ubicacion'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="sede" class="form-control" value="<?= $ubicacion['sede'] ?>" required spellcheck="false">
                        </div>
                        <div class="form-group">
                            <label for="nombre">Direccion</label>
                            <input type="text" name="direccion" class="form-control" value="<?= $ubicacion['direccion'] ?>" required spellcheck="false">
                        </div>
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-secondary" href="<?= base_url('ubicacion'); ?>">Cerrar</a>
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