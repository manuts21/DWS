<?php

$nombre = "Fernando Alonso";
$edad = 33;

if ($nombre !== NULL && $edad !== NULL) {
    echo "Hola $nombre, tiene $edad años.";
} elseif ($nombre !== NULL && $edad === NULL) {
    echo "Hola $nombre, no sé tu edad.";
} elseif ($nombre === NULL && $edad !== NULL) {
    echo "Hola desconocido, tiene $edad años.";
} else {
    echo "Hola desconocido, no sé tu edad.";
}

?>