<Style>
  #imagen {
    display: flex;
    align-items: left;
  }
</Style>


<?= $this->extend('template/mainEstudiante'); ?>
<?= $this->section('content'); ?>

<h1 align="center">Inicio</h1>

<div class="col-10" style="position:relative;left:128px">
  <div class="card text-center">
    <form class="d-flex" role="Buscador" action="<?= base_url('estudiante/cursos'); ?>" method="POST">
      <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" name="search">
      <button type="submit" class="btn btn-outline-primary">Buscar</button>
    </form>
  </div>
</div>

<div style="padding-bottom: 25px; padding-top: 10px;position:relative;left:128px">

  <a href="<?= base_url('estudiante/cursos/agregar') ?>"><button type="button" class="btn btn-outline-primary" style="padding: 10px;"><i class="fa-sharp fa-solid fa-plus"></i>Agregar</button></a>
</div>



<div class="container">
  <div class="row">

    <?php foreach ($cursos as $curso) : ?>
      <div class="card" style="width: 20rem;position:relative;margin-right: 10px;">
        <center> <img style="padding-top:10px;padding-right:5px" src="<?= $curso->ilustracion ?>" alt=" <?= $curso->ilustracion ?>" width="300" height="170"><br></center>
        <div class="card-body">
          <h4 style="color:rgb(0,92,171);">Curso:</h4>
          <p><?= $curso->nombre ?></p>
          <h4 style="color:rgb(0,92,171);">Duracion:</h4>
          <p><?php
              $duracionEnSemanas = substr($curso->duracion, 0, -1);
              $plural = ($duracionEnSemanas == 1) ? "semana" : "semanas";
              echo $duracionEnSemanas . " " . $plural; ?></p>
          <h4 style="color:rgb(0,92,171);">Instructor: </h4>
          <p><?php
              $db = \Config\Database::connect();
              $query = "SELECT nombre, apellidoPaterno, apellidoMaterno FROM infoUsuario WHERE id_Usuario = $curso->instructor";
              $resultado = $db->query($query)->getResultArray();
              echo $resultado[0]["nombre"] . " " . $resultado[0]["apellidoPaterno"] . " " . $resultado[0]["apellidoMaterno"];
              ?></p>
          <tbody>
            <div>

              <p>
              <div style="padding-top: 10px;">
                <?php
                $db = \Config\Database::connect();
                $idUsuario = session()->get('id');
                $query = "SELECT * FROM curso_usuario WHERE idUsuario=$idUsuario and idCurso=$curso->idCurso";
                $resultado = $db->query($query)->getResultArray();
                if ($resultado) :
                ?>
                  <a class="btn btn-success" disabled>Estás inscrito</a>
                <?php else : ?>
                  <form action="<?= base_url('estudiante/cursos/inscribirse/' . $curso->idCurso); ?>" method="POST">
                    <?= csrf_field() ?>
                    <input type="submit" class="btn" style="color:white;background-color: rgb(0,92,171);" value="Inscribirse">
                    
                  </form>
                <?php endif ?>
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