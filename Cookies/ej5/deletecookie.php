<!-- 5. EJERCICIO. BORRAR COOKIE
Para borrar una cookie se debe llamar a la funcion setcookie con una fecha anterior
a la actual. Crear una web que nos permita introducir utilizando un control de tipo email una
dirección de correo electrónico y mediante un checkbox indicaremos que queremos que recuerde la
dirección o que no la recuerde. Al pulsar Enviar accederemos a otra página que nos mostrará la
dirección de correo si se marcó la opción recordar. -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $recordar = isset($_POST['recordar']) ? true : false;

    
    if ($recordar) {
        
        setcookie('email_recordado', $email, time() + 3600 * 24 * 30, '/');
    } else {
        
        setcookie('email_recordado', '', time() - 3600, '/');
    }
} else {
    
    header('Location: index.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Dirección de correo almacenada:</h2>
    <?php
    
    if ($recordar) {
        echo "<p>Email: $email</p>";
    } else {
        echo "<p>No se eligió recordar la dirección de correo.</p>";
    }
    ?>
</body>
</html>
