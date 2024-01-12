<!-- 3. EJERCICIO. CONTADOR
Hacer una página web y hacer que mediante cookies nos cuente cuantas veces entramos en el
navegador. Hacer que las cookies caduquen en un año. Utilizar la función setcookie() y la variable
$_COOKIE. -->
<?php
function obtenerContador() {
    if (isset($_COOKIE['contador'])) {
        $contador = $_COOKIE['contador'];
        $contador++;
    } else {
        $contador = 1;
    }

    setcookie('contador', $contador, time() + 365 * 24 * 60 * 60);

    echo "<p>Has visitado esta página $contador veces.</p>";
}

obtenerContador();
?>
