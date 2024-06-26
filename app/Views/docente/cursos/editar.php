<?= $this->extend('template/mainDocente'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <?php
    if (isset($validation)) {
      print $validation->listErrors();
    }
    $db = \Config\Database::connect();
    ?>

    <form action="<?php echo base_url('docente/cursos'); ?>" method="get">
      <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
    </form>

    <div class="col-12">

      <center>
        <h1 class="mb-5">Editar el curso curso "<?= $curso->nombre ?>"</h1>
      </center>
      <form action="<?= base_url('docente/cursos/update'); ?>" method="POST">
        <?= csrf_field() ?>
        <input type="hidden" name="idCurso" value="<?= $curso->idCurso ?>">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre del curso</label>
              <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $curso->nombre ?>">
            </div>

            <div class="mb-3">
              <label for="instructor" class="form-label">Instructor</label>
              <select class="form-control" id="instructor" name="instructor" required>
                <option value="<?= $curso->instructor ?>" selected><?php
                                                                    $query = "SELECT nombre, apellidoPaterno, apellidoMaterno FROM infoUsuario WHERE id_Usuario = $curso->instructor";
                                                                    $resultado = $db->query($query)->getResultArray();
                                                                    echo $resultado[0]["nombre"] . " " . $resultado[0]["apellidoPaterno"] . " " . $resultado[0]["apellidoMaterno"];
                                                                    ?></option>
                <?php foreach ($instructores as $usr) : ?>
                  <option value="<?= (string)$usr->id ?>">
                    <?php foreach ($infoUsuario as $info) : ?>
                      <?php if ($usr->id == $info->id_Usuario) : ?>
                        <?php if ($info->nombre) echo $info->nombre . " " . $info->apellidoPaterno . " " . $info->apellidoMaterno ?>
                      <?php endif ?>
                    <?php endforeach ?>
                  </option>
                <?php endforeach ?>

              </select>
            </div>

            <div class="mb-3">
              <label for="categoria" class="form-label">Categoría</label>
              <select class="form-control" id="idCategoria" name="idCategoria" required>
                <?php foreach ($categorias as $categoria) : ?>
                  <?php if ($curso->idCategoria == $categoria->idCategoria) : ?>
                    <option value="<?= $curso->idCategoria ?>" selected><?= $categoria->nombre ?></option>
                  <?php endif ?>
                  <option value="<?= $categoria->idCategoria ?>">
                    <?= $categoria->nombre ?>
                  </option>
                <?php endforeach ?>
              </select>
            </div>

            <label>Descripción</label>
            <textarea name="descripcion" class="form-control mb-3" aria-label="With textarea" style="height: 100px;"><?= $curso->descripcion ?></textarea>

            <div class="mb-3">
              <label for="estatus" class="form-label">Estatus</label>
              <select class="form-control" id="estatus" name="estatus" required>
                <option value="Activo" <?php if ($curso->estatus == "Activo") echo "Selected" ?>>Activo
                </option>
                <option value="Inactivo" <?php if ($curso->estatus == "Inactivo") echo "Selected" ?>>
                  Inactivo</option>
              </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mb-3">
              <label for="duracion" class="form-label">Duración:</label>
              <select class="form-control" id="duracion" name="duracion" required>
                <option value="<?= $curso->duracion ?>" selected>
                  <p><?php
                      $duracionEnSemanas = substr($curso->duracion, 0, -1);
                      $plural = ($duracionEnSemanas == 1) ? "semana" : "semanas";
                      echo $duracionEnSemanas . " " . $plural; ?></p>
                </option>
                <?php for ($i = 1; $i < 18; $i++) : ?>
                  <option value="<?= (string) $i . "w" ?>">
                    <?php if ($i == 1) {
                      echo $i . " semana";
                    } else {
                      echo $i . " semanas";
                    } ?>
                  </option>
                <?php endfor ?>
              </select>
            </div>


            <div class="mb-3">
              <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
              <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" value="<?= $curso->fechaInicio ?>">
            </div>
            <div class="mb-3">
              <label for="fechaFin" class="form-label">Fecha de Finalización</label>
              <input type="date" class="form-control" name="fechaFin" id="fechaFin" value="<?= $curso->fechaFin ?>">
            </div>

            <div class="mb-3">
              <label for="objetivo" class="form-label">Objetivo</label>
              <input type="text" class="form-control" name="objetivo" id="objetivo" value="<?= $curso->objetivo ?>">
            </div>

            <label>Ilustración del curso</label>
            <input type="text" class="form-control mb-3" name="ilustracion" placeholder="Ingresa la URL de tu imagen" value="<?= $curso->ilustracion ?>">
          </div>
        </div>

        <center><input type="submit" class="btn mb-3" style="color:white;background-color: rgb(0,92,171);" value="Guardar cambios"></center>
      </form>

      <form action="<?php echo base_url('docente/cursos/nuevoTema/' . $curso->idCurso); ?>" method="get">
        <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit">Agregar un nuevo
          tema +</i></button>
      </form>

      <h5>Temas asignados al curso:</h5>


      <div class="contenedor-botones">
        <?php foreach ($temas as $tema) : ?>

          <div class="tooltip-container">
            <div class="tooltip">
              <div class="profile">
                <div class="user">
                  <div class="img">UI</div>
                  <div class="details">
                    <div class="name"><?= $tema->nombre ?></div>
                    <div class="username">@username</div>

                  </div>
                </div>
                <div class="about">500+ Connections</div>
              </div>
            </div>
            <div class="text">
              <form action="<?php echo base_url('docente/cursos/mostrarTema/' . $tema->idTema); ?>" method="get">
                <button class="boton" type="submit"><?= $tema->nombre ?></button>
              </form>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-3"></div>
  </div>
</div>

<?= $this->endSection(); ?>