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
            background-color: rgb(43, 39, 39);
        }

        .button-container {
            display: flex;
            justify-content: center;
        }

        .socials-container {
            width: fit-content;
            height: fit-content;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 25px;
            padding: 20px 40px;
        }

        .social {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid rgb(194, 194, 194);
        }

        .twitter:hover {
            background: linear-gradient(45deg, #66757f, #00acee, #36daff, #dbedff);
        }

        .facebook:hover {
            background: linear-gradient(45deg, #134ac0, #316ff6, #78a3ff);
        }

        .github:hover {
            background: linear-gradient(45deg, black, black, black);
        }

        .instagram:hover {
            background: #f09433;
            background: -moz-linear-gradient(45deg,
                    #f09433 0%,
                    #e6683c 25%,
                    #dc2743 50%,
                    #cc2366 75%,
                    #bc1888 100%);
            background: -webkit-linear-gradient(45deg,
                    #f09433 0%,
                    #e6683c 25%,
                    #dc2743 50%,
                    #cc2366 75%,
                    #bc1888 100%);
            background: linear-gradient(45deg,
                    #f09433 0%,
                    #e6683c 25%,
                    #dc2743 50%,
                    #cc2366 75%,
                    #bc1888 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
        }

        .social svg {
            fill: white;
            height: 20px;
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


            </div>

        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse navbar">

                    <ul class="navbar-nav ml-auto">


                        <div class="h100">
                            <li class="nav-item">
                                <a href="<?= base_url('logout'); ?>" class="nav-link" style="color: white;">
                                    <img src="https://cdn-icons-png.flaticon.com/128/4103/4103030.png" height="25" width="25">
                                    <span style="color: grey;">Cerrar sesión</span>
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
            <a href="#" class="theme-toggle" style="position:absolute;border-bottom:10px;">
                <i class="fa-regular fa-sun"></i>
            </a>
        </div>
    </div>

    <center>
    <div class="socials-container">
        <a href="#" class="social twitter">
            <svg height="1em" viewBox="0 0 512 512">
                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
            </svg>
        </a>

        <a href="https://www.facebook.com/upn212teziutlan" class="social facebook" target="_blank"><svg height="1em" viewBox="0 0 320 512">
                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
            </svg></a>

        <a href="https://github.com/MoisesDavidRE/Integrador-Enero-Junio-2024" class="social github" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" height="1em" class="github">
                <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path>
            </svg>
        </a>

        <a href="https://www.instagram.com/upn212teziutlan?igsh=eGdrenVlYmlvMWUx" class="social instagram" target="_blank" ><svg height="1em" viewBox="0 0 448 512">
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
            </svg></a>
    </div>
    <h6 style="color:grey">Developed by ITS Teziutlán</h6>
    </center>

    <script type="text/javascript" src="<?= base_url('assets/js/dash.js') ?>"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="<?php echo base_url('assets/adminlte/js/jquery.min.js'); ?>"></script>
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