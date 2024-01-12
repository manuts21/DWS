<?php
session_start();

if (isset($_POST['enviar'])) {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Verificar las credenciales (simulado, puedes cambiar esto según tus necesidades)
    if ($usuario === 'admin' && $clave === 'admin') {
        $_SESSION['usuario'] = $usuario;
        header('Location: ejercicio11b.php');
        exit();
    } else {
        $mensaje = 'Acceso denegado. Verifica tu usuario y contraseña.';
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php if (isset($mensaje)) : ?>
        <p><?php echo $mensaje; ?></p>
    <?php elseif (isset($_SESSION['usuario']) && $_SESSION['usuario'] === 'admin') : ?>
        <h2>Bienvenido al Panel de Administración</h2>
        <p>Información del usuario: <?php echo $_SESSION['usuario']; ?></p>
        <a href="cerrar_sesion.php">Cerrar Sesión</a>
    <?php else : ?>
        <p>No tienes acceso al panel de administración.</p>
    <?php endif; ?>

</body>
</html>
