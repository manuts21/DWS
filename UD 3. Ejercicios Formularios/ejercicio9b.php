<?php
// Comprobar si el formulario se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Leer los valores del formulario
    $name = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $username = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $confirmPassword = isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : "";
    $photo = isset($_FILES["foto"]) ? $_FILES["foto"] : null;

    // Inicializar un array para almacenar los errores
    $errors = [];

    // Validar campos obligatorios
    if (empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || ($photo !== null && empty($photo["name"]))) {
        $errors[] = "Todos los campos son obligatorios.";
    }

    // Validar que la contraseña y la confirmación de contraseña coincidan
    if ($password !== $confirmPassword) {
        $errors[] = "La contraseña y la confirmación de contraseña no coinciden.";
    }

    // Validar tamaño y tipo de la foto
    $allowedTypes = ["image/jpeg", "image/png"];
    $maxSize = 2 * 1024 * 1024; // 2MB

    if ($photo !== null && !in_array($photo["type"], $allowedTypes)) {
        $errors[] = "Tipo de foto inválido. Solo se permiten archivos JPEG y PNG.";
    }

    if ($photo !== null && $photo["size"] > $maxSize) {
        $errors[] = "El tamaño de la foto excede el límite máximo de 2MB.";
    }

    // Si hay errores, mostrarlos al usuario
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "<p>Formulario enviado correctamente.</p>";
    }
}

