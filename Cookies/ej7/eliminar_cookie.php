<?php
// Eliminar la cookie y redirigir a la página inicial
setcookie('selectedColor', '', time() - 3600, '/');
header('Location: pag1.php');
?>
