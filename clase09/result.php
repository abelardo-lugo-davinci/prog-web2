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

        $nombre= $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $documento = $_POST['documento'];

        if ($edad >= 21) {
            echo "<h1> Bienvenido ".$nombre." ".$apellido." a la página</h1>";
            echo '
            <form action="tabla.php" method="POST">

            <div>
                <label for="">Número mínimo:</label>
                <input type="number" name="minimo" id="">
            </div>
        
            <div>
                <label for="">Número maximo:</label>
                <input type="number" name="maximo" id="">
            </div>
        
            <div>
                <label for="">multiplo:</label>
                <input type="number" name="multiplo" id="">
            </div>
        
            <button type="submit">Mostrar</button>
        
            </form>          
            ';
        } elseif($edad >=18) {
            echo "<h1> Bienvenido ".$nombre." ".$apellido." a la página. Tienes acceso limitado</h1>";
        } else {
            echo "<h1>No tienes acceso a la página</h1>";
        }
        
    ?>

    <a href="index.html">Volver a la página de inicio</a>

</body>
</html>