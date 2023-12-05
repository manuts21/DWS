<?php

class Mamifero {

    public $especie;
    public $sonido;
    public $familia;

    public function __construct($especie, $sonido) {
        $this->especie = $especie;
        $this->sonido = $sonido;
    }

    public function hacerSonido() {
        $familiaTexto = isset($this->familia) ? "de la familia {$this->familia}" : "";
        echo "Sonido de {$this->especie}, {$familiaTexto}: {$this->sonido}\n";
    }
}

$mamifero = new Mamifero("León", "rugido");
$mamifero->familia = "Felidae";
$mamifero->hacerSonido();

class Perro extends Mamifero {

    public function __construct() {
        parent::__construct("Perro", "ladrido");
        $this->familia = "Cánidos";
    }
}

class Gato extends Mamifero {

    public function __construct() {
        parent::__construct("Gato", "maullido");
        $this->familia = "Felinos";
    }
}

// Ejemplo de uso
$perro = new Perro();
$gato = new Gato();

$perro->hacerSonido();
$gato->hacerSonido();

?>
