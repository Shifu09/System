<?= $header ?>
<?= $style ?>
<div class="card shadow mt-1 mx-5 border-white" style="width:85%;  left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover" class="table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn" id="but" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Condicion
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE CONDICION</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action=" guardarcon" method="post" enctype="multipart/form-data" ">
                                        <div class=" form-group">
                                        <label>Nombre</label>
                                        <input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre">
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
        <?php foreach ($condicion as $con) : ?>
            <tr>
                <th><?= $con['id_condicion'] ?></th>
                <td><?= $con['nombre_condicion'] ?></td>
                <td>
                    <a href="<?= site_url('editarcondicionn/' . $con['id_condicion']) ?>" class="btn btn-info" type="button" data-bs-target="#modalUpdate" style="background-color: rgb(100, 145, 74);"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square text-light' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                        </svg></a>
                    <a href="<?= site_url('borrarcon/' . $con['id_condicion']) ?>" class="btn btn-danger" type="button">Borrar</a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <script>
            var tabla = document.querySelector('#tabla');
            var datable = new DataTable(tabla, {
                perPage: 5,
                perPageSelect: [5, 7, 10, 15]
            });
        </script>
        <script>
            $('td #dele').click(function(ev) {
                ev.preventDefault();
                var id = $(this).data('id');
                var self = this;

                Swal.fire({
                    title: '¿Seguro que quieres eliminar el registro?',
                    text: 'El registro quedará eliminado',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Eliminar',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'POST',
                            url: 'borrarcon/' + id,
                            data: {
                                'id_condicion': id
                            },
                            success: function(response) {
                                $(self).closest('tr').remove();
                                Swal.fire('Eliminado', '', 'success').then((result) => {
                                    if (result.isConfirmed || result.isDismissed) {
                                        // Aquí puedes agregar redireccionamiento o cualquier otra acción necesaria
                                    }
                                });
                            },
                            error: function() {
                                Swal.fire('Error al eliminar el registro', '', 'error');
                            }
                        });
                    }
                });
            });
        </script>
        <?= $footer ?>