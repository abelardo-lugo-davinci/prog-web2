<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Bienvenido a la página</h1>

    <form action="result.php" method="post">
        
        <div>
            <label for="">Nombre: </label>
            <input name="nombre" type="text">
        </div>

        <div>
            <label for="">Apellido: </label>
            <input name="apellido" type="text">
        </div>

        <div>
            <label for="">Edad: </label>
            <input name="edad" type="number">
        </div>

        <div>
            <label for="">DNI: </label>
            <input name="dni" type="number">
        </div>

        <div>
            <button type="submit">Enviar:</button>
        </div>

    </form>

</body>
</html>