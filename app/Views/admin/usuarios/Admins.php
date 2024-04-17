<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<h1>USUARIOS-ADMINS</h1>
<div class="button-container">
<a href="<?= base_url('admin/usuarios/alumnos') ?>">
  <button class="btn btn-outline-primary">Alumnos</button>
</a>
  <span style="width:30px"></span>
  <a href="<?= base_url('admin/usuarios/administrativos') ?>">
    <button class="btn btn-outline-primary">Administrativos/Servicios Generales</button>
  </a>
  <span style="width:30px"></span>
  <a href="<?= base_url('admin/usuarios/docentes') ?>">
    <button class="btn btn-outline-primary">Docentes</button>
  </a>
  <span style="width:30px"></span>
    <button class="btn btn-outline-primary" disabled>Administradores</button>
</div>
<?= $this->endSection(); ?>