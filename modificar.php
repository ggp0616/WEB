<?php
    
    include 'conexion.php';
    
    // Verifica si se ha enviado el formulario para modificar el registro
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibe los datos del formulario
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $charla = $_POST["charla"];
        $email = $_POST["email"];

        // Construye la consulta SQL para actualizar el registro
        $sql = "UPDATE invitados SET nombre='$nombre', apellido='$apellido', charla='$charla', email='$email' WHERE id='$id'";

        // Ejecuta la consulta y verifica si se realizó correctamente
        if ($conn->query($sql) === TRUE) {
            echo "Registro modificado correctamente";
        } else {
            echo "Error al modificar el registro: " . $conn->error;
        }
    }
    $conn->close();
    // Redireccionar a listado.php
   header("Location: listado.php");
?>