<?php

ob_start();
?>


<div class="card shadow mt-1 mx-5 border-white" id="table">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover" style="font-family: Arial, Helvetica, sans-serif;">
                <thead class=" thead-light" style="background-color: #213555;
    color: #ffff;
    font-size: 14px;
   text-align: center;
    text-transform: uppercase;
    letter-spacing: 0.03em; ">
                    <tr>
                        <th>Codigo del movimiento</th>
                        <th>Codigo del Activo</th>
                        <th>Descripcion</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serial</th>
                        <th>Condicion</th>
                        <th>Motivo de Entrega</th>
                        <th>Responsable</th>
                    </tr>
                </thead>
                <tbody style="text-align: center; background-color: #F0F0F0">
                    <?php foreach ($movimientos as $movimiento) : ?>
                        <tr>
                            <th><?= $movimiento['id_movimientos'] ?></th>
                            <td><?= $movimiento['codigo'] ?></td>
                            <td><?= $movimiento['descripcion'] ?></td>
                            <td><?= $movimiento['nombre_marca'] ?></td>
                            <td><?= $movimiento['modelo'] ?></td>
                            <td><?= $movimiento['serial'] ?></td>
                            <td><?= $movimiento['condicionn'] ?></td>
                            <td><?= $movimiento['motivo'] ?></td>
                            <td><?= $movimiento['nombre'] . "  " . $movimiento['apellido'] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <?php

            $html = ob_get_clean();

            use Dompdf\Dompdf;

            $dompdf = new Dompdf();
            $options = $dompdf->getOptions();
            $options->set(array('isRemoteEnabled' => true));
            $dompdf->setOptions($options);

            $dompdf->loadHtml($html);
            $dompdf->setpaper('A4', 'landscape');
            $dompdf->render();
            $dompdf->stream("reporte.pdf", array("Attachment" => true));

            ?>
        </div>
    </div>
</div>