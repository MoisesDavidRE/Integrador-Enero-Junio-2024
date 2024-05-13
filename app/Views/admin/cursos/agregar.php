<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        $db = \Config\Database::connect();
        ?>

        <div class="col-12">
        <form action="<?= base_url('admin/cursos/insertar'); ?>" method="POST">
  <?= csrf_field() ?>

  <div class="row">
    <div class="col-md-6">
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre del curso</label>
        <input type="text" class="form-control" name="nombre" id="nombre">
      </div>

      <div class="mb-3">
        <label for="instructor" class="form-label">Instructor</label>
        <select class="form-control" id="instructor" name="instructor" required>
          <?php foreach ($instructores as $usr): ?>
            <option value="<?= (String)$usr->id ?>">
              <?php
                $query = "SELECT nombre, apellidoPaterno, apellidoMaterno FROM infoUsuario WHERE id_Usuario = $usr->id";
                $resultado = $db->query($query)->getResultArray();
                echo $resultado[0]["nombre"] . " " . $resultado[0]["apellidoPaterno"] . " " . $resultado[0]["apellidoMaterno"];
              ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-control" id="idCategoria" name="idCategoria" required>
          <?php foreach ($categorias as $categoria): ?>
            <option value="<?= $categoria->idCategoria ?>">
              <?= $categoria->nombre ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>

      <label>Descripción</label>
      <textarea name="descripcion" class="form-control mb-3" aria-label="With textarea" style="height: 100px;"></textarea>

      <div class="mb-3">
        <label for="estatus" class="form-label">Estatus</label>
        <select class="form-control" id="estatus" name="estatus" required>
          <option value="Activo">Activo</option>
          <option value="Inactivo">Inactivo</option>
        </select>
      </div>
    </div>

    <div class="col-md-6">
      <div class="mb-3">
        <label for="duracion" class="form-label">Duración:</label>
        <select class="form-control" id="duracion" name="duracion" required>
          <?php for ($i = 1; $i < 18; $i++): ?>
            <option value="<?= (String) $i."w" ?>">
              <?php if ($i == 1) {echo $i . " semana";} else {echo $i . " semanas"; } ?>
            </option>
          <?php endfor ?>
        </select>
      </div>

      
      <div class="mb-3">
        <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
        <input type="date" class="form-control" name="fechaInicio" id="fechaInicio">
      </div>
      <div class="mb-3">
        <label for="fechaFin" class="form-label">Fecha de Finalización</label>
        <input type="date" class="form-control" name="fechaFin" id="fechaFin">
      </div>

      <div class="mb-3">
        <label for="objetivo" class="form-label">Objetivo</label>
        <input type="text" class="form-control" name="objetivo" id="objetivo">
      </div>

      <label>Ilustración del curso</label>
      <input type="text" class="form-control mb-3" name="ilustracion" placeholder="Ingresa la URL de tu imagen">
    </div>
  </div>

  <input type="submit" class="btn btn-success">
</form>

    </div>
    <div class="col-3"></div>
</div>
</div>

<?= $this->endSection(); ?>