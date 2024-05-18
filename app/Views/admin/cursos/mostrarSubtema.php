<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <?php if (isset($validation)) : ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors(); ?>
            </div>
        <?php endif; ?>

        <form action="<?php echo base_url('admin/cursos/mostrarTema/' . $subtema->idTema); ?>" method="get">
            <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit"><i class="fas fa-arrow-left"></i></button>
        </form>

        <div class="col-12">
            <center>
                <h1 class="mb-5">Información del subtema <strong><?= $subtema->nombre ?></strong></h1>
            </center>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="mb-3">
                        <legend for="nombre" class="form-label">Nombre del tema</legend>
                        <span id="nombre" class="form-control readonly" aria-label="Nombre del tema"><?= $subtema->nombre ?></span>
                    </div>

                    <legend>Descripción</legend>
                    <textarea name="descripcion" class="form-control mb-3 readonly" aria-label="With textarea" style="height: 100px;" readonly><?= $subtema->descripcion ?></textarea>

                    <legend>Ilustración del tema</legend>
                    <div class="contenedor-imagen">
                        <img weight="200px" height="200px" src="https://cdn.pixabay.com/photo/2023/11/26/07/29/sparrow-8413000_1280.jpg" alt="Ilustración del tema <?= $subtema->nombre ?>">
                    </div>
                </div>
            </div>
            <?php 
            print_r($subtema)?>

            <form action="<?php echo base_url('admin/cursos/contenido/'.$subtema->idSubtema); ?>" method="get">
                <button class="btn" style="color:white;background-color: rgb(0,92,171);" type="submit">Editar el contenido del subtema</i></button>
            </form>
            
        </div>
    </div>
</div>

<?= $this->endSection(); ?>