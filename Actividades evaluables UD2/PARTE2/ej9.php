<?php

$facturas = [
    ["codigo" => "A001", "litros" => 50, "precio_litro" => 2.5],
    ["codigo" => "A002", "litros" => 30, "precio_litro" => 3.0],
    ["codigo" => "A003", "litros" => 20, "precio_litro" => 4.0],
    ["codigo" => "A004", "litros" => 40, "precio_litro" => 2.0],
    ["codigo" => "A005", "litros" => 35, "precio_litro" => 3.5]
];

$facturacionTotal = $cantidadLitrosArticulo1 = $facturasMayor600 = 0;
$totalFacturas = count($facturas);

for ($i = 0; $i < $totalFacturas; $i++) {
    $facturacionTotal += $facturas[$i]["litros"] * $facturas[$i]["precio_litro"];

    if ($facturas[$i]["codigo"] == "A001") {
        $cantidadLitrosArticulo1 += $facturas[$i]["litros"];
    }

    if ($facturacionTotal > 600) {
        $facturasMayor600++;
    }
}

echo "Facturación total: $facturacionTotal €<br>";
echo "Cantidad de litros vendidos del artículo 1: $cantidadLitrosArticulo1 litros<br>";
echo "Cantidad de facturas emitidas de más de 600 €: $facturasMayor600";

?>
