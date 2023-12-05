<?php

class Trabajador {
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function calcularSueldo() {
        // Este método se implementará en las clases derivadas
        // ya que el cálculo depende del tipo de trabajador.
    }
}

class Empleado extends Trabajador {
    public function calcularSueldo($horasTrabajadas) {
        $this->sueldo = 9.50 * $horasTrabajadas;
        return $this->sueldo;
    }
}

class Gerente extends Trabajador {
    private $sueldoBase = 2500;
    private $porcentajeBeneficio;

    public function __construct($nombre, $porcentajeBeneficio) {
        parent::__construct($nombre);
        $this->porcentajeBeneficio = $porcentajeBeneficio;
    }

    public function calcularSueldo($beneficioEmpresa) {
        $this->sueldo = $this->sueldoBase + ($beneficioEmpresa * $this->porcentajeBeneficio / 100);
        return $this->sueldo;
    }
}

$empleado = new Empleado("Juan");
$sueldoEmpleado = $empleado->calcularSueldo(40);
echo "Sueldo de {$empleado->nombre}: $sueldoEmpleado\n";

$gerente = new Gerente("Ana", 5);
$sueldoGerente = $gerente->calcularSueldo(50000);
echo "Sueldo de {$gerente->nombre}: $sueldoGerente\n";

?>
