<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>

</head>
<body>

    <h1>Práctica de PHP</h1>

    <?php 
    
    echo "<h2>Hola Mundo</h2>";
    
    // Este es un comentario

    # Esta es otra forma de comentar

    /*
    Este es un comentario de varias líneas
    Este es un comentario de varias líneas
    Este es un comentario de varias líneas
    */

    $texto1 = "Esta es una cadena de texto";
    $texto2 = "<p>".$texto1."</p>";
    echo "<p>",$texto1,"</p>";
    echo $texto2;

    // Tabla de multiplicar hecha con PHP

    echo "<h2>Tabla de multiplicar</h2>";

    echo "<table style="."width:100%;".">";
    echo "<tr>";
    for($i = 0; $i < 10; $i++) {
        echo "<th>".$i."</th>";
    }
    echo "</tr>";
    for($x = 0; $x < 20; $x++) {
        echo "<tr>";
        for ($y = 0; $y < 10; $y++) {
            echo "<td>",($x*$y),"</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>

</body>
</html>