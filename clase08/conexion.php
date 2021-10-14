<?php

$link = 'mysql:host=localhost;dbname=jdbc';
$user = "root";
$password = "root";

try {

    $conn = new PDO($link, $user, $password);
/*     
    foreach($conn->query('SELECT * FROM estudiante') as $fila) {
        print_r($fila);
    }
 */
    // echo 'Conectado';

} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>
