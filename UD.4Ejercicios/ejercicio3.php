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

    // Setter para modificar el nombre
    public function setNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    // Getter para obtener el sueldo
    public function getSueldo(){
        return $this->sueldo;
    }

    //Setter para modificar el sueldo
    public function setSueldo($nuevoSueldo){
        $this->sueldo = $nuevoSueldo;
    }
    //Metodo para pagar impuestos
    public function pagaImpuestos(){
        return $this-> sueldo > 1200;
    }

}
// Crear dos empleados

$empleado1 = new Empleado("Juan",50000);
$empleado2 = new Empleado("Maria", 600000);

// Prints

echo $empleado1 ->getNombre() . " tiene un sueldo de " . $empleado1->getSueldo() . PHP_EOL;
echo $empleado1 ->pagaImpuestos() ? "debe pagar impuestos." : "No debe pagar impuestos." .PHP_EOL;

echo $empleado2->getNombre() . " tiene un sueldo de" . 
$empleado1->getSueldo() . PHP_EOL;
echo $empleado2->pagaImpuestos() ? "debe pagar impuestos." : "No debe pagar impuestos." .PHP_EOL;