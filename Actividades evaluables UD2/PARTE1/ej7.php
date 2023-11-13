<?php

$nomina = 1000; 

switch (true) {
    case ($nomina < 800):
        $nomina += $nomina * 0.20; // Incremento del 20%
        break;
    case ($nomina >= 800 && $nomina <= 1200):
        // No se realiza ninguna operación, la nómina se deja como está
        break;
    case ($nomina > 1200):
        $nomina -= $nomina * 0.15; // Descuento del 15%
        break;
}

echo "La nueva nómina es: $nomina €";

?>
