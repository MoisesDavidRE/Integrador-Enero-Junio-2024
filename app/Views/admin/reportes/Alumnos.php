<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
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
        font-size: 14px;
        font-family: Arial, sans-serif;
    }

    th, td {
        border: 1px solid #ccc;
        padding: 8px;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #D9D9D9;
    }

    .contenedor-menu {
        margin-bottom: 20px;
    }
    .menu-desplegable {
    position: absolute;
    top: 0; 
    right: 100px; 
    margin: 0; 
}


    .opciones-filtro {
        display: none;
        margin-top: 10px;
    }

    .btn-limpiar {
        margin-left: 10px;
    }

    .contenedor-menu {
        position: relative;
        margin-bottom: 20px;
    }

    .opciones-filtro {
        display: none;
        position: absolute;
        top: 100%; /* Posición debajo del botón */
        left: 1000px;
        background-color: #fff;
        padding: 10px;
        border: 1px solid #ccc;
        z-index: 1; /* Asegura que esté por encima de la tabla */
    }

    .button-container-top {
        position: relative; /* Esto es necesario para que el botón esté en la parte superior */
    }

    .menu-desplegable {
        position: absolute;
        top: 0; 
        right: 100px; 
        margin: 0; 
    }
</style>

<h1>Lista de alumnos</h1>

<div class="button-container">
    <button class="btn btn-outline-primary" disabled>Alumnos</button>
    <span style="width:30px"></span>
    <a href="<?= base_url('admin/reportes/docentes') ?>">
        <button class="btn btn-outline-primary">Personal</button>
    </a>
</div>

<div class="button-container-top">
<button class="btn btn-outline-primary menu-desplegable" id="filtroMenu">Filtros</button>
<a href="<?= base_url('admin/reportes/generarPDF'); ?>" class="btn btn-primary">Descargar PDF <i class="fa-solid fa-file-pdf" style="color: white;"></i> </a> <!-- Ajuste aquí para cambiar el color del icono -->
</div>

<!-- Controles de filtro -->

<div class="contenedor-menu">
    <div class="opciones-filtro" id="opcionesFiltro">
        <div>
            <label for="filtroStatus">Status:</label>
            <select id="filtroStatus">
                <option value="">Todos</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>

        <div>
            <label for="filtroSede">Sede:</label>
            <select id="filtroSede">
                <option value="">Todas</option>
                <option value="Tlatauquitepec">Tlatauquitepec</option>
                <option value="Teziutlán">Teziutlán</option>
                <option value="Hueyapan">Hueyapan</option>
                <option value="Teteles">Teteles</option>
            </select>
        </div>

        <div>
            <label for="filtroAnio">Año:</label>
            <select id="filtroAnio">
                <option value="">Todos</option>
                <?php for ($i = 2019; $i <= 2024; $i++): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>
        <button class="btn btn-outline-secondary btn-limpiar" id="limpiarFiltro">Limpiar</button>
    </div>
</div>

<table id="tablaAlumnos">
    <thead>
        <tr>
            <th>Identificador</th>
            <th>Email</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Status</th>
            <th>Sede</th>
            <th>Año</th>        
        </tr>
    </thead>
    <tbody>
        <?php foreach($usuarios as $usuario): ?>
            <?php foreach($informacion[$usuario->id] as $info): ?>
                <tr>
                    <td><?= $usuario->identificador ?></td>
                    <td><?= $usuario->email ?></td>
                    <td><?= $info->nombre ?></td>
                    <td><?= $info->apellidoPaterno ?></td>
                    <td><?= $info->apellidoMaterno ?></td>
                    <td><?= $info->telefono ?></td>
                    <td><?= $usuario->status ?></td>
                    <td><?= $info->sede ?></td>
                    <td><?= $usuario->created_at ?></td>
                </tr>
            <?php endforeach ?>
        <?php endforeach ?>
    </tbody>
</table>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const filtroMenu = document.getElementById('filtroMenu');
    const opcionesFiltro = document.getElementById('opcionesFiltro');
    const tablaAlumnos = document.getElementById('tablaAlumnos'); 

    filtroMenu.addEventListener('click', function () {
        if (opcionesFiltro.style.display === 'none') {
            opcionesFiltro.style.display = 'block';
        } else {
            opcionesFiltro.style.display = 'none';
        }
    });

    const filtroStatus = document.getElementById('filtroStatus');
    const filtroSede = document.getElementById('filtroSede');
    const filtroAnio = document.getElementById('filtroAnio');
    const limpiarFiltroBtn = document.getElementById('limpiarFiltro');

    filtroStatus.addEventListener('change', filtrarTabla);
    filtroSede.addEventListener('change', filtrarTabla);
    filtroAnio.addEventListener('change', filtrarTabla);
    limpiarFiltroBtn.addEventListener('click', limpiarFiltro);

    function filtrarTabla() {
        const statusSeleccionado = filtroStatus.value;
        const sedeSeleccionada = filtroSede.value;
        const anioSeleccionado = filtroAnio.value;
        const filas = tablaAlumnos.querySelectorAll('tbody tr'); 

        filas.forEach(fila => {
            const statusFila = fila.querySelector('td:nth-child(7)').textContent;
            const sedeFila = fila.querySelector('td:nth-child(8)').textContent;
            const anioFila = fila.querySelector('td:nth-child(9)').textContent;

            const cumpleStatus = statusSeleccionado === '' || statusFila === statusSeleccionado;
            const cumpleSede = sedeSeleccionada === '' || sedeFila === sedeSeleccionada;
            const cumpleAnio = anioSeleccionado === '' || anioFila === anioSeleccionado;

            if (cumpleStatus && cumpleSede && cumpleAnio) {
                fila.style.display = 'table-row';
            } else {
                fila.style.display = 'none';
            }
        });
    }

    function limpiarFiltro() {
        filtroStatus.value = '';
        filtroSede.value = '';
        filtroAnio.value = '';
        const filas = tablaAlumnos.querySelectorAll('tbody tr');    
        filas.forEach(fila => {
            fila.style.display = 'table-row';
        });
    }
});

</script>

<?= $this->endSection(); ?>
