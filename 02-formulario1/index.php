<?php

$bienvenido=true;
$nombre="";
$apellidos='';
$edad_20_39='';
$edad_40_59='';
$edad_60_79='';

$errores = false;
$error_nombre = false;
$error_apellido = false;
$error_edad = false;

if(isset($_POST["enviar"])){
    $bienvenido=false;

    $nombre = (isset($_POST["nombre"]))?$_POST["nombre"]:'';
    if(strlen($nombre)<3){
        $error_nombre = true;
    }

    $apellidos = (isset($_POST["apellidos"]))?$_POST["apellidos"]:'';
    if(strlen($apellidos)<3){
        $error_apellidos = true;
    }

    if(isset($_POST["edad"])){
        /*
        if($_POST["edad"]=="20-39") {
            $edad_20_39='checked';
        }
        if($_POST["edad"]=="40-59") {
            $edad_40_59='checked';
        }
        if($_POST["edad"]=="60-79") {
            $edad_60_79='checked';
        }
        */
        /*
        $edad_20_39=($_POST["edad"]=="20_39")?'checked':'';
        $edad_40_59=($_POST["edad"]=="40_59")?'checked':'';
        $edad_60_79=($_POST["edad"]=="60_79")?'checked':'';
        */
        ${"edad_".$_POST["edad"]}='checked';
    }

    if($error_nombre || $error_apellidos) {
        $errores = true;
    }
}

/*
echo "<br>POST:<br>";
print_r($_POST);


echo "<br>";

echo "GET:<br>";
print_r($_GET);


echo "<br>COOKIES:<br>";
print_r($_COOKIES);

echo "<br>SESSION:<br>";
print_r($_SESSION);

echo "<br>SERVER:<br>";
print_r($_SERVER);
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <?php if($bienvenido) { ?>
        <h1>Bienvenido!!!</h1>
    <?php } ?>
    <div>
        <?php if($errores) { ?>
            <div class="error">
                Los datos introducidos tienen errores
            </div>
        <?php } ?>

        <form action="index.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label <?=($error_nombre)?'class="error"':'';?> for="nombre">Nombre:</label>
                <input <?=($error_nombre)?'class="background-error"':'';?> name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>" />
                <label <?=($error_apellidos)?'class="error"':'';?> for="apellidos">Apellidos:</label>
                <input <?=($error_apellidos)?'class="background-error"':'';?> name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
            </fieldset>

            <fieldset>
                <legend>Edad</legend>
                <label><input type="radio" tabindex="20" name="edad" value="20_39" <?=$edad_20_39?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40_59" <?=$edad_40_59?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60_79" <?=$edad_60_79?>/> 60-79</label>
            </fieldset>

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</body>
</html>
