<?php

session_start();

echo "Primero<br>";
print_r($_SESSION);

$var = mt_rand(0,100)." ";
$val = mt_rand(0,100)." ";

$_SESSION['hola'] = "Mundo sesión";
$_SESSION[$var] = $val;

echo "Segundo<br>";
print_r($_SESSION);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sesiones</h1>
</body>
</html>