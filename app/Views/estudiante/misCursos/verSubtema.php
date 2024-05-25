<?= $this->extend('template/mainEstudiante'); ?>

<?= $this->section('content'); ?>
<style>
    h1 {
        text-align: center;
        margin: 0 auto 30px; /* Ajusta el margen inferior según sea necesario */
        padding: 0; 
    }
    h2 {
        margin-left: 15%;
        text-align: left;
        font-size: 20px;
    }

    .info-box {
        overflow-y: scroll;
        max-height: 500px; 
        border: 1px solid #ccc;
        padding: 10px;
        margin: 0 auto 80px;
        text-align: justify;
        width: 150%;
        margin-left: 3%;
    }

    .btn-group {
        margin-bottom: 20px;
        padding: 15px; 
    }

    .img {
        display: block; /* Para que el margen automático funcione */
        margin: 20px auto; /* Margen automático para centrar horizontalmente */
        width: 300px;
        height: 100px;
    }



</style>


</div>
<h1><?= esc($subtema->nombre) ?></h1>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="info-box">
                <p><?= esc($subtema->descripcion) ?></p>
                <img class="img" src="<?= esc($subtema->ilustracion) ?>" alt="<?= esc($subtema->nombre) ?>">
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>