<?php

$link = 'mysql:host=localhost;dbname=jdbc-practica';
$user = "root";
$password = "root";

try {

    $conn = new PDO($link, $user, $password);
/*     
    foreach($conn->query('SELECT * FROM estudiantes') as $fila) {
        print_r($fila);
    }
 */
    // echo 'Conectado';

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
