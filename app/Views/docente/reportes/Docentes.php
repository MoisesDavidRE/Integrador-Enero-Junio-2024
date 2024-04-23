<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<h1>REPORTES DOCENTES</h1>

<div class="button-container">
  <a href="<?= base_url('admin/reportes/alumnos') ?>">
    <button class="btn btn-outline-primary">Alumnos</button>
  </a>
  <span style="width:30px"></span>
  <button class="btn btn-outline-primary" disabled>Docentes</button>
</div>
<?= $this->endSection(); ?>