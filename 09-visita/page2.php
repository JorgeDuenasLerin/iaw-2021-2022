<?php
include("visit_counter.php");
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
    <?php if($nvisita == 1) { ?>
        <h1>Bienvenido!!</h1>
    <?php } else { ?>
        <h1>Es tu <?=$nvisita?> visita!!</h1>
    <?php } ?>
    <h1>Mundo</h1><br>
    <?php include("menu.php"); ?>
</body>
</html>