<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del usuario</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .tabla {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-top: 50px;
            width: 30%;
            float: left;
            margin-left: 100px;
        }

        .edit-button {
            background-color: #3498db;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 35px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 80px;
        }

        h1 {
            text-align: center;
            font-size: 15px;
        }

        h3 {
            text-align: center;
            margin-top: 50px;
            font-weight: bold;
        }

        .cursos {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-top: 50px;
            width: 30%;
            float: left;
            margin-left: 280px;
        }

        p {
            color: black;
            font-size: 16px;
            font-weight: bold;
            margin-top: 16px;
        }
    </style>
</head>

<body>
    <h3><span><?= $infoUsuario->nombre . " " . $infoUsuario->apellidoPaterno . " " . $infoUsuario->apellidoMaterno ?></span>
    </h3>

    <form action="<?php echo base_url('admin/perfil'); ?>" method="get">
        <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
    </form>

    <div class="tabla">
        <h1>Detalles del usuario</h1>
        <form action="<?= base_url('admin/perfil/actualizar')?>" method="POST">
        <?= csrf_field() ?>
        <input type="hidden" class="form-control"value="<?= session('id')?>" name="idUsuario">
            <div class="form-group">
                <label for="identificador">Matrícula:</label>
                <input class="form-control" type="text" id="identificador" name="identificador"
                    value="<?= $usuario->identificador?>" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input  class="form-control" type="text" id="nombre" name="nombre" value="<?=$infoUsuario->nombre?>"required>
            </div>
            <div class="form-group">
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input class="form-control" type="text" id="apellidoPaterno" name="apellidoPaterno"
                    value="<?=$infoUsuario->apellidoPaterno?>" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input class="form-control" type="text" id="apellidoMaterno" name="apellidoMaterno"
                    value="<?= $infoUsuario->apellidoMaterno?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input class="form-control" type="text" id="telefono" name="telefono"
                    value="<?= $infoUsuario->telefono?>" required>
            </div>
            <div class="form-group">
                <label for="sede">Sede:</label>
                <select class="form-control" id="sede" name="sede" required>
                    <option value="<?= $infoUsuario->sede ?>"><?= $infoUsuario->sede ?></option>
                    <option value="Teziutlán">Teziutlán</option>
                    <option value="Teteles">Teteles</option>
                    <option value="Hueyapan">Hueyapan</option>
                    <option value="Tlatauquitepec">Tlatauquitepec</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" value="<?= $usuario->email?>"
                    required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input class="form-control" type="text" id="telefono" name="telefono" value="<?= $infoUsuario->telefono?>"required>
            </div>
            <button type="submit" class="edit-button" style="color:white;background-color: rgb(0,92,171)" >Guardar cambios</button>
        </form>
    </div>
    <div class="cursos">
        <h1>Mis cursos</h1>
        <ul>
            <li>Ingles</li>
            <li>Ciencias Sociales</li>
            <li>Derecho</li>
        </ul>
    </div>
</body>

</html>

<?= $this->endSection(); ?>