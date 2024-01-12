<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Color</title>
</head>
<body>
    <h2>Selector de Color</h2>

    <form action="pag2.php" method="post">
        <label for="colorSelect">Selecciona un color:</label>
        <select id="colorSelect" name="color">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="green">Verde</option>
        </select>
        <br>
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedColor = $_POST['color'];
        setcookie('selectedColor', $selectedColor, 0, '/');
    }
    $currentColor = isset($_COOKIE['selectedColor']) ? $_COOKIE['selectedColor'] : 'No hay color seleccionado';
    echo '<p>Color actual de fondo: <span style="background-color:' . $currentColor . ';">' . $currentColor . '</span></p>';
    ?>

    <a href="pag2.php" target="_blank">Ver color en otra página</a>

    <form action="eliminar_cookie.php" method="post">
        <button type="submit">Eliminar Cookie</button>
    </form>
</body>
</html>
