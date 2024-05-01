<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
    <title>Formulario de personal</title>
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
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #DEDFE1; 
            border-radius: 3px;
        }

        h1 {
            color: #333;
            margin-top: 40px; 
        }

        input[type="submit"] {
            width: 100%; 
            padding: 10px 0; 
            background-color: #DEDFE1;
            color: #DEDFE1;
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
    <h1>Información del usuario</h1>
    
    <!---Se estblece el formulario jalando la variable establecida en el controlador para obtener los datos del cliente-->
    <div class="form-container">
        <form action="" method="POST">
        <div class="form-group">
            <label for="identificador">Matrícula:</label>
            <input type="text" id="identificador" name="identificador" value="<?= isset($usuario->identificador) ? $usuario->identificador : '' ?>" readonly>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?= isset($infoUsuario->nombre) ? $infoUsuario->nombre : '' ?>" readonly>
        </div>
        <div class="form-group">
            <label for="apellidoP">Apellido Paterno:</label>
            <input type="text" id="apellidoP" name="apellidoP" value="<?= isset($infoUsuario->apellidoPaterno) ? $infoUsuario->apellidoPaterno : '' ?>" readonly>
        </div>
        <div class="form-group">
            <label for="apellidoM">Apellido Materno:</label>
            <input type="text" id="apellidoM" name="apellidoM" value="<?= isset($infoUsuario->apellidoMaterno) ? $infoUsuario->apellidoMaterno : '' ?>" readonly>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="<?= isset($infoUsuario->telefono) ? $infoUsuario->telefono : '' ?>" readonly>
        </div> 
        <div class="form-group">
            <label for="sede">Sede:</label>
            <input type="text" id="sede" name="sede" value="<?= isset($infoUsuario->sede) ? $infoUsuario->sede : '' ?>" readonly>
        </div> 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= isset($usuario->email) ? $usuario->email : '' ?>" readonly>
        </div>   
        <div class="form-group">
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="<?= isset($usuario->status) ? ($usuario->status == 1 ? 'Activo' : 'Inactivo') : '' ?>" readonly>
        </div>
        <div class="form-group">
            <label for="created_at">Año:</label>
            <input type="text" id="created_at" name="created_at" value="<?= isset($usuario->created_at) ? date('Y', strtotime($usuario->created_at)) : '' ?>" readonly>
        </div>


        </form>
        <div class="button-enviar">
            <a href="<?= base_url('admin/usuarios/personal') ?>">
                <button class="btn btn-outline-primary">Regresar</button>
            </a>
        </div>
    </div>
</body>
<?= $this->endSection(); ?>
