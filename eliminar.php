<?php
    include 'conexion.php';
    // Verificar si se envió el ID del registro a eliminar
if(isset($_POST['id'])) {
    // Obtener el ID del registro a eliminar
    $id = $_POST['id'];

    // Preparar y ejecutar la consulta de eliminación
    $sql = "DELETE FROM invitados WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado correctamente";
    } else {
        echo "Error al eliminar registro: " . $conn->error;
    }
} else {
    echo "Error: ID del registro no recibido.";
} 
    $conn->close();
    // Redireccionar a listado.php
    header("Location: listado.php");
?>