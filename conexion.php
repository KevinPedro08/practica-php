<?php
$servername = "localhost: 33061";
$username = "root";
$password = "";
$database = "formulario";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully"*/;
} catch (PDOException $e) {
    echo "Conexión fallida, intente más tarde: " . $e->getMessage();
}
?>