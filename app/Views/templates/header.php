<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA DE PATRIMONIO</title>

    <!-- /**
    * TODO: JS de las tablas by DataTables
    */
    -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="<?= base_url('libs/dist/sweetalert2.min.css') ?>">
    <!-- /**
    * TODO: JS by Bootstrap
    */
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!--
    <section class="container">
        <div class="sidebar">
            <div class="side-hide">
                <i class="fa fa-times" aria-hidden="true"></i>
            </div>

            <img src="logo.png" width="120" alt="Logo" />
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Galeria</a></li>
            </ul>
        </div>

        <button id="button">Mostrar Sidebar</button>
    </section>
-->
    <!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script>
        // Muestra SideBar
        $("button").on("click", function() {
            $(".container").toggleClass("show");
        });

        // Oculta SideBar
        $(".side-hide").on("click", function() {
            $(".container").toggleClass("show");
        });
    </script>
 -->

    <div class="list-group list-group-flush">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid ">
                <button class=" navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" id="sidebar-wrapper">
                    <div class="offcanvas-header" style="background-color:  rgb(21, 55, 87);">
                        <img id="img" src="logo_aguas.png" alt="">
                        <h5 id="imgAgua">Aguas de Mérida</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body" id="offcanva" style="background-color:  rgb(21, 55, 87);">
                        <hr>
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" style="color: #ffffff;" aria-current="page" href=" <?= url_to('index') ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z" />
                                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z" />
                                    </svg>
                                    <h6>Inicio</h6>
                                    <hr>
                                </a>
                            </li>
                            <li class="nav-item dropdown" style="color: #153757;">
                                <a id="mod" class="nav-link dropdown-toggle" style="color: #ffffff;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-buildings" viewBox="0 0 16 16">
                                        <path d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022ZM6 8.694 1 10.36V15h5V8.694ZM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15Z" />
                                        <path d="M2 11h1v1H2v-1Zm2 0h1v1H4v-1Zm-2 2h1v1H2v-1Zm2 0h1v1H4v-1Zm4-4h1v1H8V9Zm2 0h1v1h-1V9Zm-2 2h1v1H8v-1Zm2 0h1v1h-1v-1Zm2-2h1v1h-1V9Zm0 2h1v1h-1v-1ZM8 7h1v1H8V7Zm2 0h1v1h-1V7Zm2 0h1v1h-1V7ZM8 5h1v1H8V5Zm2 0h1v1h-1V5Zm2 0h1v1h-1V5Zm0-2h1v1h-1V3Z" />
                                    </svg>
                                    <h6>Modulo de Activos</h6>
                                    <hr>

                                </a>
                                <ul class="dropdown-menu" id="menu" style="background-color: #153757">
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('activos') ?>">Activos</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('condicionActivo') ?>">Condicion del Activo</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('marca') ?>">Marca</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('tipo') ?>">Tipos de Activo</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown" style="color: #153757;">
                                <a id="mod" class="nav-link dropdown-toggle" style="color: #ffffff;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                                    </svg>
                                    <h6>Modulo de Responsables</h6>
                                    <hr>
                                </a>

                                <ul class="dropdown-menu" style="background-color: #153757">
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('cargo') ?>">Cargo</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('condicion') ?>">Condicion</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('resp') ?>">Reponsables</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown" style="color: #153757;">
                                <a id="mod" class="nav-link dropdown-toggle" style="color: #ffffff;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shuffle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 3.5A.5.5 0 0 1 .5 3H1c2.202 0 3.827 1.24 4.874 2.418.49.552.865 1.102 1.126 1.532.26-.43.636-.98 1.126-1.532C9.173 4.24 10.798 3 13 3v1c-1.798 0-3.173 1.01-4.126 2.082A9.624 9.624 0 0 0 7.556 8a9.624 9.624 0 0 0 1.317 1.918C9.828 10.99 11.204 12 13 12v1c-2.202 0-3.827-1.24-4.874-2.418A10.595 10.595 0 0 1 7 9.05c-.26.43-.636.98-1.126 1.532C4.827 11.76 3.202 13 1 13H.5a.5.5 0 0 1 0-1H1c1.798 0 3.173-1.01 4.126-2.082A9.624 9.624 0 0 0 6.444 8a9.624 9.624 0 0 0-1.317-1.918C4.172 5.01 2.796 4 1 4H.5a.5.5 0 0 1-.5-.5z" />
                                        <path d="M13 5.466V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192zm0 9v-3.932a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192z" />
                                    </svg>
                                    <h6>Modulo de Movimientos</h6>
                                    <hr>
                                </a>
                                <ul class="dropdown-menu" style="background-color: #153757">
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('movimientos') ?>">Movimientos</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('ubicacion') ?>">Ubicaciones</a></li>
                                    <li><a class="dropdown-item" style="color: #ffffff;" href="<?= url_to('zona') ?>">Zonas</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    </div>
    <br>
    <br>
    <br>
    <br>

</body>