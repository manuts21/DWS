<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_COOKIE['usuario']) || $_COOKIE['usuario'] !== $_SESSION['usuario']) {
    // Si no hay sesión o las cookies no coinciden, redirigir al inicio de sesión
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="menu-container">
        <h2>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h2>
        <nav>
            <ul>
                <li><a href="#">Empresa</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
        <a href="cerrar_sesion.php">Cerrar Sesión</a>
    </div>
</body>
</html>
