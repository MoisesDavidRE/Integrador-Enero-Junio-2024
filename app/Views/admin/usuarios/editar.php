<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
    <div class="container">
        <?php if (session()->has('success')): ?>
            <div class="alert alert-success">
                <?= session('success') ?>
            </div>
        <?php endif; ?>

        <title>Información de alumnos</title>
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
                text-align: center;
            }

            input[type="text"],
            input[type="email"],
            select {
                width: 100%;
                padding: 8px;
                border: 1px solid #DEDFE1; 
                border-radius: 3px;
            }

            .button-enviar {
                display: flex;
                justify-content: center; 
            }
        </style>
    </div>
</head>
<body>
   <form action="<?php echo base_url('admin/usuarios/alumnos'); ?>" method="get">
        <button class="btn"  style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
    </form>

     <h1>Actualizar información de los alumnos</h1>
    
    <div class="form-container">
        <form id="alumnosForm" action="<?= base_url('admin/usuarios/actualizar/' . $usuario->id) ?>" method="POST">
        
        <div class="form-group">
            <label for="perfil">Perfil:</label>
            <select id="perfil" name="perfil" required>
                    <option value="1" <?php if($usuario->perfil == 1){echo 'selected';}?>>Administrador</option>
                    <option value="2"<?php if($usuario->perfil == 2){echo 'selected';}?>>Estudiante</option>
                    <option value="3"<?php if($usuario->perfil == 3){echo 'selected';}?>>Docente</option>
                    <option value="4"<?php if($usuario->perfil == 4){echo 'selected';}?>>Administrativo/Servicios generales</option>
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
                <label for="apellidoPaterno">Apellido Paterno:</label>
                <input type="text" id="apellidoPaterno" name="apellidoPaterno" value="<?= isset($infoUsuario->apellidoPaterno) ? $infoUsuario->apellidoPaterno : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="apellidoMaterno">Apellido Materno:</label>
                <input type="text" id="apellidoMaterno" name="apellidoMaterno" value="<?= isset($infoUsuario->apellidoMaterno) ? $infoUsuario->apellidoMaterno : '' ?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="<?= isset($infoUsuario->telefono) ? $infoUsuario->telefono : '' ?>" required>
            </div> 
            <div class="form-group">
                <label for="sede">Sede:</label>
                <select id="sede" name="sede" required>
                    <option value="Teziutlán" <?= isset($infoUsuario->sede) && $infoUsuario->sede ? 'selected' : '' ?>>Teziutlán</option>
                    <option value="Teteles" <?= isset($infoUsuario->sede) && $infoUsuario->sede ? 'selected' : '' ?>>Teteles</option>
                    <option value="Hueyapan" <?= isset($infoUsuario->sede) && $infoUsuario->sede ? 'selected' : '' ?>>Hueyapan</option>
                    <option value="Tlatauquitepec" <?= isset($infoUsuario->sede) && $infoUsuario->sede ? 'selected' : '' ?>>Tlatauquitepec</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?= isset($usuario->email) ? $usuario->email : '' ?>" required>
                </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="1" <?= isset($usuario->status) && $usuario->status == 1 ? 'selected' : '' ?>>Activo</option>
                    <option value="2" <?= isset($usuario->status) && $usuario->status == 2 ? 'selected' : '' ?>>Inactivo</option>
                </select>
            </div>
            <div class="button-enviar">
                <button id="guardarCambiosBtn" type="submit" class="btn"  style="color:white;background-color: rgb(0,92,171);">Guardar cambios</button>
            </div>
        </form>
    </div>
</body>
<!-- <script>
document.getElementById('alumnosForm').addEventListener('submit', function() {
    alert('Los datos se actualizaron correctamente.');
});
</script> -->
<?= $this->endSection(); ?>