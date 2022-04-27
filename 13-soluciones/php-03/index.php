<?php

$texto = "";
$veces = 1;

print_r($_POST);

if(isset($_POST['enviado'])) {
    if(isset($_POST['texto'])){
        $texto = $_POST['texto'];
    }
    if(isset($_POST['veces'])) {
        $veces = $_POST['veces'];
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
</head>
<body>
    <form action="" method="post">
        Text: <input type="text" name="texto" value="<?=$texto?>" placeholder="¡Pon aquí tu frase!"><br>
        Veces: <input type="number" name="veces" value="<?=$veces?>"><br>
        <input type="submit" name="enviado" value="Enviar"><br>
        <button type="submit" name="enviado" value="Enviar">Enviar</button>
    </form>
    <div>
        <?php for($i=0;$i<$veces;$i++) {
            $r_bg = rand(0,256);
            $g_bg = rand(0,256);
            $b_bg = rand(0,256);
            $r_fg = rand(0,256);
            $g_fg = rand(0,256);
            $b_fg = rand(0,256);
            ?>
            <span style="background-color: rgb(<?=$r_bg?>,<?=$g_bg?>,<?=$b_bg?>); color: rgb(<?=$r_fg?>,<?=$g_fg?>,<?=$b_fg?>)"><?=$texto?></span>
        <?php } ?>
    </div>
</body>
</html>