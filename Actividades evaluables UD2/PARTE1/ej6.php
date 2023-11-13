<?php
$numero1 = 20;
$numero2 = 13;

switch(true){
    case $numero1 > $numero2:
        $resultado = "El mayor es numero es: $numero1";
        break;
    case $numero2 > $numero1:
        $resultado = "El mayor numero es $numero2";
        break;
    default:
        $resultado = "Los numeros son iguales";
        break;

}
echo $resultado
?>