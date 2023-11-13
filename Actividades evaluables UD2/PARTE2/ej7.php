<?php 
//Definir variables
$array = [5,4,2,7,-10,-14,-25,0,0,0];

$sumPositivos = 0;
$countPositivos = 0;
$sumNegativos = 0;
$countNegativos = 0;
$countCeros = 0;

for ($i = 0; $i < count($array); $i++) {
    $num = $array[$i];

    if ($num > 0) {
        $sumPositivos += $num;
        $countPositivos++;
    } elseif ($num < 0) {
        $sumNegativos += $num;
        $countNegativos++;
    } else {
        $countCeros++;
    }
}

$mediaPositivos = $sumPositivos / $countPositivos;
$mediaNegativos = $sumNegativos / $countNegativos;

echo "Media de los números positivos: $mediaPositivos<br>";
echo "Media de los números negativos: $mediaNegativos<br>";
echo "Cantidad de ceros: $countCeros";
