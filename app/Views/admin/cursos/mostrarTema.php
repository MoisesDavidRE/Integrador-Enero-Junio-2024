<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <?php if (isset($validation)) : ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors(); ?>
        </div>
        <?php endif; ?>

        <form action="<?php echo base_url('admin/cursos/editar/' . $tema->idCurso); ?>" method="get">
            <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i
                    class="fas fa-arrow-left"></i></button>
        </form>

        <div class="col-12">
            <center>
                <h1 class="mb-5">Información del tema <strong><?= $tema->nombre ?></strong></h1>
            </center>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="mb-3">
                        <legend for="nombre" class="form-label">Nombre del tema</legend>
                        <span id="nombre" class="form-control readonly"
                            aria-label="Nombre del tema"><?= $tema->nombre ?></span>
                    </div>

                    <legend>Descripción</legend>
                    <textarea name="descripcion" class="form-control mb-3 readonly" aria-label="With textarea"
                        style="height: 100px;" readonly><?= $tema->descripcion ?></textarea>

                    <legend>Ilustración del tema</legend>
                    <div class="contenedor-imagen">
                        <img weight="200px" height="200px"
                            src="https://cdn.pixabay.com/photo/2023/11/26/07/29/sparrow-8413000_1280.jpg"
                            alt="Ilustración del tema <?= $tema->nombre ?>">
                    </div>
                </div>
            </div>

            <form action="<?php echo base_url('admin/cursos/nuevoSubtema/' . $tema->idTema); ?>" method="get">
                <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit">Agregar un nuevo
                    subtema +</i></button>
            </form>
            <h2>Subtemas pertenecientes al tema <strong><?= $tema->nombre ?></strong></h2>
            <div class="contenedor-botones">
                <?php foreach ($subtemas as $subtema) : ?>

                <div class="tooltip-container">
                    <div class="tooltip">
                        <div class="profile">
                            <div class="user">
                                <div class="img">UI</div>
                                <div class="details">
                                    <div class="name"><?= $subtema->nombre ?></div>
                                    <div class="username">@username</div>

                                </div>
                            </div>
                            <div class="about">500+ Connections</div>
                        </div>
                    </div>
                    <div class="text">
                        <form action="<?php echo base_url('admin/cursos/mostrarSubtema/' . $subtema->idSubtema); ?>"
                            method="get">
                            <button class="boton" type="submit"><?= $subtema->nombre ?></button>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>