<?php

class Trabajador {
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre, $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function calcularSueldo() {
        return $this->sueldo;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

class Empleado extends Trabajador {
    private $horasTrabajadas;

    public function __construct($nombre, $sueldo, $horasTrabajadas) {
        parent::__construct($nombre, $sueldo);
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function calcularSueldo() {
        $tarifaPorHora = 9.50;
        return $tarifaPorHora * $this->horasTrabajadas;
    }
}

class Gerente extends Trabajador {
    private $beneficioEmpresa;

    public function __construct($nombre, $sueldoBase, $beneficioEmpresa) {
        parent::__construct($nombre, $sueldoBase);
        $this->beneficioEmpresa = $beneficioEmpresa;
    }

    public function calcularSueldo() {
        $porcentajeBeneficio = 0.05;
        return $this->sueldo + ($this->beneficioEmpresa * $porcentajeBeneficio);
    }
}

// Ejemplo de uso
$empleado = new Empleado("Juan", 0, 40);
$gerente = new Gerente("Ana", 2500, 50000);

echo "Sueldo de ".$empleado->getNombre().": ".$empleado->calcularSueldo()." euros\n";
echo "Sueldo de ".$gerente->getNombre().": ".$gerente->calcularSueldo()." euros\n";

?>
