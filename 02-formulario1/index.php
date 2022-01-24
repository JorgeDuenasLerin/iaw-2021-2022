<?php

$bienvenido=true;
$nombre="";
$apellidos='';
$edad_20_39='';
$edad_40_59='';
$edad_60_79='';

if(isset($_POST["enviar"])){
    $bienvenido=false;
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];

    if(isset($_POST["edad"])){
        /*if($_POST["edad"]=="20-39") {
            $edad_20_39='checked';
        }*/
        $edad_20_39=($_POST["edad"]=="20-39")?'checked':'';

        if($_POST["edad"]=="40-59") {
            $edad_40_59='checked';
        }
        if($_POST["edad"]=="60-79") {
            $edad_60_79='checked';
        }
    }
}

echo "<br>POST:<br>";
print_r($_POST);

/*
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
</head>
<body>
    <?php if($bienvenido) { ?>
        <h1>Bienvenido!!!</h1>
    <?php } ?>
    <div>
        <form action="index.php" method="post">
            <fieldset>
                <legend>Información Personal</legend>
                <label for="nombre">Nombre:</label>
                <input name="nombre" id="nombre" type="text" tabindex="1" value="<?=$nombre?>" />
                <label for="apellidos">Apellidos:</label>
                <input name="apellidos" id="apellidos" type="text" tabindex="2" value="<?=$apellidos?>"/>
            </fieldset>

            <fieldset>
                <legend>Edad</legend>
                <label><input type="radio" tabindex="20" name="edad" value="20-39" <?=$edad_20_39?>/> 20-39</label>
                <label><input type="radio" tabindex="21" name="edad" value="40-59" <?=$edad_40_59?>/> 40-59</label>
                <label><input type="radio" tabindex="22" name="edad" value="60-79" <?=$edad_60_79?>/> 60-79</label>
            </fieldset>

            <input type="submit" name="enviar" value="Enviar">
        </form>
    </div>
</body>
</html>
