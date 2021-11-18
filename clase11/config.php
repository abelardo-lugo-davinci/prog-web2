<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = 'mysql:host=localhost;dbname=jdbc';
$user = "root";
$password = "root";

/* Attempt to connect to MySQL database */

try{
    $pdo = new PDO($link, $user, $password);    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

?>
