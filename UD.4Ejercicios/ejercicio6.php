<?php

class Calculadora {

    // Propiedad para almacenar el primer número (siempre será 8)
    public static $primerNumero = 8;

    public static function sumar($num2) {
        return self::$primerNumero + $num2;
    }

    public static function restar($num2) {
        return self::$primerNumero - $num2;
    }

    public static function multiplicar($num2) {
        return self::$primerNumero * $num2;
    }

    public static function dividir($num2) {
        if ($num2 != 0) {
            return self::$primerNumero / $num2;
        } else {
            throw new Exception("No es posible dividir por cero.");
        }
    }
}

echo "Suma: " . Calculadora::sumar(3) . "\n";
echo "Resta: " . Calculadora::restar(2) . "\n";
echo "Multiplicación: " . Calculadora::multiplicar(6) . "\n";

try {
    echo "División: " . Calculadora::dividir(2) . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>
