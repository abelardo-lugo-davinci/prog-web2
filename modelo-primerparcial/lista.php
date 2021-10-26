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

        $minimo = $_POST['minimo'];
        $maximo = $_POST['maximo'];
        $paso = $_POST['paso'];

        echo '<ul>';

        for ($i=$minimo; $i <= $maximo; $i += $paso) { 
            echo '
            <li>'.$i.'</li>
            ';
        }

        echo '</ul>'

    ?>

    <a href="index.php">Volver a la página de inicio</a>

</body>
</html>