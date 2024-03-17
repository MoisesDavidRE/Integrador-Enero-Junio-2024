<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style {csp-style-nonce}>
        /* Estilos generales para centrar en pantalla */
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .login {
            min-height: 100vh;
        }

        .bg-image {
            background-color: rgb(0, 92, 171);
            background-size: cover;
            background-position: center;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .flex-container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>


</head>

<body>


    <div class="container-fluid ps-md-0">
        <div class="row g-0">

            <div class="flex-container d-none d-md-flex col-md-6 col-lg-8 bg-image">
                <!-- <img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Logo_Upn_Oficial.svg" alt="Logo_Upn_Oficial" width="200px" height="200px"> -->
                <img src="https://campus-virtual.upn212teziutlan.edu.mx/pluginfile.php/398/mod_label/intro/Fotodelauni.jpg"
                    alt="UPN #212" width='750px' height='550px'>
                    <img src="https://upn113leon.edu.mx/wp-content/uploads/2022/08/UPN-png.png" alt="Logo_Upn_Oficial" width="157px" height="139px" style="margin-left:-180px;margin-top:-380px">
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4" style="color:rgb(0,92,171)">Iniciar Sesión</h3>

                                <!-- Sign In Form -->
                                <form action="<?= base_url('login'); ?>" method="post">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" name="identificador" required>
                                        <label for="floatingInput">Número de control/Matrícula</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="floatingPassword"
                                            placeholder="Password" name="password" required>
                                        <label for="floatingPassword">Contraseña</label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-login fw-bold mb-2"
                                            type="submit" style="background-color: rgb(0, 92, 171); color: white; font-weight: bolder;">Iniciar Sesión</button>
                                    </div>
                                </form>

                                <div class="mt-3"style="display:flex; align-items:center; justify-content: center;">
                                    <a href="<?php echo base_url('registro'); ?>">Registrarse</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>