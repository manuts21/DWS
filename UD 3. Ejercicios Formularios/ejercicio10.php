<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si se seleccionó una foto
    if (isset($_FILES["foto"]) && $_FILES["foto"]["error"] == 0) {
        $targetDir = "C:\\xampp\\htdocs\\uploads\\";  // Adjust the target directory path
        $targetFile = $targetDir . basename($_FILES["foto"]["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Verificar si el archivo es una imagen
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if ($check !== false) {
            // Verificar si el archivo ya existe
            if (file_exists($targetFile)) {
                echo "La foto ya existe.";
            } else {
                // Mover el archivo a la carpeta "uploads"
                if (move_uploaded_file($_FILES["foto"]["tmp_name"], $targetFile)) {
                    echo "La foto se ha subido correctamente.";
                    
                    // Mostrar la foto
                    echo "<br><br>";
                    echo "<img src='$targetFile' alt='Uploaded Photo'>";
                } else {
                    echo "Hubo un error al subir la foto.";
                }
            }
        } else {
            echo "El archivo no es una imagen.";
        }
    } else {
        echo "Por favor, selecciona una foto.";
    }


}
?>
