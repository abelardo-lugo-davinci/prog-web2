<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Tabla resultante</h1>

    <?php

        $min = $_POST['minimo'];
        $max = $_POST['maximo'];
        $multiplo = $_POST['multiplo'];

        echo "<ul>";
        for ($i = $min; $i <= $max; $i++) {
            if ($i%$multiplo == 0) {
                echo "<li>".$i."</li>";
            } 
        }
        echo "</ul>"

    ?>

<a href="index.html">Volver a la página de inicio</a>

</body>
</html>