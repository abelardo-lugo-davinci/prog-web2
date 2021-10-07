
<?php

include_once 'conexion.php';

$query = 'SELECT * FROM estudiantes';

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

    <?php

        foreach($result as $dato){
            echo $dato['id']," ",$dato['documento']," ",$dato['nombre']," ",$dato['apellido'],"<br>";
        }

    ?>

</body>
</html>