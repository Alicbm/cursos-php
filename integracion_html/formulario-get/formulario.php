<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="server.php" method="get">

    <!-- El nombre con el que se identificaran los valores es a traves del name -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" >

    <label for="edad">Edad:</label>
    <input type="text" name="edad" id="edad" >

    <button type="submit">Enviar formulario</button>
  </form>
</body>
</html>