<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$id = $nombre = $apellido = "";
$id_err = $nombre_err = $apellido_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];

        
    // Validación dni
    $input_dni = trim($_POST["dni"]);
    if(empty($input_dni)){
        $dni_err = "Por Favor ingrese el DNI";     
    } elseif(!ctype_digit($input_dni)){
        $dni_err = "Please enter a positive integer value.";
    } else{
        $dni = $input_dni;
    }

    // Validación nombre
    $input_nombre = trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_err = "Por Favor ingrese un nombre.";
    } elseif(!filter_var($input_nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombre_err = "Please ingrese un nombre valido";
    } else{
        $nombre = $input_nombre;
    }   
    
    // Validación apellido
    $input_apellido = trim($_POST["apellido"]);
    if(empty($input_apellido)){
        $apellido_err = "Por Favor ingrese un apellido.";
    } elseif(!filter_var($input_apellido, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $apellido_err = "Please ingrese un nombre valido";
    } else{
        $apellido = $input_apellido;
    }
    
    // Check input errors before inserting in database
    if(empty($nombre_err) && empty($apellido_err) && empty($dni_err)){
        // Prepare an update statement
        $sql = "UPDATE estudiantes SET nombre=:nombre, apellido=:apellido, dni=:dni WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":nombre", $param_nombre);
            $stmt->bindParam(":apellido", $param_apellido);
            $stmt->bindParam(":dni", $param_dni);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_nombre = $nombre;
            $param_apellido = $apellido;
            $param_dni = $dni;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Lo sentimos! Algo anduvo mal. Por Favor intenta nuevamente.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM estudiantes WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $nombre = $row["nombre"];
                    $apellido = $row["apellido"];
                    $dni = $row["dni"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
        
        // Close connection
        unset($pdo);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the employee record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control <?php echo (!empty($nombre_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $nombre; ?>">
                            <span class="invalid-feedback"><?php echo $nombre_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Apellido</label>
                            <input type="text" name="apellido" class="form-control <?php echo (!empty($apellid_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $apellido; ?>">
                            <span class="invalid-feedback"><?php echo $apellido_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>DNI</label>
                            <input type="text" name="dni" class="form-control <?php echo (!empty($dni_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $dni; ?>">
                            <span class="invalid-feedback"><?php echo $dni_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>