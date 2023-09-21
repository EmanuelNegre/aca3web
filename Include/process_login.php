<?php
$usuario_correcto = 'admin';
$contrasena_correcta = 'admin';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
        // Inicio de sesión exitoso, redireccionar al panel de administrador
        header('Location: admin_dashboard.php');
        exit();
    } else {
        echo 'Usuario o contraseña incorrectos. <a href="admin_login.html">Volver</a>';
    }
}
?>
