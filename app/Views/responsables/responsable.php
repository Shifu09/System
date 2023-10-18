<?= $header ?>
<?= $style ?>
<div class="card shadow mt-1 mx-5 border-white" style="width:85%;  left: 5%;">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo Electronico</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Responsable
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" id="modal-content">
                                <div class="modal-header" style="background-color: #153757;">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">REGISTRO DE RESPONSABLES</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="guardarResp" method="post" enctype="multipart/form-data">
                                        <div class=" row">
                                            <div class="col-12 col-md-4">
                                                <div class=" form-group">
                                                    <label for="nombre">Cedula</label>
                                                    <input type="text" id="nombre" class="form-control" placeholder="Cedula" name="cedula">
                                                </div>
                                                <div class="col-12 col-md-4">
                                                    <div class=" form-group">
                                                        <label for="nombre">Nombre</label>
                                                        <input type="text" id="nombre" class="form-control" placeholder="Nombre" name="nombre">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="descripcion">Apellido</label>
                                                    <input type="text" name="apellido" id="descripcion" class="form-control" placeholder="Apellido">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-8">
                                                <div class="form-group">
                                                    <label for="descripcion">Correo Electronico</label>
                                                    <input type="text" name="correo" id="descripcion" class="form-control" placeholder="Correo">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="descripcion">Telefono</label>
                                                    <input type="text" name="telefono" id="descripcion" class="form-control" placeholder="Telefono">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="idcondicion_resp">Condición</label>
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
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="idcondicion_resp">Cargo</label>
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
                                                <div class="form-group">
                                                    <label for="idcondicion_resp">Gerencias</label>
                                                    <select name="gerencia" class="form-control" required onChange="selectGerenciasRespCons()" required>
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
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="form-group">
                                                    <label for="idcondicion_resp">Divisiones</label>
                                                    <select name="division" class="form-control" onChange="selectGerenciasRespCons()">
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
                                        </div>
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
        <?php foreach ($responsables as $responsable) : ?>
            <tr>
                <td><?= $responsable['cedula'] ?></td>
                <td><?= $responsable['nombre'] ?></td>
                <td><?= $responsable['apellido'] ?></td>
                <td><?= $responsable['correo'] ?></td>
                <td><?= $responsable['telefono'] ?></td>
                <td>
                    <a href="<?= base_url('editarresp/' . $responsable['cedula']) ?>" class="btn btn-info" type="button" data-bs-target="#modalUpdate" style="background-color: rgb(100, 145, 74);"><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square text-light' viewBox='0 0 16 16'>
                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                        </svg></a>
                    <a href="<?= base_url('borrarresp/' .  $responsable['cedula']) ?>" class="btn btn-danger" type="button">Borrar</a>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
        <script>
            let table = new DataTable('#tabla', {
                perPage: 5,
                perPageSelect: [5, 7, 10, 15],

            });
        </script>
        <?= $footer ?>