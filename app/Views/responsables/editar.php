<?php
print_r($cargos);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <form action="cargoupdate" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="nombre">Codigo</label>
            <input type="text" id="nombre" class="form-control" value="<?= $cargos['id_cargo'] ?>">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" class="form-control" value="<?= $cargos['nombre_cargo'] ?>">
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


</body>

</html>