<?= $this->extend('template/mainEstudiante'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors(); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo base_url('estudiante/cursos'); ?>" method="get">
            <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
        </form>

        <div class="col-12">
            <center>
                <h1 class="mb-5">Agregar un nuevo curso</h1>
            </center>
            <form action="<?= base_url('estudiante/cursos/insertar'); ?>" method="POST">
                <?= csrf_field() ?>


                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <legend for="nombre" class="form-label">Nombre del curso</legend>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingresa el nombre del curso" required>
                        </div>

                        <div class="mb-3">
                            <legend for="instructor" class="form-label">Instructor</legend>
                            <select class="form-control" id="instructor" name="instructor" required>
                                <option value="" disabled selected><--Selecciona una opción--></option>
                                <?php foreach ($instructores as $usr) : ?>
                                    <option value="<?= (string)$usr->id ?>">
                                        <?php foreach ($infoUsuario as $info) : ?>
                                            <?php if ($usr->id == $info->id_Usuario) : ?>
                                                <?php if($info->nombre) echo $info->nombre." ".$info->apellidoPaterno ." ".$info->apellidoMaterno ?>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <legend for="categoria" class="form-label">Categoría</legend>
                            <select class="form-control" id="idCategoria" name="idCategoria" placeholder="Ingresa una categoria" required>
                                <?php foreach ($categorias as $categoria) : ?>
                                    <option value="<?= $categoria->idCategoria ?>">
                                        <?= $categoria->nombre ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <legend>Descripción</legend>
                        <textarea name="descripcion" class="form-control mb-3" aria-label="With textarea" style="height: 100px;" placeholder="Ingresa descripcioo del curso" required></textarea>

                        <div class="mb-3">
                            <legend for="estatus" class="form-label">Estatus</legend>
                            <select class="form-control" id="estatus" name="estatus" placeholder="Ingresa el estatus" equired>
                                <option value="Activo">Activo</option>
                                <option value="Inactivo">Inactivo</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <legend for="duracion" class="form-label">Duración:</legend>
                            <select class="form-control" id="duracion" name="duracion" placeholder="Ingresa duracion del curso" required>
                                <?php for ($i = 1; $i < 18; $i++) : ?>
                                    <option value="<?= (string)$i . "w" ?>">
                                        <?= $i == 1 ? $i . " semana" : $i . " semanas" ?>
                                    </option>
                                <?php endfor ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <legend for="fechaInicio" class="form-label">Fecha de Inicio</legend>
                            <input type="date" class="form-control" name="fechaInicio" id="fechaInicio" placeholder="Ingresa fecha inicio" required>
                        </div>
                        <div class="mb-3">
                            <legend for="fechaFin" class="form-label">Fecha de Finalización</legend>
                            <input type="date" class="form-control" name="fechaFin" id="fechaFin" placeholder="Ingresa fecha finalización" required>
                        </div>

                        <div class="mb-3">
                            <legend for="objetivo" class="form-label">Objetivo</legend>
                            <input type="text" class="form-control" name="objetivo" id="objetivo" placeholder="Ingresa el objetivo del curso" required>
                        </div>

                        <legend>Ilustración del curso</legend>
                        <input type="text" class="form-control mb-3" name="ilustracion" placeholder="Ingresa la URL de tu imagen" required>
                    </div>
                </div>

                <center><input type="submit" class="btn" style="color:white;background-color: rgb(0,92,171);" value="Guardar"></center>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>