<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<style>
  .button-container {
    display: flex;
    justify-content: center;
  }
</style>
<h1>REPORTES ALUMNOS</h1>

<div class="button-container">
  <button class="btn btn-outline-primary" disabled>Alumnos</button>
  <span style="width:30px"></span>
  <a href="<?= base_url('admin/reportes/docentes') ?>">
    <button class="btn btn-outline-primary">Docentes</button>
  </a>
</div>
<?= $this->endSection(); ?>