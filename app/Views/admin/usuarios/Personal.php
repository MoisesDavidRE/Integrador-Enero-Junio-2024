<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<style>
  .button-container {
    display: flex;
    justify-content: center;
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
</style>

<div class="button-container">
<a href="<?= base_url('admin/usuarios/alumnos') ?>">
  <button class="btn btn-outline-primary">Alumnos</button>
</a>
  <span style="width:30px"></span>
    <button class="btn btn-outline-primary" disabled>Personal</button>
</div>

<h1>Lista del personal</h1>

<form action="tu_url_de_busqueda" method="GET" class="search-form">
    <input type="text" name="q" placeholder="Buscar..." class="search-input">
    <button type="submit" class="search-button">Buscar</button>
</form>


<div class="button-agregar">
  <a href="<?= base_url('admin/usuarios/agregarPersonal') ?>">
    <button class="btn btn-outline-primary">Agregar<i class="fa-duotone fa-plus"></i></button>
  </a>
</div>

    <style>
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
        padding: 8px 12px; /* Añadido para mejorar la apariencia */
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
                            <a href="<?= base_url('admin/usuarios/mostrarPersonal/' . $usuario->id) ?>" class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>

                    <button type="button" class="btn btn-danger" onclick="confirmarEliminar(<?= $usuario->id ?>)">
                                <i class="fa-solid fa-trash"></i> 
                            </button>

                            <a href="<?= base_url('admin/usuarios/editarPersonal/' . $usuario->id) ?>" class="btn btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i>
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

