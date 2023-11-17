<?php

ob_start();
?>


<div class="card shadow mt-1 mx-5 border-white" id="table">
    <div class="card-body">
        <div class="table-responsive">
            <table id="tabla" class="table table-hover" style="background-color: red;">
                <thead class=" thead-light">
                    <tr>
                        <th>Codigo del movimiento</th>
                        <th>Codigo del Activo</th>
                        <th>Fecha</th>
                        <th>Motivo del movimiento</th>
                        <th>Responsable</th>
                        <th>Opciones</th>

                    </tr>
                </thead>
                <tbody>
                    </form>

                    <?php foreach ($movimientos as $movimiento) : ?>
                        <tr>
                            <th><?= $movimiento['id_movimientos'] ?></th>
                            <td><?= $movimiento['codigo'] ?></td>
                            <td><?= $movimiento['fecha'] ?></td>
                            <td><?= $movimiento['motivo'] ?></td>
                            <td><?= $movimiento['nombre'] . "  " . $movimiento['apellido'] ?></td>


                        </tr>

                    <?php endforeach; ?>

                </tbody>
            </table>
            <?php

            $html = ob_get_clean();

            //require_once '../dompdf/autoload.inc.php';
            //require_once 'pdff';

            use Dompdf\Dompdf;

            $dompdf = new Dompdf();
            $options = $dompdf->getOptions();
            $options->set(array('isRemoteEnabled' => true));
            $dompdf->setOptions($options);

            $dompdf->loadHtml($html);
            $dompdf->setpaper('letter');
            //$dompdf- , 'Landscape ' ) ;
            $dompdf->render();
            $dompdf->stream("pepe.pdf", array("Attachment" => false));



            ?>
        </div>
    </div>
</div>