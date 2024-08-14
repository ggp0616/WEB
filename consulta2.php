<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta a Base de Datos</title>
    <!-- Enlace al CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Jornadas</h2>
        <form action="" method="post" class="form-inline mb-3">
            <div class="form-group mr-2">
                <label for="donde" class="mr-2">Buscar por:</label>
                <select name="donde" id="donde" class="form-control">
                    <option value="curso">Curso</option>
                    <option value="fecha">Fecha</option>
                    <option value="año">Año</option>
                    <option value="hora">Hora</option>
                    <option value="ubicacion">Ubicación</option>
                    <option value="tema">Tema</option>
                </select>
            </div>
            <div class="form-group mr-2" id="criterioInput">
                <label for="que" class="sr-only">Criterio</label>
                <input type="text" name="que" id="que" placeholder="criterio a buscar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <?php
            include "conexion.php";

            // Obtener todas las opciones desde la base de datos
            $opcionesCurso = [];
            $opcionesAño = [];
            $opcionesTema = [];
            $opcionesUbicacion = [];

            $sql = "SELECT DISTINCT curso, año, tema, ubicacion FROM jornadas";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if (!in_array($row['curso'], $opcionesCurso)) {
                        $opcionesCurso[] = $row['curso'];
                    }
                    if (!in_array($row['año'], $opcionesAño)) {
                        $opcionesAño[] = $row['año'];
                    }
                    if (!in_array($row['tema'], $opcionesTema)) {
                        $opcionesTema[] = $row['tema'];
                    }
                    if (!in_array($row['ubicacion'], $opcionesUbicacion)) {
                        $opcionesUbicacion[] = $row['ubicacion'];
                    }
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $campo = $_POST['donde'];
                $criterio = $_POST['que'];

                if (!empty($campo) && !empty($criterio)) {
                    // Usar declaraciones preparadas
                    $stmt = $conn->prepare("SELECT idcharla, curso, fecha, año, hora, ubicacion, tema FROM jornadas WHERE $campo LIKE ?");
                    $criterio = "%" . $criterio . "%";
                    $stmt->bind_param("s", $criterio);

                    if ($stmt->execute()) {
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            echo "<table class='table table-striped'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Curso</th>
                                            <th>Fecha</th>
                                            <th>Año</th>
                                            <th>Hora</th>
                                            <th>Ubicación</th>
                                            <th>Tema</th>
                                        </tr>
                                    </thead>
                                    <tbody>";

                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                        <td>" . htmlspecialchars($row['idcharla']) . "</td>
                                        <td>" . htmlspecialchars($row['curso']) . "</td>
                                        <td>" . htmlspecialchars($row['fecha']) . "</td>
                                        <td>" . htmlspecialchars($row['año']) . "</td>
                                        <td>" . htmlspecialchars($row['hora']) . "</td>
                                        <td>" . htmlspecialchars($row['ubicacion']) . "</td>
                                        <td>" . htmlspecialchars($row['tema']) . "</td>
                                      </tr>";
                            }

                            echo "</tbody>
                                  </table>";
                        } else {
                            echo "<div class='alert alert-info'>No se encontraron resultados.</div>";
                        }

                        $stmt->close();
                    } else {
                        echo "<div class='alert alert-danger'>Error en la consulta SQL: " . $stmt->error . "</div>";
                    }
                } else {
                    echo "<div class='alert alert-warning'>Por favor, complete todos los campos.</div>";
                }
            }

            $conn->close();
        ?>
    </div>

    <!-- Enlace a los scripts de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('donde').addEventListener('change', function() {
            var campoSeleccionado = this.value;
            var opciones = '';
            if (campoSeleccionado === 'curso') {
                opciones = <?php echo json_encode($opcionesCurso); ?>;
            } else if (campoSeleccionado === 'año') {
                opciones = <?php echo json_encode($opcionesAño); ?>;
            } else if (campoSeleccionado === 'tema') {
                opciones = <?php echo json_encode($opcionesTema); ?>;
            } else if (campoSeleccionado === 'ubicacion') {
                opciones = <?php echo json_encode($opcionesUbicacion); ?>;
            }
            if (opciones.length > 0) {
                var opcionesHTML = opciones.map(function(opcion) {
                    return '<option value="' + opcion + '">' + opcion + '</option>';
                }).join('');
                document.getElementById('criterioInput').innerHTML = `<label for="que" class="sr-only">Criterio</label>
                    <select name="que" id="que" class="form-control">
                        <option value="">Seleccione una opción</option>` + opcionesHTML + `</select>`;
            } else {
                document.getElementById('criterioInput').innerHTML = `<label for="que" class="sr-only">Criterio</label>
                    <input type="text" name="que" id="que" placeholder="criterio a buscar" class="form-control">`;
            }
        });
    </script>
</body>
</html>


