<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectofinal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
$correo = $_POST['correo'];

$sql = "INSERT INTO datos_personales (documento, nombre, apellido, direccion, telefono, correo) 
        VALUES ('$documento', '$nombre', '$apellido', '$direccion', '$telefono', '$correo')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro insertado correctamente";
} else {
    echo "Error al insertar nuevo registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
