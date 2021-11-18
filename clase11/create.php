<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$dni = $nombre = $apellido = "";
$dni_err = $nombre_err = $apellido_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validación dni
    $input_dni = trim($_POST["dni"]);
    if(empty($input_dni)){
        $dni_err = "Por Favor ingrese DNI.";
    } elseif(!ctype_digit($input_dni)){
        $dni_err = "Por Favor ingrese un DNI válido.";
    } else{
        $dni = $input_dni;
    }
    
    // Validación nombre
    $input_nombre = trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_err = "Por Favor ingrese un nombre.";     
    } else{
        $nombre = $input_nombre;
    }
    
    // Validación apellido
    $input_apellido = trim($_POST["apellido"]);
    if(empty($input_apellido)){
        $apellido_err = "Por Favor ingrese un nombre.";     
    } else{
        $apellido = $input_apellido;
    }
    
    // Check input errors before inserting in database
    if(empty($dni_err) && empty($nombre_err) && empty($apellido_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO estudiantes (dni, nombre, apellido) VALUES (:dni, :nombre, :apellido)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":dni", $param_dni);
            $stmt->bindParam(":nombre", $param_nombre);
            $stmt->bindParam(":apellido", $param_apellido);
            
            // Set parameters
            $param_dni = $dni;
            $param_nombre = $nombre;
            $param_apellido = $apellido;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>DNI</label>
                            <input type="text" name="dni" class="form-control <?php echo (!empty($dni_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dni; ?>">
                            <span class="invalid-feedback"><?php echo $dni_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control <?php echo (!empty($nombre_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nombre; ?>">
                            <span class="invalid-feedback"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control <?php echo (!empty($apellido_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $apellido; ?>">
                            <span class="invalid-feedback"><?php echo $apellido_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>