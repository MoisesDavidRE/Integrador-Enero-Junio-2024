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
                                <!-- <img src="https://upn113leon.edu.mx/wp-content/uploads/2022/08/UPN-png.png" alt="Logo_Upn_Oficial" width="50px" height="50px" style="margin-left:-180px;margin-top:-380px"> -->
            </div>
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">
                        <?= session()->get('nombre') . " " . session()->get('apaterno') ?>
                    </a><br>
                    <a href="#" style="font-size:10px">
                        Matrícula: <?= session()->get('identificador') ?>
                    </a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('docente/cursos') ?>" class="sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-mortarboard" viewBox="0 0 16 16">
                                <path
                                    d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917zM8 8.46 1.758 5.965 8 3.052l6.242 2.913z" />
                                <path
                                    d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46z" />
                            </svg>
                            Inicio
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="<?= base_url('docente/perfil') ?>" class="sidebar-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            Perfil
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="<?= base_url('docente/misCursos') ?>" class="sidebar-link">
                        <i class='fas fa-chalkboard' style='font-size:16px'></i>
                            Mis cursos
                        </a>
                    </li>
                </ul>
            </div>

        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse navbar">

                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="dropdown" href="#">
                                <i class="fas fa-user"></i>
                                <?= session()->get('email') ?>
                            </a>
                        </li>
                        <div class="h100" style="position:fixed,margin-bottom:100px">
                            <li class="nav-item">
                                <a href="<?= base_url('logout'); ?>" class="nav-link">
                                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión
                                </a>
                            </li>

                        </div>
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
            <a href="#" class="theme-toggle" style="position:absolute,border-bottom:10px">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>
