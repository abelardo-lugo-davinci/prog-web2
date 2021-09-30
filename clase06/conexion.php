<?php

$link = 'mysql:host=localhost;dbname=comisiones';
$usuario = "root";
$contraseña = "root";

try {

    $dbh = new PDO($link, $usuario, $contraseña);
    
    foreach($dbh->query('SELECT * from estudiantes_programacion_web') as $fila) {
        print_r($fila);
    }
    
    $dbh = null;

    // echo 'Conectado';

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
