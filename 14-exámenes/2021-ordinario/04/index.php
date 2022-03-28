<?php 

print_r($_GET);
$bienvenido=true;
$buscar = "";

if(
    isset($_GET["buscar"]) &&
    $_GET["buscar"] != ""
) {
    $bienvenido=false;
    $buscar = $_GET["buscar"];

    include('acceso_datos.php');

    //SELECT with WHERE one value
    $select = $conexion_bd->prepare("SELECT * FROM Respuesta WHERE contenido LIKE :parametro_consulta");
    $select->execute(array(':parametro_consulta' => "%" .$buscar. "%"));


    /*
    while($row = $select->fetch()){
        echo "<br>";
        print_r($row);
        echo "<br>";
    }*/



    //$row = $select->fetchAll(PDO::FETCH_ASSOC);
    $row = $select->fetchAll(PDO::FETCH_ASSOC);
    


    //print_r($row);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=div, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="index.php" methd="get">
            <input type="text" name="buscar" id="" placeholder="Buscar..." value="<?=$buscar?>">
            <input type="submit" value="Buscar!">
        </form>
    </div>
    <div>
        <?php if($bienvenido == true) { ?>
            <h1>Bienvenido a Goolge2</h1>
        <?php } else { ?>
        <table>
            <thead>
            <tr>
                <!--- id_tema, titulo, nombre, contenido --->
                <th>Id</th>
                <th>Id Tema</th>
                <th>Título</th>
                <th>Nombre</th>
                <th>Contenido</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($row as $r){ ?>
                <tr>
                    <td><?= $r["id"] ?></td>
                    <td><?= $r["id_tema"] ?></td>
                    <td><?= $r["titulo"] ?></td>
                    <td><?= $r["nombre"] ?></td>
                    <td><?= $r["contenido"] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php } ?>
    </div>
</body>
</html>