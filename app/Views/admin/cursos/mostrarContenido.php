<h1>Contenido</h1>

<form action="<?= base_url('estudiante/cursos/update'); ?>" method="POST">
    <?= csrf_field() ?>
    <input type="hidden" name="idSubtema" value="<?= $subtema ?>"> // Recuperas el subtema para mandarlo como llave foránea
</form>