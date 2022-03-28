<?php
print_r($_POST);

// Inicialización de variables

$nombre = "";
$error_nombre = false;

$incidencia = "";
$error_incidencia = false;

$urgente = "";
$error_urgente = false;

$informacion_correcta = false;

if(
    isset($_POST['alta'])
) {
    if(
        isset($_POST['nombre']) &&
        $_POST['nombre'] != ""
    ) {
        // Me han enviado un nombre
        $nombre = $_POST['nombre'];
    } else {
        // Me falta el nombre
        $error_nombre = true;
    }

    if(
        isset($_POST['incidencia']) &&
        $_POST['incidencia'] != ""
    ){
        // Me han enviado una incidencia
        $incidencia = $_POST['incidencia'];
    } else {
        // error, no hay incidencia
        $error_incidencia = true;
    }

    if(
        isset($_POST['urgente']) &&
        $_POST['urgente'] != ""
    ){
        // Me han enviado una urgente
        $urgente = $_POST['urgente'];
    } else {
        // error, no hay urgente
        $error_urgente = true;
    }

    if(
        $error_nombre == false &&
        $error_incidencia == false &&
        $error_urgente == false
    ) {
        $informacion_correcta = true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            /*color: red;*/
            background-color: red;
        }
    </style>
</head>
<body>
    <div>
        <h1>Gestión de incdencias</h1>
        <?php if($informacion_correcta == false) { ?>
        <form action="index.php" method="post">
            <input class='<?=($error_nombre)?'error':'' ?>' type="text" name="nombre" id="" placeholder="Nombre" value="<?=$nombre?>"><br>
            <input class='<?=($error_incidencia)?'error':'' ?>' type="text" name="incidencia" id="" placeholder="¿Qué pasa?" value="<?=$incidencia?>"><br>
            <input type="radio" name="urgente" value="s" <?= ($urgente=="s")?'checked':'' ?> ><span class='<?=($error_urgente)?'error':'' ?>'>Sí</span><br>
            <input type="radio" name="urgente" value="n" <?= ($urgente=="n")?'checked':'' ?> ><span class='<?=($error_urgente)?'error':'' ?>'>No</span><br>
            <input type="submit" name="alta" value="¡Dar de alta!">
        </form>
        <?php } else { ?>
            <h3>Un técnico le contactará</h3>
        <?php } ?>
    </div>
</body>
</html>