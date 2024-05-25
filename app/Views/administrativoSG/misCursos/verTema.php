<?= $this->extend('template/mainAdministrativo'); ?>
<?= $this->section('content'); ?>

<h1 class="text-center"><?= esc($tema->nombre) ?></h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="info-box">
                <p class="text-justify"><?= esc($tema->descripcion) ?></p>
                <div class="text-center">
                    <img class="img-fluid" src="<?= esc($tema->ilustracion) ?>" alt="<?= esc($tema->nombre) ?>">
                </div>
                <div style="padding-top: 10px;">
                    <?php if (!empty($subtemas)): ?>
                        <div class="accordion" id="accordionSubtemas">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Ver Subtemas
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionSubtemas">
                                    <div class="accordion-body">
                                        <?php foreach ($subtemas as $subtema): ?>
                                            <a href="<?= base_url('estudiante/misCursos/subtema/' . $subtema->idSubtema) ?>" class="btn btn-primary mb-2">
                                                <i class="fa-solid fa-eye"></i> <?= esc($subtema->nombre) ?>
                                            </a><br>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <p>No hay subtemas disponibles para este tema.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<style>
.text-justify {
    text-align: justify;
    
}
</style>
