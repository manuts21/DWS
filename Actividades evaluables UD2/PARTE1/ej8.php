<?php

define('LIMITE', 10); 
$numeroAleatorio = rand(1, LIMITE);

echo "Número aleatorio: $numeroAleatorio ";
echo ($numeroAleatorio % 2 === 0) ? 'es par.' : 'es impar.';

?>
