<Style>
    #imagen {
        display: flex;
        align-items: left;
    }
</Style>


<?= $this->extend('template/mainAdministrativo'); ?>
<?= $this->section('content'); ?>

<h1 align="center">Mis Cursos</h1>

<div class="col-10" style="position:relative;left:128px">
    <div class="card text-center">
        <form class="d-flex" role="Buscador">
            <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
            <button type="button" class="btn btn-outline-primary">Buscar</button>
        </form>
    </div>
</div>

<?php
$db = \Config\Database::connect();
$resultados = [];
foreach ($cursos as $index) {
    $query = "SELECT * FROM curso WHERE idCurso = $index->idCurso";
    $resultado = $db->query($query)->getResultArray();
    $resultados[] = $resultado;
}
?>


<div class="container">
    <div class="row">

        <?php foreach ($resultados as $curso) : ?>
            <div class="card" style="width: 20rem;position:relative;margin-right: 10px;">
                <center> <img style="padding-top:10px;padding-right:5px" src="<?= $curso[0]['ilustracion'] ?>" alt=" <?= $curso[0]['ilustracion'] ?>" width="300" height="170"><br></center>
                <div class="card-body">
                    <h4 style="color:rgb(0,92,171);">Curso:</h4>
                    <p><?= $curso[0]['nombre'] ?></p>
                    <h4 style="color:rgb(0,92,171);">Duracion:</h4>
                    <p><?php
                        $duracionEnSemanas = substr($curso[0]['duracion'], 0, -1);
                        $plural = ($duracionEnSemanas == 1) ? "semana" : "semanas";
                        echo $duracionEnSemanas . " " . $plural; ?></p>
                    <h4 style="color:rgb(0,92,171);">Instructor: </h4>
                    <p><?php
                        $id = $curso[0]['instructor'];
                        $query = "SELECT nombre, apellidoPaterno, apellidoMaterno FROM infoUsuario WHERE id_Usuario = $id";
                        $resultado = $db->query($query)->getResultArray();
                        echo $resultado[0]["nombre"] . " " . $resultado[0]["apellidoPaterno"] . " " . $resultado[0]["apellidoMaterno"];
                        ?></p>
                    <tbody>
                        <div>

                            <p>
                            <div style="padding-top: 10px;">
                            <a href="<?= base_url('administrativo/verCurso/' . $curso[0]['idCurso']) ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            </div>
                            </p>
                        </div>
                    </tbody>
                </div>
            </div>

        <?php endforeach ?>
    </div>
</div>


<?= $this->endSection(); ?>