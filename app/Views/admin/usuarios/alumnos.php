<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<style>
    .button-container {
        display: flex;
        justify-content: center;
    }

    .btn-eliminar {
        color: red;
        cursor: pointer;
    }

    .button-agregar {
        display: flex;
        justify-content: right; 
        margin-bottom: 20px; 
        margin-right: 80px; 
    }

    .search-form {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
        margin-left: 200px;
        margin-right: auto;
        width: 60%;
    }

    .search-input {
        flex-grow: 1;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        color: #333;
        margin-right: 10px;
    }

    .search-button {
        padding: 8px 12px;
        border: 1px solid #ccc;
        border-radius: 3px;
        background-color: #3498db;
        color: #fff;
        cursor: pointer;
    }

    h1 {
        color: #333;
        margin-top: 40px;
        text-align: center; 
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        text-align: center;
        padding: 0px;
        font-size: 15px;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px 12px;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #ECEDF0;
    }

    .btn-eliminar {
        color: red;
        cursor: pointer;
    }

</style>

<div class="button-container">
    <button class="btn btn-outline-primary" disabled> <i class="fa-solid fa-users" style="color: #005cab;"></i> Alumnos</button>
    <span style="width:30px"></span>
    <a href="<?= base_url('admin/usuarios/personal') ?>">
        <button class="btn btn-outline-primary">Personal  </button>
    </a>
</div>

<h1>Lista de alumnos</h1>

<form action="<?= base_url('admin/usuarios/buscar') ?>" method="GET" class="search-form">
    <input type="text" name="q" placeholder="Buscar..." class="search-input">
    <button type="submit" class="search-button">Buscar</button>
</form>


<!-- Formulario de agregar -->
<form action="<?= base_url('admin/usuarios/agregar') ?>" method="GET" class="button-agregar">
    <button type="submit" class="btn btn-outline-primary">+ Agrega</button>
</form>

<table>
    <thead>
        <tr>
            <th>Perfil</th>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Sede</th>
            <th>Email</th>
            <th>Status</th>
            <th>Año</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <?php foreach($informacion[$usuario->id] as $info): ?>
                <tr>
                    <td><?= $usuario->perfil ?></td>
                    <td><?= $usuario->identificador ?></td>
                    <td><?= isset($info->nombre) ? $info->nombre : '' ?></td>
                    <td><?= isset($info->apellidoPaterno) ? $info->apellidoPaterno : '' ?></td>
                    <td><?= isset($info->apellidoMaterno) ? $info->apellidoMaterno : '' ?></td>
                    <td><?= isset($info->telefono) ? $info->telefono : '' ?></td>
                    <td><?= isset($info->sede) ? $info->sede : '' ?></td>
                    <td><?= $usuario->email ?></td>
                    <td><?= $usuario->status ?></td>    
                    <td><?= $usuario->created_at ?></td>
                    <td>    
                        <div class="btn-group" role="group" aria-label="Botones de acción">
                            <a href="<?= base_url('admin/usuarios/mostrar/' . $usuario->id) ?>" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                            <button type="button" class="btn btn-danger" onclick="confirmarEliminar(<?= $usuario->id ?>)">
                                <i class="fa-solid fa-trash"></i> 
                            </button>

                            <a href="<?= base_url('admin/usuarios/editar/' . $usuario->id) ?>" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i>
                            </a>
                                </a>

                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php endforeach ?>
    </tbody>
</table>

<script>
    function confirmarEliminar(id) {
        if (confirm('¿Estás seguro de que deseas eliminar este usuario?')) {
            fetch('<?php echo base_url('admin/usuarios/eliminar/'); ?>' + id, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                }
            })
            .then(response => {
                if (response.ok) {
                    window.location.reload();
                } else {
                    alert('Hubo un error al eliminar el usuario.');
                }
            })
            .catch(error => {
                console.error('Error al eliminar el usuario:', error);
                alert('Hubo un error al eliminar el usuario.');
            });
        }
    }
</script>





<?= $this->endSection(); ?>
