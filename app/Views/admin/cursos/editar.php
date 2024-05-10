<div class="container">
    <div class="row">
        <?php print_r($curso); ?>

        <div class="col-8">
            <h2>Editar Curso</h2>
            <form action="<?= base_url('admin/cursos/update'); ?>" method="POST">
                <?= csrf_field() ?>
                <input type="hidden" name="idCurso" value="<?= $curso->idCurso; ?>">

                <div class="mb-3">
                    <label for="instructor" class="form-label">Instructor</label>
                    <input type="text" class="form-control" name="instructor" id="instructor" value="<?= $curso->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="<?= $curso->nombre; ?>">
                </div>

                <div class="mb-3">
                    <label for="duracion" class="form-label">Duracion</label>
                    <input type="text" class="form-control" name="duracion" id="duracion" value="<?= $curso->duracion; ?>">
                </div>

                <div class="mb-3">
                    <label for="estatus" class="form-label">Estatus</label>
                    <input type="status" class="form-control" name="estatus" id="estatus" value="<?= $curso->estatus; ?>">
                </div>

               

                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>


            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>