<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Seleccionado</title>
</head>
<body>
    <h2>Color Seleccionado</h2>

    <?php
    // Mostrar el color de la cookie
    $color = isset($_COOKIE['selectedColor']) ? $_COOKIE['selectedColor'] : 'No hay color seleccionado';
    echo '<p>El color seleccionado es: <span style="background-color:' . $color . ';">' . $color . '</span></p>';
    ?>

    <a href="pag1.php">Volver a la página inicial</a>
</body>
</html>
