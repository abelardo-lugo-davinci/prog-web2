<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>
<body>

    <h1>Práctica de PHP</h1>

    <?php 

        $persona1 = array("Nombre" => "Nicolás", "Apellido" => "Labasse", "Edad" => 23);
        $persona2 = array("Nombre" => "Kevin", "Apellido" => "Barrios", "Edad" => 24);
        $persona3 = array("Nombre" => "Matías", "Apellido" => "Blanco", "Edad" => 25);
        $persona4 = array("Nombre" => "Lucio", "Apellido" => "Tantignone", "Edad" => 26);
        $persona5 = array("Nombre" => "Diana", "Apellido" => "Garrammone", "Edad" => 27);

        $personas = array($persona1, $persona2, $persona3, $persona4, $persona5);

        function descargarDatos($arregloPersonas) {

            // Función que recibe un arreglo con datos de personas y genera una tabla
            
            for ($i=0; $i < count($arregloPersonas); $i++) { 
                echo("<tr>");
                foreach ($arregloPersonas[$i] as $key => $value) {
                    echo("<td>".$value."</td>");
                }
                echo("</tr>");
            }
            
        }

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
        echo($texto2);

        // Tabla de multiplicar hecha con PHP
        
        $filas = 10;
        $columnas = 5;

        echo "<h2>Tabla de multiplicar</h2>";

        echo("<table>");
        
            echo("<tr>");
            
                for($i = 0; $i < $columnas; $i++) {
                    echo("<th>".( $i + 1)."</th>");
                }

            echo("</tr>");
            
            for($x = 0; $x < $filas; $x++) {
                echo("<tr>");
                for ($y = 0; $y < $columnas; $y++) {
                    echo "<td>",(( $x + 1)*( $y + 1 )),"</td>";
                }
                echo("</tr>");
            }

        echo("</table>");

        echo("<p></p>");
        
        // Ejemplo Alumnos
    /* 
        $nombres = array("Nicolás", "Kevin", "Matías", "Lucio", "Diana");
        $apellidos = array("Labasse", "Barrios", "Blanco", "Tantignone", "Garrammone");
        $edades = array(23, 24, 25, 26, 27);
    */

        echo "<h2>Tabla de Alumnos</h2>";

        echo("<table>");

            echo("<tr>");
                
            foreach ($persona1 as $key => $value) {
                echo("<th>".$key."</th>");
            }

            echo("</tr>");

            descargarDatos($personas);
            descargarDatos($personas);
            descargarDatos($personas);
            descargarDatos($personas);
                
        echo("</table>");

    ?>

</body>
</html>