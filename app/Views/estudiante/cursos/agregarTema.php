<?= $this->extend('template/mainEstudiante'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors(); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo base_url('estudiante/cursos/editar/'.$curso); ?>" method="get">
            <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
        </form>

        <div class="col-12">
            <center>
                <h1 class="mb-5">Agregar un nuevo curso</h1>
            </center>
            <form action="<?= base_url('estudiante/cursos/insertarTema'); ?>" method="POST">
                <?= csrf_field() ?>

                <div class="row">
                    <div class="col-12">
                        <input type="hidden" value="<?= $curso ?>" name="idCurso">
                        <div class="mb-3">
                            <legend for="nombre" class="form-label">Nombre del tema</legend>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre del tema">
                        </div>

                        <legend>Descripción</legend>
                        <textarea name="descripcion" class="form-control mb-3" aria-label="With textarea" style="height: 100px;" placeholder="Ingresa la descripción de tu tema"></textarea>

                        <legend>Ilustración del tema</legend>
                        <input type="text" class="form-control mb-3" name="ilustracion" placeholder="Ingresa la URL de tu imagen">
                    </div>
                </div>

                <center><input type="submit" class="btn" style="color:white;background-color: rgb(0,92,171);" value="Guardar"></center>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>