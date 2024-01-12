<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Bienvenido</h1>

    <?php
    // Verificar si la cookie está presente
    if (isset($_COOKIE['visitor_name'])) {
        $visitorName = $_COOKIE['visitor_name'];
        echo "<p>¡Bienvenido, $visitorName!</p>";
    } else {
        echo "<p>Por favor, introduce tu nombre:</p>";
    ?>
    <form action="imprimir.php" method="post">
        <input type="text" name="visitor_name" required>
        <button type="submit">Enviar</button>
    </form>
    <?php } ?>
</body>
</html>
