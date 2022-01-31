<?php 
$enviado=false;
$altura=0;

if(isset($_POST['altura'])){
    $enviado=true;
    $altura=$_POST['altura'];
}

if(isset($_GET['altura'])){
    $enviado=true;
    $altura=$_GET['altura'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if ($enviado==true) { ?>
        <meta http-equiv="refresh" content="1; url=index.php?altura=<?=altura?>">
    <?php } ?> 
    <title>Pirámide</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="contenido">
        <?php if($enviado == false) { ?>
            <h1>Introduce la altura de la pirámide</h1>
            <form action="index.php" method="post">
                <input type="number" name="altura" id="">
                <input type="submit" value="Generar">
            </form>
        <?php } else { ?>
            <h1>Pirámide</h1>
            <p>
            <?php 
                for($a=1;$a<=$altura;$a++){
                    for($c=1;$c<=$a;$c++){
                        echo '<span style="color: '. sprintf("#%06X", mt_rand(0, 0xFFFFFF)) .'">*</span>';
                    }
                    echo "<br>";
                }
            ?>
            </p>
        <?php } ?>
    </div>    
</body>
</html>