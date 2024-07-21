<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Envio de imagenes</title>
</head>
<body>
  <!-- cuando vamoa a enviar archivo debemos cambiar el tipo de encriptacion del formulario
  eso lo hacemos con enctype="multipart/form-data"
  -->
  <form action="server.php" method="post" enctype="multipart/form-data">

    <!-- El nombre con el que se identificaran los valores es a traves del name -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" >

    <label for="image">Imagen:</label>
    <input type="file" name="image" id="image" >

    <button type="submit">Enviar formulario</button>
  </form>
</body>
</html>