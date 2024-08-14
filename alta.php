<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de invitados</title>
  <!-- Enlace al CSS de Bootstrap -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container fondo-lila"> <!-- Aplica la clase fondo-lila aquí -->
    <h1>Invitados</h1>

    <?php
    include 'conexion.php';

    // Consulta para obtener los temas de charlas
    $sql = "SELECT idcharla, tema FROM jornadas";
    $result = $conn->query($sql);

    if ($result === false) {
        die("Error en la consulta SQL: " . $conn->error);
    }

    // Procesar los datos del formulario cuando se envíe
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $Nombre = $_POST['Nombre']; 
        $Apellido = $_POST['Apellido'];
        $Charla = $_POST['Charla'];
        $Email = $_POST['Email'];

        // Preparar y ejecutar la consulta de inserción
        $sql_insert = "INSERT INTO invitados (Apellido, Nombre, Charla, Email) VALUES ('$Apellido', '$Nombre', '$Charla', '$Email')";

        if ($conn->query($sql_insert) === TRUE) {
            echo "Registro insertado correctamente<br>";
        } else {
            echo "Error al insertar registro: " . $conn->error . "<br>";
        }
    }

    $conn->close();
    ?>

    <form name="myForm" method="post" action="" onsubmit="return validateForm()" class="form-inline">
        <div class="form-group mb-2">
            <label for="nombre" class="mr-sm-2">Nombre: </label>
            <input type="text" class="form-control" id="nombre" name="Nombre">
        </div>
        <div class="form-group mb-2 mx-sm-3">
            <label for="apellido" class="mr-sm-2">Apellido: </label>
            <input type="text" class="form-control" id="apellido" name="Apellido">
        </div>
        <div class="form-group mb-2 mx-sm-3">
            <label for="charla" class="mr-sm-2">¿A qué charla va? </label>
            <select class="form-control" id="charla" name="Charla">
                <option value="">Seleccione una charla</option>
                <?php
                // Generar opciones dinámicamente desde la base de datos
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="' . htmlspecialchars($row['idcharla']) . '">' . htmlspecialchars($row['tema']) . '</option>';
                    }
                } else {
                    echo '<option value="">No hay charlas disponibles</option>';
                }
                ?>
            </select>
        </div>
        <div class="form-group mb-2 mx-sm-3">
            <label for="email" class="mr-sm-2">Email: </label>
            <input type="text" class="form-control" id="email" name="Email">
        </div>
        <button type="submit" class="btn btn-primary mb-2 mx-sm-3">Enviar</button>
    </form>
  </div>

  <!-- Scripts de Bootstrap y cualquier otro que necesites -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function validateForm() {
      let apellido = document.forms["myForm"]["Apellido"].value;
      let nombre = document.forms["myForm"]["Nombre"].value;
      let charla = document.forms["myForm"]["Charla"].value;
      let email = document.forms["myForm"]["Email"].value;
      
      if (apellido == "" || nombre == "" || charla == "" || email == "") {
        alert("Por favor, complete todos los campos.");
        return false;
      }
    }
  </script>
</body>
</html>




