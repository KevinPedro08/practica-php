<?php
echo "<h1>Formulario Con PHP</h1>";
if (!empty($_POST['nombre']) && !empty($_POST['contraseña'])) {

    require('conexion.php');

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $genero = $_POST['genero'];
    $contraseña = $_POST['contraseña'];
    $comentario = $_POST['comentarios'];
    $ciudad = $_POST['ciudad'];
    if (isset($_POST['contratacion'])) {
        $contratacion = 1;
    } else {
        $contratacion = 0;
    }

    $sql = "INSERT INTO respuestas (Nombre, Correo, Genero,
    Contrasena, Comentarios, Ciudad, Interesado) VALUES (
      '$nombre', '$correo', '$genero',
      '$contraseña', '$comentario','$ciudad',
      '$contratacion')";

    $conn->exec($sql);
    header("Location: formulario.php");

    echo "<h2>Gracias por sus respuestas :D</h2>";
    echo "<h2>Contesta el formulario a continuacion</h2>";
} else {
    echo "<h2>Contesta el formulario a continuacion: </h2>";

}
?>