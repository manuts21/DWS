<?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["verHoteles"])) {
    // Define la ruta de tu archivo CSV
    $csvFile = "hoteles.csv";

    // Verifica si el archivo existe
    if (file_exists($csvFile)) {
        // Lee el archivo CSV y almacena el contenido en una variable
        $content = "<table border='1'>";
        $file = fopen($csvFile, "r");
        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            $content .= "<tr>";
            foreach ($data as $value) {
                $content .= "<td>{$value}</td>";
            }
            $content .= "</tr>";
        }
        $content .= "</table>";

        // Cierra el archivo
        fclose($file);

        // Escribe el contenido en un nuevo archivo HTML
        $outputFile = "output.html";
        file_put_contents($outputFile, $content);

        // Redirige al nuevo archivo HTML
        header("Location: $outputFile");
        exit;
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["anadirHoteles"])) {
        $formPage = "anadirhoteles.php";
        // Redirige a la página de añadir hoteles (anadirhoteles.php)
        header("Location: $formPage");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles Valencia</title>
    <link rel="icon" type="image/x-icon" href="F1.svg">
    <link rel="stylesheet" href="style.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Contenedor de la imagen -->
    <div id="imgdiv">
        <img src="ilustracion-miramar.svg" alt="">
        <ul>
            <li><a href="?verHoteles=1" class="underline-hover-effect">Ver Hoteles</a></li>
            <li><a href="anadirhoteles.php" class="underline-hover-effect">Añadir Hoteles</a></li>
        </ul>
    </div>
</body>

</html>
