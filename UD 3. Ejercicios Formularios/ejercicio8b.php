<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $texto = $_POST["texto"];
    $filtro = $_POST["filtro"];

    switch ($filtro) {
        case "email":
            if (!filter_var($texto, FILTER_VALIDATE_EMAIL)) {
                $error = "El texto ingresado no es un correo electrónico válido.";
            }
            break;
        case "numeros":
            if (!is_numeric($texto)) {
                $error = "El texto ingresado no es un número válido.";
            }
            break;
        case "nif":
            if (!preg_match("/^[0-9]{8}[A-Z]$/", $texto)) {
                $error = "El texto ingresado no es un NIF válido.";
            }
            
            break;
        default:
            $error = "Seleccione un filtro válido.";
            break;
    }

    
    if (isset($error)) {
        echo "<p>Error: $error</p>";
    } else {
        echo "<p>El texto ingresado es válido.</p>";
    }
}
?>
