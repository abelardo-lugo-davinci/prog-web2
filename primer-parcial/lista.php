<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    
    <h1>Hola, esta es la lista de números que pediste</h1>
    
    <?php

    function imprimirTabla($min, $max){
                
        // Función que imprime la tabla de multipicar

        echo "<table>";

        echo "<tr>";
        for($i = 0; $i <= 10; $i++) {
            echo "<th>".$i."</th>";
        }
        echo "</tr>";

        for($x = $min; $x <= $max; $x++) {
            echo "<tr>";
            for ($y = 0; $y <= 10; $y++) {
                echo "<td>",($x*$y),"</td>";
            }
            echo "</tr>";
        }

        echo "</table>";

    }

        $minimo = $_POST['minimo'];
        $maximo = $_POST['maximo'];

        imprimirTabla($minimo, $maximo);

    ?>

    <a href="index.php">Volver a la página de inicio</a>

</body>
</html>