<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "proyectofinal";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el número de documento a eliminar
$documento = $_POST['documento'];

// Consulta para eliminar el registro
$sql = "DELETE FROM datos_personales WHERE documento = '$documento'";

if ($conn->query($sql) === TRUE) {
    echo "Registro eliminado correctamente";
} else {
    echo "Error al eliminar registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
