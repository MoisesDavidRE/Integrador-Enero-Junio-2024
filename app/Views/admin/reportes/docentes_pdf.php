<!DOCTYPE html>
<html>
<head>
    <title>Lista de Docentes</title>
    <style>
        h1 {
            margin: 100px;
            color: #333;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 100px auto ;
            text-align: center;
            font-size: 8px;
        }

        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center  ;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <section class="mt-5"></section>
    <h1>Lista de Docentes</h1>
    <table class="mt-5">
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Email</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Teléfono</th>
                <th>Estatus</th>
                <th>Sede</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario): ?>
                <?php foreach ($informacion[$usuario->id] as $info): ?>
                    <tr>
                        <td><?= $usuario->identificador ?></td>
                        <td><?= $usuario->email ?></td>
                        <td><?= $info->nombre ?></td>
                        <td><?= $info->apellidoPaterno ?></td>
                        <td><?= $info->apellidoMaterno ?></td>
                        <td><?= $info->telefono ?></td> 
                        <td><?= $usuario->status ?></td>
                        <td><?= $info->sede ?></td>
                        <td><?= $usuario->created_at ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
