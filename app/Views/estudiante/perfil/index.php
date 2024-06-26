<?= $this->extend('template/mainEstudiante'); ?>
<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detalles del usuario</title>
  <link rel="stylesheet" href="<?= base_url('ruta-a-tu-style.css') ?>">
  <style>
    .tabla {
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
      margin-top: 50px;
      width: 30%;
      float: left;
      margin-left: 100px;
    }
    .edit-button {
      background-color: #3498db;
      border: none;
      color: white;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 35px;
      border-radius: 5px;
      cursor: pointer;
      margin-left: 80px;      
    }
    h1{
      text-align: center;
      font-size: 15px;
    }
    h3{
      text-align: center;
      margin-top: 50px;
      font-weight: bold;
    }
    .cursos{
      border: 1px solid #ccc;
      padding: 10px;
      border-radius: 5px;
      margin-top: 50px;
      width: 30%;
      float: left;
      margin-left: 280px;
    }
    p{
      color: black;
      font-size: 16px;
      font-weight: bold;   
      margin-top: 16px;
    }
  </style>
</head>
<body>
<h3><span><?= isset($usuario['nombre']) ? $usuario['nombre'] : 'No disponible' ?></span></h3>
<div class="tabla">
    <h1>Detalles del usuario</h1>

    <div class="user-info">
      <p>Nombre:</p>
      <span><?= isset($usuario['nombre']) ? $usuario['nombre'] : 'No disponible' ?></span>

      <p>Correo:</p>
      <span><?= isset($usuario['email']) ? $usuario['email'] : 'No disponible' ?></span>

      <p>Matrícula:</p>
      <span><?= isset($usuario['identificador']) ? $usuario['identificador'] : 'No disponible' ?></span>

      <p>Instituto:</p>
      <span><?= isset($usuario['sede']) ? $usuario['sede'] : 'No disponible' ?></span>
    </div>
  
    <button class="edit-button" onclick="window.location.href = '<?= base_url('estudiante/perfil/editar/') . session('id') ?>'">Editar información</button>

  </div>

  <div class="cursos">
    <h1>Mis cursos</h1>
    <ul>
      <li>Ingles</li>
      <li>Ciencias Sociales</li>
      <li>Derecho</li>
    </ul>
  </div>
</body>
</html>
<?= $this->endSection(); ?>
