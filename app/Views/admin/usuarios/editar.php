<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
    <title>Formulario de alumno</title>
    <style>
        h1 {
            color: #333;
            text-align: center;
        }

        .form-container {
            width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            font-weight: bold;
            display: block;
            text-align: left;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #DEDFE1; 
            border-radius: 3px;
        }

        input[type="submit"] {
            width: 100%; 
            padding: 10px 0; 
            background-color: #DEDFE1;
            color: #333;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .button-enviar {
            display: flex;
            justify-content: center; 
        }
    </style>
</head>
<body>
    <h1>Editar información del usuario</h1>
    <form action="<?= base_url('admin/usuarios/alumnos') ?>" method="get">
    <button type="submit" class="btn btn-danger">Cancelar</button>
</form>
    <div class="form-container">
        <!-- Formulario para editar datos del usuario -->
        <form action="<?= base_url('admin/usuarios/actualizar/' . $usuario->id) ?>" method="POST">
        <div class="form-group">
                <label for="perfil">Perfil:</label>
                <select  name="perfil" required>
                    <option value="1">Administrador</option>
                    <option value="2">Estudiante</option>
                    <option value="3">Docente</option>
                    <option value="4">Administrativo/ServiciosGenerales</option>
                </select>
            </div>
        <div class="form-group">
            <label for="identificador">Matrícula:</label>
            <input type="text" id="identificador" name="identificador" value="<?= isset($usuario->identificador) ? $usuario->identificador : '' ?>" required>
        </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="<?= isset($infoUsuario->nombre) ? $infoUsuario->nombre : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="apellidoP">Apellido Paterno:</label>
                <input type="text" id="apellidoP" name="apellidoP" value="<?= isset($infoUsuario->apellidoPaterno) ? $infoUsuario->apellidoPaterno : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="apellidoM">Apellido Materno:</label>
                <input type="text" id="apellidoM" name="apellidoM" value="<?= isset($infoUsuario->apellidoMaterno) ? $infoUsuario->apellidoMaterno : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?= isset($infoUsuario->telefono) ? $infoUsuario->telefono : '' ?>" required>
            </div> 
            <div class="form-group">
                <label for="sede">Sede:</label>
                <select id="sede" name="sede" required>
                    <option value="Teziutlán" <?= isset($infoUsuario->sede) && $infoUsuario->sede == 1 ? 'selected' : '' ?>>Teziutlán</option>
                    <option value="Teteles" <?= isset($infoUsuario->sede) && $infoUsuario->sede == 2 ? 'selected' : '' ?>>Teteles</option>
                    <option value="Hueyapan" <?= isset($infoUsuario->sede) && $infoUsuario->sede == 3 ? 'selected' : '' ?>>Hueyapan</option>
                    <option value="Tlatlauquitepec" <?= isset($infoUsuario->sede) && $infoUsuario->sede == 4 ? 'selected' : '' ?>>Tlatlauquitepec</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= isset($usuario->email) ? $usuario->email : '' ?>" required>
            </div> 
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" value="<?= isset($usuario->password) ? $usuario->password : '' ?>" readonly>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="1" <?= isset($usuario->status) && $usuario->status == 1 ? 'selected' : '' ?>>Activo</option>
                    <option value="2" <?= isset($usuario->status) && $usuario->status == 2 ? 'selected' : '' ?>>Inactivo</option>
                </select>
            </div>
            <div class="button-enviar">
            <a href="<?= base_url('admin/usuarios/alumnos') ?>">
                <button type="submit" class="btn btn-outline-primary">Guardar cambios</button>
            </div>
        </form>
    </div>
</body>
<?= $this->endSection(); ?>
