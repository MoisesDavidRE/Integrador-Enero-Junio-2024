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
    }

    .progress-container {
        width: 100%; /* Ancho completo */
        text-align: center;
        margin-top: 30px; /* Margen superior */
    }

    progress {
        width: 70%; /* Ancho de la barra de progreso */
        height: 20px; /* Altura de la barra de progreso */
    }

</style>
<div class="progress-container">
    <h2>Progreso</h2>
    <progress value="10" max="80"></progress>
</div>
<div class="text-center mb-4">
<div class="btn-group" role="group" aria-label="Botones de acción">
        <a href="<?= base_url('estudiante/misCursos') ?>" class="btn btn-primary">Introducción</a>
        <a href="<?= base_url('estudiante/misCursos/subtema1') ?>" class="btn btn-primary">Subtema 1</a>
        <a href="<?= base_url('estudiante/misCursos/subtema2') ?>" class="btn btn-primary">Subtema 2</a>
        <a href="<?= base_url('estudiante/misCursos/subtema3') ?>" class="btn btn-primary">Subtema 3</a>
        <a href="<?= base_url('estudiante/misCursos/subtema4') ?>" class="btn btn-primary">Subtema 4</a>
        <a href="<?= base_url('estudiante/misCursos/evaluacion') ?>" class="btn btn-primary">Evaluación</a>
 </div>
</div>
<h1>Inglés</h1>
<<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="info-box">
                <h1>Evaluación</h1>
                <p>Has culmiado un tema, para aplicar lo aprendido realiza la siguiente evaluación y pon a prueba tus conocimientos.</p>
                <p><a href="https://forms.gle/mnNueNb1DGp8GC3B8">https://forms.gle/mnNueNb1DGp8GC3B8</a></p>
                <a href="<?= base_url('estudiante/misCursos/subtema4') ?>" class="btn btn-primary">Atrás</a>
        </div>
    </div>
</div>

 
<?= $this->endSection(); ?>
