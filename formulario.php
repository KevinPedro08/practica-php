<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contacto</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
  <link rel="stylesheet" href="estilo.css" />
</head>

<body>
  <div class="nav">
    <a href="index.html">Index</a>
    <a href="formulario.php">Formulario</a>
  </div>
  <form action="store.php" method="POST" id="formulario">
    <fieldset>
      <legend>Nombre:</legend>
      <label for="nombre">Proporciona tu nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Ingresa Tu Nombre" required />
    </fieldset>
    <fieldset>
      <legend>Correo:</legend>
      <label for="correo">Proporciona Tu Correo:</label>
      <input type="mail" name="correo" id="correo" placeholder="Ingresa Tu Correo" required />
    </fieldset>
    <fieldset>
      <legend>Genero:</legend>
      <label for="genero">Hombre</label>
      <input type="radio" name="genero" id="genero" placeholder="Hombre" value="Hombre" required />
      <label for="genero">Mujer</label>
      <input type="radio" name="genero" id="genero" placeholder="Mujer" value="Mujer" required />
      <label for="genero">Otro</label>
      <input type="radio" name="genero" id="genero" placeholder="Otro" value="Otro" required />
    </fieldset>
    <fieldset>
      <legend>Contraseña:</legend>
      <label for="contraseña">Ingresa Tu Contraseña:</label>
      <input type="password" id="contraseña" name="contraseña" placeholder="Ingresa Una Contraseña" required />
    </fieldset>
    <fieldset>
      <legend>Comentarios:</legend>
      <label for="comentarios"></label>
      <textarea name="comentarios" id="comentarios" cols="50" rows="5"></textarea>
    </fieldset>
    <fieldset>
      <legend>Ciudad:</legend>
      <label for="ciudad">Selecciona Tu Ciudad:</label>
      <select name="ciudad" id="ciudad">
        <option value="guadalajara">Guadalajara</option>
        <option value="zapopan">Zapopan</option>
        <option value="tonalá">Tonalá</option>
        <option value="otro">Otro</option>
      </select>
    </fieldset>
    <fieldset>
      <legend>Me interesa contratarte:</legend>
      <label for="contratacion">Estoy interesado en tu contratacion</label>
      <input type="checkbox" name="contratacion" id="contratacion" />
    </fieldset>
    <button type="submit" class="btn btn-success">Success</button>
  </form>

  <?php
  echo "<h1>Usuarios de la encuesta</h1>";
  require('conexion.php');
  $sql = "SELECT * FROM respuestas";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  echo "<ul>";
  foreach ($stmt->fetchAll() as $row) {
    echo "<li>" . $row['id'] . " - " . $row['Nombre'] . " " . $row['Correo'] . " " . $row['Genero'] . "</li>";
  }
  echo "</ul>";
  ?>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>