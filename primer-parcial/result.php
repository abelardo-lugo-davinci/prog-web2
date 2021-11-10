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

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $dni = $_POST['dni'];


        if ($edad >= 18) {
            echo '<h1>Bienvenido '.$nombre.' '.$apellido.'</h1>';
            echo '
                <form action="lista.php" method="post">

                    <div>
                        <label for="">Número Mínimo: </label>
                        <input name="minimo" type="number">
                    </div>

                    <div>
                        <label for="">Número Máximo: </label>
                        <input name="maximo" type="number">
                    </div>

                    <button type="submit">Mostrar Tabla: </button>

                </form>
                ';

        } else {
            echo '<h1>Disculpa, '.$nombre.' '.$apellido.' pero no tienes acceso</h1>';
        }

    ?>

    <a href="index.php">Volver a la página de inicio</a>

</body>
</html>