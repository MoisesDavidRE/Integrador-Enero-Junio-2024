<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                                <h3 class="login-heading mb-4" style="color:rgb(0,92,171)">Ingresa tu respuesta a la pregunta: </h3>
                                <?php foreach ($usuario as $usr) : ?>

                                    <form action="<?= base_url('resetPass/update') ?>" method="post">
                                        <?= csrf_field() ?>

                                        <input type="hidden" value="<?= $usr->id ?>" name="idUsuario">

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="nuevaContra" name="nuevaContra" placeholder="Nueva contraseña" required>
                                            <label for="nuevaContra">Nueva contraseña</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input type="password" class="form-control" id="confirmarContra" name="confirmarContra" placeholder="Confirmar nueva contraseña" required>
                                            <label for="confirmarContra">Confirmar nueva contraseña</label>
                                        </div>

                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <button class="btn btn-lg btn-primary btn-login fw-bold" type="submit">Guardar</button>
                                            <a class="btn btn-secondary" href="<?= base_url('/') ?>">Cancelar</a>
                                        </div>
                                    </form>

                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
  const nuevaContraInput = document.getElementById('nuevaContra');
  const confirmarContraInput = document.getElementById('confirmarContra');
  const submitButton = document.querySelector('button[type="submit"]');

  nuevaContraInput.addEventListener('input', () => {
    validatePasswords();
  });

  confirmarContraInput.addEventListener('input', () => {
    validatePasswords();
  });

  function validatePasswords() {
    const nuevaContraValue = nuevaContraInput.value;
    const confirmarContraValue = confirmarContraInput.value;

    if (nuevaContraValue === confirmarContraValue) {
      submitButton.removeAttribute('disabled');
      submitButton.classList.remove('disabled');
    } else {
      submitButton.setAttribute('disabled', 'disabled');
      submitButton.classList.add('disabled');
    }
  }
</script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>