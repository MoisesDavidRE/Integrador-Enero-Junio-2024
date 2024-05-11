<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style {csp-style-nonce}>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .login {
            min-height: 100vh;
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

            <div class="col-lg-4"></div>
            <div class="col-md-6 col-lg-4">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4" style="color:rgb(0,92,171)">Completar información de
                                    usuario</h3>
                                <!-- Register Form -->
                                <form action="<?= base_url('/user/guardarInfo') ?>" method="POST">
                                    <?= csrf_field() ?>
                                    <input type="hidden" value="<?= $basicUserInfo->id ?>" name="id_Usuario">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" class="form-control" id="identificador"
                                            name="identificador" value="<?= $basicUserInfo->identificador ?>" required>
                                        <label for="identificador">Identificador</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" class="form-control" id="nombre"
                                            name="nombre" required>
                                        <label for="nombre">Nombre</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" class="form-control"
                                            id="apellidoPaterno" name="apellidoPaterno" required>
                                        <label for="apellidoPaterno">Apellido Paterno</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" class="form-control"
                                            id="apellidoMaterno" name="apellidoMaterno" required>
                                        <label for="apellidoMaterno">Apellido Materno</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" class="form-control" id="telefono"
                                            name="telefono" required>
                                        <label for="telefono">Teléfono</label>
                                    </div>
                                    <div class="form-group">
                                        <label>Sede:</label>
                                        <select class="form-control mb-3" id="sede" name="sede" required>
                                            <option value="Teziutlán">Teziutlán</option>
                                            <option value="Hueyapan">Hueyapan</option>
                                            <option value="Teteles">Teteles</option>
                                            <option value="Tlatlauquitepec">Tlatlauquitepec</option>
                                        </select>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login fw-bold mb-2"
                                            type="submit">Guardar</button>
                                    </div>
                                </form>
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