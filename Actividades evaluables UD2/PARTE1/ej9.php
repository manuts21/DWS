<?php
define("IVA", 21);
$precio = 33;
$unidades = 1;


//Calcular los valores

$importeBase = $precio * $unidades;
$importeIVA = $importeBase * IVA;
$importeFinal = $importeBase + $importeIVA;


// Mostrar

echo "Precio del producto: $precio \n Unidades adquiridas: $unidades \n- Importe base de la factura: $importeBase \n Importe IVA: $importeIVA \n Importe Final: $importeFinal ";