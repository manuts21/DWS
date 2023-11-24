<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1b</title>
</head>
<body>
    <h2>Resultado de la Multiplicación</h2>
    <?php
        // Recuperar los valores del formulario
        $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0;
        $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0;

        // Calcular el resultado
        $resultado = $numero1 * $numero2;

        // Mostrar el resultado
        echo "<p>El resultado de la multiplicación de $numero1 y $numero2 es: $resultado</p>";
    ?>
</body>
</html>
