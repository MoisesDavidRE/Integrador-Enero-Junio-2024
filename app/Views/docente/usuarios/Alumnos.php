<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<h1>USUARIOS-ALUMNOS</h1>
<div class="button-container">
  <button class="btn btn-outline-primary" disabled>Alumnos</button>
  <span style="width:30px"></span>
  <a href="<?= base_url('admin/usuarios/administrativos') ?>">
    <button class="btn btn-outline-primary">Administrativos/Servicios Generales</button>
  </a>
  <span style="width:30px"></span>
  <a href="<?= base_url('admin/usuarios/docentes') ?>">
    <button class="btn btn-outline-primary">Docentes</button>
  </a>
  <span style="width:30px"></span>
  <a href="<?= base_url('admin/usuarios/admins') ?>">
    <button class="btn btn-outline-primary">Administradores</button>
  </a>
</div>
<?= $this->endSection(); ?>