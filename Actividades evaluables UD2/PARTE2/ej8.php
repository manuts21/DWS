<?php

$alumnos = [
    ["edad" => 20, "estatura" => 1.80],
    ["edad" => 18, "estatura" => 1.70],
    ["edad" => 22, "estatura" => 1.85],
    ["edad" => 17, "estatura" => 1.65],
    ["edad" => 19, "estatura" => 1.78]
];

$sumaEdades = 0;
$sumaEstaturas = 0;
$alumnosMayoresDe18 = 0;
$alumnosMidenMasDe175 = 0;

$cantidadAlumnos = count($alumnos);

for ($i = 0; $i < $cantidadAlumnos; $i++) {
    $alumno = $alumnos[$i];

    $sumaEdades += $alumno["edad"];
    $sumaEstaturas += $alumno["estatura"];

    if ($alumno["edad"] > 18) {
        $alumnosMayoresDe18++;
    }

    if ($alumno["estatura"] > 1.75) {
        $alumnosMidenMasDe175++;
    }
}

$edadMedia = ($cantidadAlumnos > 0) ? $sumaEdades / $cantidadAlumnos : 0;
$estaturaMedia = ($cantidadAlumnos > 0) ? $sumaEstaturas / $cantidadAlumnos : 0;

echo "Edad media de los alumnos: $edadMedia<br>";
echo "Estatura media de los alumnos: $estaturaMedia<br>";
echo "Cantidad de alumnos mayores de 18 años: $alumnosMayoresDe18<br>";
echo "Cantidad de alumnos que miden más de 1.75 m: $alumnosMidenMasDe175";

?>
