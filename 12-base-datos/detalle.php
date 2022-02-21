<?php 
include('acceso_datos.php');

// ERORO SQLi
// No hacer
$datos = $conexion_bd->query('SELECT * FROM Ciclistas WHERE id='. $_GET['id']);

print_r($datos->fetchAll());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="content">
        <h1>Listado de cilistas</h1>
        <h2>Jorge</h2>
        <img src="trofeo.png" alt="Trofeo">
        <img src="trofeo.png" alt="Trofeo">
        <img src="trofeo.png" alt="Trofeo">
        <img src="trofeo.png" alt="Trofeo">
        <img src="trofeo.png" alt="Trofeo">

    </div>
</body>
</html>