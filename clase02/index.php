<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Práctica de PHP</h1>

    <?php 
    
    echo "<h3>Hola Mundo</h3>";
    
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

    echo "<table><tbody>";
    for($x = 0; $x < 30; $x++) {
        echo "<tr>";
        for ($y = 0; $y < 10; $y++) {
            echo "<td>",($x*$y),"</td>";
        }
        echo "</tr>";
        echo "</th>";
    }
    echo "</tbody></table>"
    ?>

</body>
</html>