<?php

include_once 'conexion.php';

$query = 'SELECT * FROM estudiante';

$stmt = $conn->prepare($query);
$stmt->execute();

$result = $stmt->fetchAll();

// var_dump($resultado);

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
    
    <h1>Bienvenido a la página de resultado</h1>

    <?php

    $nombre = $_POST['nombre'];
    echo "<p>".$nombre."</p>";

    $apellido = $_POST['apellido'];
    echo "<p>".$apellido."</p>";

    $documento = $_POST['documento'];
    echo "<p>",$documento,"</p>";

    $queryInsertInto = 'INSERT INTO estudiante (dni, nombre, apellido) VALUES ('.$documento.',"'.$nombre.'","'.$apellido.'")';
    echo $queryInsertInto;
    
    $stmt = $conn->prepare($queryInsertInto);
    $stmt->execute();

    ?>

</body>
</html>