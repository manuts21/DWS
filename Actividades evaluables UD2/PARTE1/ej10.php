<?php
// Definir variables

$codigo = 1;
$nombre = "Tom";
$apellidos = "Smith";
$puesto = "Vendedor";
$sueldo = 75000;
$edad = 26;
$num_hijos = 0;
$sucursal = "New York";

// Calcular retenciones

$retencion1 = ($puesto == "Vendedor" && $sueldo > 70000) ? 0.10 : 0.20;
$retencion2 = ($edad > 50 || $num_hijos > 2) ? 0.05 : 0.10;
$retencion3 = ($sueldo > 50000 && $sueldo < 80000) ? 0.05 : 0.12;
$retencion4 = ($num_hijos == 1 || $num_hijos == 2) ? 0.10 : 0.05;
$retencion5 = ($sueldo > 80000 || $num_hijos == 0) ? 0.15 : 0.05;

$sueldoDespuesRetenciones = $sueldo - ($sueldo * $retencion1 + $sueldo * $retencion2 + $sueldo * $retencion3 + $sueldo * $retencion4 + $sueldo * $retencion5);

echo "Sueldo después de retenciones: $sueldoDespuesRetenciones €";

?>






