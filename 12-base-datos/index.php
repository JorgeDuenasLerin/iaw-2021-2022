<?php
include('acceso_datos.php');

$datos = $conexion_bd->query('SELECT * FROM Ciclistas');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
        <h1>Listado de cilistas</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Trofeos</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($datos as $fila) { ?>
                <tr>
                    <td><?=$fila['id']?></td>
                    <td>
                        <a href="detalle.php?id=<?=$fila['id']?>">
                            <?=$fila['nombre']?>
                        </a>
                    </td>
                    <td><?=$fila['num_trofeos']?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>