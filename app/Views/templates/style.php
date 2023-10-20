<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <style>
        body {
            background-color: rgb(5, 54, 133);
        }

        #menu:hover {
            background-color: rgb(100, 145, 74);
        }

        #but {

            background-color: rgb(100, 145, 74);
            color: #ffffff;

        }

        #modal-content {
            width: 150%;
            height: 130%;
            left: -25%;
            top: 100%;
        }

        h1 {
            color: #ffffff;
        }

        h6 {
            position: relative;
            top: -22px;
            left: 27px;
        }

        #tabla {
            width: 100%;
            border-collapse: collapse;
        }

        #tabla th,
        #tabla td {
            padding: 10px;
            text-align: left;
        }

        /* Estilo para la cabecera */
        #tabla thead {
            background-color: #3498db;
            color: #fff;
        }

        #tabla th {
            font-weight: bold;
        }

        /* Estilo para las filas impares */
        #tabla tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        /* Estilo para las filas pares */
        #tabla tbody tr:nth-child(even) {
            background-color: #fff;
        }

        /* Estilo para los botones */
        .btn {
            padding: 5px 10px;
            background-color: #d9534f;
            color: #fff;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #c9302c;
        }

        #img {
            position: relative;
            top: 12px;
            left: -3px;
            height: 35px;
            width: 35px
        }

        #imgAgua {
            position: relative;
            top: 15px;
            left: -5px;
            color: #ffffff;
        }

        #offcanvasNavbar {
            width: 20%;

        }
    </style>
</body>

</html>