<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Registro</title>
</head>
<body>
    <h2>Modificar Registro</h2>
<?php
    include 'conexion.php';
    $id = $_POST["id"];
    echo "Este es el valor recuperado " . $id ;

    
    $sql_select = "SELECT * FROM invitados where id=$id";
   
    $result = $conn->query($sql_select);

    if($result->num_rows > 0) {
        // Mostrar los resultados en una tabla

        while($row = $result->fetch_assoc()) {
           ?>

        <form action="modificar.php" method="post">
            ID del Invitado a Modificar: <input type="text" value ="<?php echo $id ?>" name="id" readonly="true"><br><br>
            Nuevo Nombre: <input type="text" value ="<?php echo $row['nombre'] ?>" name="nombre"><br><br>
            Nuevo Apellido: <input type="text"  value ="<?php echo $row['apellido'] ?>" name="apellido"><br><br>
            Nueva Charla: <input type="text" value ="<?php echo $row['charla'] ?>" name="charla" ><br><br>
            Nueva Email: <input type="text" value ="<?php echo $row['email'] ?>" name="email" ><br><br>
            <input type="submit" value="Modificar Registro">
        </form>
            
            <?php
        }
        echo "</table>";
    } else {
        echo "No se encontraron registros.";
    }

    $conn->close();
?>
   
</body>
</html>
