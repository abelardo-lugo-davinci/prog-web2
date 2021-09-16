<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Estamos en la página result</h1>

    <?php 

        // $_POST[]
        $nombre = $_POST['user'];

        echo("<h1>".$nombre."</h1>");

        foreach ($_POST as $key => $value) {
            echo($key.": ".$value."<br>");
        }

    ?>

</body>
</html>