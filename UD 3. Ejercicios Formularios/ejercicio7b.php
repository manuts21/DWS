<?php

function recoge($valor) {
  $valor = trim($valor); 
  $valor = htmlspecialchars($valor); 
  $valor = strip_tags($valor); 
  return $valor;
}

$nombre = recoge($_GET['nombre']);
$sexo = recoge($_GET['sexo']);
$edad = recoge($_GET['edad']);
$peso = recoge($_GET['peso']);
$estadoCivil = recoge($_GET['estadoCivil']);
$aficiones = isset($_GET['aficiones']) ? (is_array($_GET['aficiones']) ? $_GET['aficiones'] : array($_GET['aficiones'])) : array();

if (empty($nombre)) {
  echo "Nombre está vacío";
} else {
  echo "Nombre: " . $nombre . "<br>";
}

if (empty($sexo)) {
  echo "Sexo está vacío";
} else {
  echo "Sexo: " . $sexo . "<br>";
}

if (empty($edad)) {
  echo "Edad está vacía";
} else {
  echo "Edad: " . $edad . "<br>";
}

if (empty($peso)) {
  echo "Peso está vacío";
} else {
  echo "Peso: " . $peso . "<br>";
}

if (empty($estadoCivil)) {
  echo "Estado Civil está vacío";
} else {
  echo "Estado Civil: " . $estadoCivil . "<br>";
}

if (empty($aficiones)) {
  echo "Aficiones están vacías";
} else {
  echo "Aficiones: " . implode(", ", $aficiones);
}
?>


