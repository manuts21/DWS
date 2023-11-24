
<?php
// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores introducidos en el formulario
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operation = $_POST["operation"];

    // Realizar la operación seleccionada
    switch ($operation) {
        case "sum":
            $result = $num1 + $num2;
            $operationText = "Suma";
            break;
        case "subtract":
            $result = $num1 - $num2;
            $operationText = "Resta";
            break;
        case "multiply":
            $result = $num1 * $num2;
            $operationText = "Multiplicación";
            break;
        case "divide":
            if ($num2 != 0) {
                $result = $num1 / $num2;
                $operationText = "División";
            } else {
                $result = "No se puede dividir por cero";
                $operationText = "";
            }
            break;
        default:
            $result = "";
            $operationText = "";
            break;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Sencilla</title>
</head>
<body>
    <h1>Calculadora Sencilla</h1>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br><br>

        <label for="operation">Operación:</label>
        <input type="radio" name="operation" value="sum" required> Sumar
        <input type="radio" name="operation" value="subtract"> Restar
        <input type="radio" name="operation" value="multiply"> Multiplicar
        <input type="radio" name="operation" value="divide"> Dividir<br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php if (isset($result)) : ?>
        <h2>Resultado de la <?php echo $operationText; ?>: <?php echo $result; ?></h2>
    <?php endif; ?>
</body>
</html>
