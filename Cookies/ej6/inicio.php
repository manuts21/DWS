<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibimos los datos del formulario
    $usuario = $_POST['username'];
    $clave = $_POST['password'];

    // Validamos el usuario
    if ($usuario == 'usuario' && $clave == 'clave') {
        // Establecer la variable de sesión y la cookie
        $_SESSION['usuario'] = $usuario;
        setcookie('usuario', $usuario, 0, '/'); // La cookie expirará al cerrar la ventana del navegador

        // Redirigir a la página con menú
        header('Location: index.php');
        exit();
    } else {
        $error = 'Usuario o contraseña incorrectos.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php if (isset($error)) : ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <form action="" method="post">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
