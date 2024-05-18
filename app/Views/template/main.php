<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPN 212 Cursos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/dash.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/buttons.css') ?>">


    <style {csp-style-nonce}>
        body {
            background-color: rgb(0, 92, 171);
        }

        .button-container {
            display: flex;
            justify-content: center;
        }
    </style>


</head>



<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <!-- Content For Sidebar -->

            <div class="pb-2 mb-2 border-bottom border-white">
                <center><img src="https://upn113leon.edu.mx/wp-content/uploads/2022/08/UPN-png.png" alt="Logo_Upn_Oficial" width="110px" height="100px"></center>

            </div>
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="<?= base_url('admin/cursos') ?>">
                        <?= session()->get('nombre') . " " . session()->get('apaterno') ?>
                    </a><br>
                    <a href="<?= base_url('admin/cursos') ?>" style="font-size:10px">
                        Matrícula: <?= session()->get('identificador') ?>
                    </a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Principal
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('admin/cursos') ?>" class="sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                                <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                            </svg>
                            Inicio
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?= base_url('admin/perfil') ?>" class="sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            Perfil
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('admin/reportes/alumnos') ?>" class="sidebar-link">
                            <svg width="16" height="16" viewBox="0 0 512 512" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>report-linechart</title>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="add" fill="white" transform="translate(42.666667, 85.333333)">
                                        <path d="M341.333333,1.42108547e-14 L426.666667,85.3333333 L426.666667,341.333333 L3.55271368e-14,341.333333 L3.55271368e-14,1.42108547e-14 L341.333333,1.42108547e-14 Z M330.666667,42.6666667 L42.6666667,42.6666667 L42.6666667,298.666667 L384,298.666667 L384,96 L330.666667,42.6666667 Z M106.666667,85.3333333 L106.666333,217.591333 L167.724208,141.269742 L232.938667,173.866667 L280.864376,130.738196 L295.135624,146.595138 L236.398693,199.458376 L173.589333,168.064 L120.324333,234.666333 L341.333333,234.666667 L341.333333,256 L85.3333333,256 L85.3333333,85.3333333 L106.666667,85.3333333 Z" id="Combined-Shape">

                                        </path>
                                    </g>
                                </g>
                            </svg>
                            Reportes
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('admin/usuarios/alumnos') ?>" class="sidebar-link">
                            <svg width="16" height="16" viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: white;
                                            stroke-miterlimit: 10;
                                            stroke-width: 1.91px;
                                        }
                                    </style>
                                </defs>
                                <circle class="cls-1" cx="9.61" cy="7.73" r="4.3" />
                                <path class="cls-1" d="M1.5,21.57l.69-3.46A7.58,7.58,0,0,1,9.61,12h0A7.56,7.56,0,0,1,17,18.11l.7,3.46" />
                                <path class="cls-1" d="M12,11.3a4.3,4.3,0,1,0,0-7.14" />
                                <path class="cls-1" d="M22.5,21.57l-.7-3.47A7.55,7.55,0,0,0,12,12.41" />
                            </svg>
                            Usuarios
                        </a>
                    </li><br><br><br>

                </ul>

                <center>
                    <div class="h100" style="position:fixed; margin-bottom:100px">
                        <li class="nav-item">
                            <a href="<?= base_url('logout'); ?>" class="nav-link" style="color: white;">
                                <img src="https://cdn-icons-png.flaticon.com/128/4103/4103030.png" height="50" width="50">
                                <span style="color: white;">Cerrar sesión</span>
                            </a>
                        </li>
                    </div>
                </center>


            </div>

        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse navbar">

                    <ul class="navbar-nav ml-auto">




                    </ul>
                </div>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">

                    </div>


                    <div>
                        <?= $this->renderSection('content') ?>
                    </div>


                </div>
            </main>
            <a href="#" class="theme-toggle" style="position:absolute;border-bottom:10px;">
                <i class="fa-regular fa-moon"></i>
            </a>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url('assets/js/dash.js') ?>"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!-- <script src="<?php echo base_url('assets/adminlte/js/jquery.min.js'); ?>"></script> -->
    <script src="<?php echo base_url('assets/adminlte/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminlte/js/dashboard2.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminlte/js/adminlte.js'); ?>"></script>
    <script src="<?php echo base_url('assets/adminlte/js/overlay.js'); ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>