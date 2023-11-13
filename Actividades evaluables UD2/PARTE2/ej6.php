<?php

$lista = [4, 3, 2, 1, -5, 0, 5];

$suma = 0;
$cantidad = 0;

for ($i = 0; $i < count($lista); $i++) {
    $numero = $lista[$i];

    if ($numero < 0) {
        break; // Salir del bucle si se encuentra un número negativo
    }

    $suma += $numero;
    $cantidad++;
}

if ($cantidad > 0) {
    $media = $suma / $cantidad;
    echo "La media de los números introducidos es: $media";
} else {
    echo "No se introdujeron números positivos.";
}

?>
