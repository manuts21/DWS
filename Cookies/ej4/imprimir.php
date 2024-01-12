<!-- 4. EJERCICIO. IMPRIMIR NOMBRE
Crear una cookie que almacene el nombre del visitante en el sitio y cada vez que
entremos al sitio nos de la bienvenida imprimiendo el nombre. Para introducir el nombre,
crear un formulario con un control de tipo text. -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener el nombre del formulario
    $visitorName = $_POST['visitor_name'];

    // Crear una cookie con el nombre del visitante
    setcookie('visitor_name', $visitorName, time() + 3600, '/'); // La cookie expirará en 1 hora
}

// Redireccionar de nuevo al index.php
header('Location: index.php');
?>
