<?php
function usuarioHaAceptadoCookies() {
    return isset($_COOKIE['cookies_aceptadas']) && $_COOKIE['cookies_aceptadas'] === 'aceptado';
}

// Check if the form is submitted
if (isset($_POST['aceptar_cookies'])) {
    // If the user clicks the "Aceptar" button, set the cookie
    setcookie('cookies_aceptadas', 'aceptado', strtotime('Fri, 31 Dec 9999 23:59:59 GMT'), '/');
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Página</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
// Check if the user has already accepted cookies and display the confirmation message
if (usuarioHaAceptadoCookies()) {
    echo '<div class="confirmacion-cookies">¡Gracias por aceptar las cookies!</div>';
} else {
    ?>
    <div id="aviso-cookies" class="oled-style">
        <p>Bienvenido. Al hacer clic en "Aceptar", estás de acuerdo con nuestra política de cookies.</p>
        <form method="post">
            <button type="submit" name="aceptar_cookies">Aceptar</button>
        </form>
        <a href="enlace_politica_cookies.php" target="_blank">Más información sobre la ley de cookies</a>
    </div>
    <?php
}
?>

</body>
</html>
