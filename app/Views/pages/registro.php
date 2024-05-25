<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <h3 class="login-heading mb-4" style="color:rgb(0,92,171)">Registrarse</h3>
                                
                                <!-- Register Form -->
                                <form action="<?= base_url('registro') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control <?= session('errors.identificador') ? 'is-invalid' : '' ?>" id="floatingInput" placeholder="Número de control/Matrícula" name="identificador" value="<?= old('identificador') ?>" required>
                                        <label for="floatingInput">Número de control/Matrícula</label>
                                        <?php if (session('errors.identificador')): ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.identificador') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control <?= session('errors.email') ? 'is-invalid' : '' ?>" id="floatingEmail" placeholder="Correo" name="email" value="<?= old('email') ?>" required>
                                        <label for="floatingEmail">Correo</label>
                                        <?php if (session('errors.email')): ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.email') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control <?= session('errors.password') ? 'is-invalid' : '' ?>" id="floatingPassword" placeholder="Contraseña" name="password" required>
                                        <label for="floatingPassword">Contraseña</label>
                                        <?php if (session('errors.password')): ?>
                                            <div class="invalid-feedback">
                                                <?= session('errors.password') ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-lg btn-primary btn-login fw-bold mb-2" type="submit">Guardar</button>
                                        <a class="btn btn-secondary" href="<?= base_url('/') ?>">Cancelar</a>
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

    <script>
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                title: 'Registro completado',
                text: 'Registro completado con éxito',
                icon: 'success',
                confirmButtonText: 'Ok'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?= base_url('login') ?>';
                }
            });
        <?php endif; ?>
    </script>
</body>

</html>
