<?php

$lista = [4, 3, 2, 1, -5, 0, 5];

for ($i = 0; $i < count($lista); $i++) {
    $numero = $lista[$i];

    if ($numero > 0) {
        echo "$numero es positivo.<br>";
    } elseif ($numero < 0) {
        echo "$numero es negativo.<br>";
    } else {
        echo "Se encontró un 0. El bucle se detendrá aquí.<br>";
        break;
    }
}

?>
