<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Listado de Alumnos</title>
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
            font-size: 9px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px 12px;
            text-align: center  ;
        }

        th {
            background-color: #3498db;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #D9D9D9;
        }
    </style>
</head>
<body>
    <h1>Listado de Alumnos</h1>
    <table>
        <thead>
            <tr>
                <th>Identificador</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Sede</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($usuarios as $usuario): ?>
                <?php foreach($informacion[$usuario->id] as $info): ?>
                    <tr>
                        <td><?= $usuario->identificador ?></td>
                        <td><?= $info->nombre ?></td>
                        <td><?= $info->apellidoPaterno ?></td>
                        <td><?= $info->apellidoMaterno ?></td>
                        <td><?= $usuario->email ?></td>
                        <td><?= $info->telefono ?></td>
                        <td><?= $info->sede ?></td>
                        <td><?= $usuario->created_at ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>
