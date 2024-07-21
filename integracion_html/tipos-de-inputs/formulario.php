<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de inputs</title>
</head>
<body>
  <form action="server.php" method="post" enctype="multipart/form-data">
    <!-- Input simple -->
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">

    <!-- Input de tipo arreglo -->
    <label>Personas:</label>
    <input type="text" name="personas[]" />
    <input type="text" name="personas[]" />
    <input type="text" name="personas[]" />

    <!-- inputs de arreglos asociativos -->
    <label>Nombre:</label>
    <input type="text" name="personas[nombre]" />
    <label>Email:</label>
    <input type="email" name="personas[email]" />
    <label>Edad:</label>
    <input type="number" name="personas[edad]" /> 

    <!-- checkbox -->
     <!-- el value es lo que llega el servidor, pro defecto es on, si fue clicado -->
    <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3">

    <!-- radios -->
    <!-- para seleccionar uno o otro -->
    <label for="colombia">colombia: </label>
    <input type="radio" name="pais" value="colombia" id="colombia">
     
    <label for="mexico">mexico</label>
    <input type="radio" name="pais" value="mexico" id="mexico">
     
    <label for="peru">peru:</label>
    <input type="radio" name="pais" value="peru" id="peru">

    <!-- Multiples archivos -->
     <!-- el atributo multiple sirve para cargar varios archivos -->
    <label for="galeria">Carga tus imágenes:</label>
    <input type="file" multiple name="galeria[]" id="galeria">

    <button type="submit">Enviar formulario</button>

  </form>
</body>
</html>