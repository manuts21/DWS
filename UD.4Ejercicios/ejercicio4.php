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
    public function setNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    // Getter para obtener el sueldo
    public function getSueldo()
    {
        return $this->sueldo;
    }

    //Setter para modificar el sueldo
    public function setSueldo($nuevoSueldo)
    {
        $this->sueldo = $nuevoSueldo;
    }
    //Metodo para pagar impuestos
    public function pagaImpuestos()
    {
        return $this->sueldo > 1200;
    }
    // Método para mostrar el estado de impuestos
    public function mostrarEstadoImpuestos()
    {
        echo $this->getNombre() . " tiene un sueldo de " . $this->getSueldo() . PHP_EOL;
        if ($this->PagaImpuestos()) {
            echo "Debe pagar impuestos." . PHP_EOL;
        } else {
            echo "No debe pagar impuestos." . PHP_EOL;
        }
    }
}
// Crear dos empleados
$empleado1 = new Empleado("Juan", 50000);
$empleado2 = new Empleado("María", 1300);

// Mostrar el estado de impuestos
$empleado1->mostrarEstadoImpuestos();
$empleado2->mostrarEstadoImpuestos();


?>

