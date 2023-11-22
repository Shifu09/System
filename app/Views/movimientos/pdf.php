<?php

ob_start();
?>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px;
        }

        th {
            background-color: #ddd;
        }

        ul {
            list-style: disc;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center; border: 1px solid">HOJA DE CUSTODIA DE ACTIVOS FIJOS</h1>

    <p style="border: 1px solid;"><strong>DESCRIPCIÓN DEL ACTIVO FIJO: </strong><label style="font-size: 13px;"><?= $x->descripcion ?></label></p>

    <table>
        <tr>
            <td><strong>TIPO:</strong></td>
            <td colspan="3"><label style="font-size: 14px;"><?= $x->tipo ?></label></td>
            <td><strong>MARCA:</strong></td>
            <td colspan="3"><label style="font-size: 13px;"><?= $x->marca ?></label></td>
            <td colspan="2" rowspan="7">MODELO:
                <label style="font-size: 14px;"><?= $x->modelo ?>
            </td>
        </tr>
        <tr>
            <td><strong>AÑO:</strong></td>
            <td colspan="3"></td>
            <td><strong>SERIAL:</strong></td>
            <td colspan="3"><label style="font-size: 14px;"> <?= $x->serial ?></label></td>
        </tr>
        <tr>
            <td colspan="8"><strong>CÓDIGO DEL ACTIVO:</strong> <label style="font-size: 13px;"><?= $x->codigo ?></label></td>
        </tr>
        <tr>
            <td colspan="6"><strong>PROVEEDOR: </strong><label style="font-size: 13px;"><?= $x->proveedor ?></label></td>
            <td colspan="2"><strong>COSTO DE ADQUISICIÓN :</strong><label style="font-size: 13px;"><?= $x->costo ?></label></td>
        </tr>
        <tr>
            <td colspan="6">
                <p><strong>NÚMERO DE LA FACTURA: </strong><label style="font-size: 13px;"><?= $x->n_factura ?></label></p>
            </td>
            <td colspan="2"><strong>No ORDEN DE PAGO:</strong></td>
        </tr>
        <tr>
            <td rowspan="2"><strong>GARANTÍA DEL EQUIPO:</strong></td>
            <td rowspan="2">SI:</td>
            <td rowspan="2"></td>
            <td colspan="2" rowspan="2">NO</td>
            <td rowspan="2"></td>
            <td colspan="2" style="text-align: center;"><strong>PERÍODO DE LA GARANTÍA</strong></td>
        </tr>
        <tr>
            <td><strong>DESDE: </strong><label style="font-size: 14px;"><?= $x->garantia_inicio ?></label></td>
            <td><strong>HASTA: </strong><label style="font-size: 14px;"><?= $x->garantia_fin ?></td>
        </tr>

        <tr>
            <td colspan="10" style="text-align: center;"><strong>DATOS DEL CUSTODIO</strong></td>
        </tr>
        <tr>
            <td colspan="6"><strong>NOMBRES Y APELLIDOS: </strong><label style="font-size: 14px;"><?= $x->nombre . " " . $x->apellido ?></td>
            <td colspan="4"><strong>C.I: </strong><label style="font-size: 14px;"><?= $x->cedula ?></label></td>
        </tr>
        <tr>
            <td colspan="6"><strong>DEPENDENCIA: </strong><label style="font-size: 14px;"><?= $x->nombre_gerencia ?></label></td>
            <td colspan="4"><strong>CARGO: </strong><label style="font-size: 14px;"><?= $x->nombre_cargo ?></label></td>
        </tr>

        <tr>
            <td colspan="10"><strong style="font-size: 12px;">MOTIVO DE LA ENTREGA: </strong><label style="font-size: 14px;"><?= $x->motivo ?></label></td>

        </tr>


        <tr>
            <td colspan="10" rowspan="-2" style="text-align: center;"><strong>DEBERES DEL CUSTODIO DE ACTIVOS FIJOS</strong></td>
        </tr>

        <tr>
            <td colspan="10">
                <ul style="font-size: 12px;">
                    <li>Velar por el buen estado del activo y de todos sus componentes, en cuanto a su mantenimiento y conservación.</li>
                    <li>Darle uso adecuado y racional al activo de manera de prolongar su vida útil.</li>
                    <li>Informar a la unidad de activos fijos de la empresa cualquier traslado o préstamo del activo. En este último caso deberá llenar un recibo de préstamo y enviar copia del mismo a la unidad de activos fijos y a la unidad responsable del bien.</li>
                    <li>Conocer de los detalles de operación y funcionamiento del activo y aplicar adecuadamente las garantías de los mismos.</li>
                    <li>Conocer las implicaciones del Artículo 113, Numeral 3 de la Ley de la Contraloría General de la República.</li>
                    <li>Los Custodios que infrinjan estas normas estarán sujetos a las sanciones legales y pecuniarias del caso.</li>
                </ul>
            </td>
        </tr>

        <tr>
            <td colspan="5" style="text-align: center;"><strong>JEFE (P) DE LA DIVISIÓN DE BIENES PUBLICOS</strong></td>
            <td colspan="5" style="text-align: center;"><strong>CUSTODIO DEL ACTIVO</strong></td>
        </tr>
        <tr>
            <td colspan="5">(FIRMA)</td>
            <td colspan="5">(FIRMA)</td>
        </tr>
        <tr>
            <td colspan="5"><strong>NOMBRE:</strong></td>
            <td colspan="5"><strong>NOMBRE: </strong><label style="font-size: 14px;"><?= $x->nombre ?></td>
        </tr>
        <tr>
            <td colspan="5"><strong>C.I.:</strong></td>
            <td colspan="5"><strong>C.I.:</strong> <label style="font-size: 14px;"><?= $x->cedula ?></td>
        </tr>

    </table>

</body>

</html>
<?php
$html = ob_get_clean();

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->set(array('isRemoteEnabled' => true));

$dompdf->setOptions($options);
$dompdf->loadHtml($html);
$dompdf->setpaper('letter');
$dompdf->render();
$dompdf->stream("Hoja de custodio.pdf", array("Attachment" => false));

?>