<?php

class Calculadora {
    
    public static function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    public static function restar($num1, $num2) {
        return $num1 - $num2;
    }

    public static function multiplicar($num1, $num2) {
        return $num1 * $num2;
    }

    public static function dividir($num1, $num2) {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            throw new Exception("No es posible dividir por cero.");
        }
    }
}

echo "Suma: " . Calculadora::sumar(5, 3) . "\n";
echo "Resta: " . Calculadora::restar(8, 2) . "\n";
echo "Multiplicación: " . Calculadora::multiplicar(4, 6) . "\n";

try {
    echo "División: " . Calculadora::dividir(10, 2) . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>
