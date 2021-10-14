
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

    <form action="result.php" method="POST">

        <div>
            <label for="">Nombre:</label>
            <input type="text" name="nombre" id="">
        </div>
        
        <div>
            <label for="">Apellido:</label>
            <input type="text" name="apellido" id="">
        </div>

        <div>
            <label for="">Documento:</label>
            <input type="text" name="documento" id="">
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
        
    </form>


</body>
</html>