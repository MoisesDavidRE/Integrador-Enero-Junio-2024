<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
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
    input[type="number"],
    input[type="password"],
    input[type="email"],
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
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .button-enviar {
        display: flex;
        justify-content: center;
    }

</style>

<form action="<?php echo base_url('admin/usuarios/alumnos'); ?>" method="get">
    <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
</form>

<h1>Agregar alumno</h1>


<form id="alumnosForm" action="<?= base_url('admin/usuarios/insert') ?>" method="POST">
    <div class="form-container">
    <div class="form-group">
                <label for="perfil">Perfil:</label>
                <input type="text" id="perfil" name="perfil" value=2 required readonly>
            </div>
    <div class="form-group">
            <label for="identificador">Matrícula:</label>
            <input type="number" id="identificador" name="identificador" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" id="apellidoPaterno" name="apellidoPaterno" required>
        </div>
        <div class="form-group">
            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" id="apellidoMaterno" name="apellidoMaterno" required>
        </div>
        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required pattern="[0-9]{10}" title="El teléfono debe tener exactamente 10 dígitos numéricos">
        </div>
        <div class="form-group">
            <label for="sede">Sede:</label>
            <select id="sede" name="sede" required>
                <option value="Teziutlán">Teziutlán</option>
                <option value="Hueyapan">Hueyapan</option>
                <option value="Teteles">Teteles</option>
                <option value="Tlatlauquitepec">Tlatlauquitepec</option>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
        </div>
        <div class="form-group">
        <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" value="password" required>
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select id="status" name="status" required>
                <option value="1">Activo</option>
                <option value="2">Inactivo</option>
            </select>
        </div>
            
        <div class="button-enviar">
            <a href="<?= base_url('admin/usuarios/alumnos') ?>">
                <button class="btn"  style="color:white;background-color: rgb(0,92,171);">Enviar</button>
            </a>
        </div>
       

    </div>
</form>
<script>
document.getElementById('alumnosForm').addEventListener('submit', function() {
    alert('Los datos se actualizaron correctamente.');
});
</script>
<?= $this->endSection(); ?>

