<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completar Información</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
                <h3 class="login-heading mb-4">Completar Información</h3>
                <form action="<?= base_url('/user/guardarInfo') ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" value="<?= $basicUserInfo->id ?>" name="id_Usuario">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="identificador" name="identificador" value="<?= $basicUserInfo->identificador ?>" required>
                        <label for="identificador">Identificador</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <label for="nombre">Nombre</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidoPaterno" name="apellidoPaterno" required>
                        <label for="apellidoPaterno">Apellido Paterno</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="apellidoMaterno" name="apellidoMaterno" required>
                        <label for="apellidoMaterno">Apellido Materno</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                        <label for="telefono">Teléfono</label>
                    </div>
                    <div class="form-group">
                        <label>Sede:</label>
                        <select id="sede" name="sede" required>
                            <option value="Teziutlán">Teziutlán</option>
                            <option value="Hueyapan">Hueyapan</option>
                            <option value="Teteles">Teteles</option>
                            <option value="Tlatlauquitepec">Tlatlauquitepec</option>
                        </select>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login fw-bold mb-2" type="submit">Guardar</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>
</body>
</html>
