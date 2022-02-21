<?php
try {
    $conexion_bd = new PDO(
                    'mysql:host=localhost;dbname=ciclismo',
                    'sergio',
                    '1234'
                );
    
    $datos = $conexion_bd->query('SELECT * from Ciclistas');

    foreach($datos as $fila) {
        print_r($fila);
    }
    $conexion_bd = null;

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>