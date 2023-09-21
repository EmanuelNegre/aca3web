<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/datospersonales.css"> 
    <link rel="stylesheet" href="../CSS/styles.css">
    
    <title>Datos Personales</title>
</head>

<body>
<header class="header">
        <header class="header">
            <div class="logo">
                <img src="../Imagenes/ideogram__2_-removebg-preview (1).png" alt="Logo de la empresa" class="logo-img">
                </a>
            
          <div class="container">
           
      </header> 
      
      <div class="menu">
        <nav id="menu-items">
            <ul>
            <li><a href="../Include/admin_dashboard.php" class="menu-link">REGRESAR AL PANEL ADMIN</a></li>
            <li><a href="../Paginas/Ingresar_new_regis.html" class="menu-link">INGRESAR NUEVOS REGISTROS</a></li>
            <li><a href="../Include/mostrardatos.php" class="menu-link">MOSTRAR DATOS </a></li>
            <li><a href="../Paginas/eliminar_registros.html" class="menu-link">ELIMINAR DATOS</a></li>
                
            </ul>
        </nav>
     </div>
    
    </header>
<?php
$servername = "localhost";
$username = "root"; // 
$password = ""; 
$dbname = "proyectofinal";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT * FROM datos_personales";
$result = $conn->query($sql);

// Mostrar los datos
if ($result->num_rows > 0) {
    echo "<h1>Datos Personales</h1>";
    echo "<table border='1'>";
    echo "<tr><th>Documento</th><th>Nombre</th><th>Apellido</th><th>Dirección</th><th>Teléfono</th><th>Correo</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["documento"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["apellido"] . "</td><td>" . $row["direccion"] . "</td><td>" . $row["telefono"] . "</td><td>" . $row["correo"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron datos.";
}

// Cerrar la conexión
$conn->close();
?>

<footer class="footer">
        <div class="container_footer">
            <p>TierraltaTech Colombia 2023 Copyright © Todos los derechos reservados - Diseño: Emanuel Negrete Lopez</p>
            
        </div>
       
     </footer>

     <script src="../Js/scripactual.js"></script>

</body>
</html>

