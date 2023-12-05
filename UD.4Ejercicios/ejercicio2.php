<?php
class Empleado
{
    private $nombre;
    private $sueldo;

    // Constructor
    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    // Getter para obtener el nombre

    public function getNombre()
    {
        return $this->nombre;
    }

    

    // Getter para obtener el sueldo
    public function getSueldo(){
        return $this->sueldo;
    }


}

// Crear dos empleados

$empleado1 = new Empleado("Juan",50000);
$empleado2 = new Empleado("Maria", 600000);

// Printearlo

echo $empleado1 ->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . PHP_EOL;

echo $empleado2 ->getNombre() . " tiene un sueldo de " . $empleado2->getSueldo() . PHP_EOL;