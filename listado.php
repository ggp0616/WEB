<!DOCTYPE html>
<html>
<head>
    <title>Listado de Invitados</title>
</head>
<body>

<?php
    include 'conexion.php';
    
    // Consulta para obtener el listado de alumnos
    $sql_select = "SELECT id, nombre, apellido, charla, email FROM invitados";
    $result = $conn->query($sql_select);

    if($result->num_rows > 0) {
        // Mostrar los resultados en una tabla
        echo "<h2>Listado de Invitados</h2>";
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Charla</th><th>Email</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['apellido'] . "</td>";
            echo "<td>" . $row['charla'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>
            <form action='eliminar.php' onsubmit='return eliminarRegistro();' method='post'>
                <input type='hidden' name='tabla' value='invitados'>
                <input type='hidden' name='id' value = ". $row['id'] .">
                <button type='submit'>Eliminar</button>
            </form>
            </td>";
            echo "<td>
            <form action='premodificar.php' method='post'>
                <input type='hidden' name='tabla' value='invitados'>
                <input type='hidden' name='id' value = ". $row['id'] .">
                <input type='hidden' name='nombre' value = ". $row['nombre'] .">
                <input type='hidden' name='apellido' value = ". $row['apellido'] .">
                <input type='hidden' name='charla' value = ". $row['charla'] .">
                <input type='hidden' name='email' value = ". $row['email'] .">
                <button type='submit'>Modificar</button>
            </form>
            </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }

     $conn->close();
?>

<script>
function eliminarRegistro() {
    // Realizar aqui la logica de validacion
    var confirmacion = confirm("¿Estás seguro de que deseas eliminar este registro?");
    if (confirmacion) {
        return true; // Redireccionar si la confirmacion es positiva
    } else {
        return false;// No hacer nada si la confirmacion es negativa
    }
}
</script>

</body>
</html>



