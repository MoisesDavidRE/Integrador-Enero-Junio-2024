<Style>
  #imagen {
    display: flex;
    align-items: left;
  }
</Style>


<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<h1 align="center">Inicio</h1>

<div class="col-10" style="position:relative;left:128px">
  <div class="card text-center">
    <form class="d-flex" role="Buscador">
      <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
      <button type="button" class="btn btn-outline-primary">Buscar</button>
    </form>
  </div>
</div>

<div style="padding-bottom: 25px; padding-top: 10px;position:relative;left:128px">

  <a href="<?= base_url('admin/cursos/agregar') ?>"><button type="button" class="btn btn-outline-primary"
      style="padding: 10px;"><i class="fa-sharp fa-solid fa-plus"></i>Agregar</button></a>
</div>



<div class="container">
  <div class="row">

    <?php foreach ($cursos as $curso): ?>
      <div class="card" style="width: 20rem;position:relative;margin-right: 10px;">
        <center> <img
            src="https://static.vecteezy.com/system/resources/previews/005/449/876/non_2x/mathematics-doodle-hand-drawn-school-set-vector.jpg"
            width="300"><br></center>
        <div class="card-body">
          <h4>Matematicas V </h4>
          <h4>Duracion:</h4>
          <h4>Instructor: </h4>

          <tbody>
            <div>
              <p><?= $curso->nombre ?></p>
              <p><?= $curso->instructor ?></p>
              <p><?= $curso->duracion ?></p>

              <p>
              <div style="padding-top: 10px;">
                <a href="#" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                <a href="<?= base_url('admin/cursos/delete/' . $curso->idCurso); ?>" class="btn btn-danger"><i
                    class="fa-solid fa-trash"></i></a>
                <a href="<?= base_url('admin/cursos/editar/' . $curso->idCurso); ?>" class="btn btn-warning"><i
                    class="fa-solid fa-pen-to-square <i class=" fa-regular fa-pen-to-square"
                    style="color: #ffffff;"></i></a>
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