<div class="container">
    <div class="row">
        <?php
        if (isset($validation)) {
            print $validation->listErrors();
        }
        ?>

        <div class="col-8">
            <form action="<?= base_url('admin/cursos/agregar'); ?>" method="POST">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="instructor" class="form-label">Instructor</label>
                    <input type="text" class="form-control" name="instructor" id="instructor">

                </div>


                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">

                </div>

                <div class="mb-3">
                    <label for="duracion" class="form-label">Duracion</label>
                    <input type="text" class="form-control" name="duracion" id="duracion">
                </div>


                <div class="mb-3">
                    <label for="estatus" class="form-label">Estatus</label>
                    <input type="status" class="form-control" name="estatus" id="estatus">
                </div>


                <div class="mb-3">
                    <input type="submit" class="btn btn-success">
                </div>



            </form>

        </div>
        <div class="col-3"></div>
    </div>
</div>