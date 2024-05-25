<?= $this->extend('template/mainAdministrativo'); ?>
<?= $this->section('content'); ?>

<h1 align="center"><?= esc($curso->nombre) ?></h1>

<div class="container">
    <div class="row">

        <?php foreach ($temas as $tema) : ?>
            <div class="card" style="width: 20rem; position: relative; margin-right: 10px; margin-bottom: 20px;">
                <center>
                    <img style="padding-top:10px; padding-right:5px" src="<?= esc($tema->ilustracion) ?>" alt="<?= esc($tema->nombre) ?>" width="300" height="170">
                </center>
                <div class="card-body">
                    <h4 style="color:rgb(0,92,171);">Tema:</h4>
                    <p><?= esc($tema->nombre) ?></p>
                    <p><?= esc($tema->descripcion) ?></p>
                    <div style="padding-top: 10px;">
                    <a href="<?= base_url('administrativo/verTema/' . $tema->idTema) ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Ver Tema</a>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?= $this->endSection(); ?>
