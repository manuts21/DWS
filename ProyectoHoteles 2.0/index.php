<?php
// Configuración de la base de datos
$host = "localhost";
$user = "root";
$password = "root";
$database = "hoteles";

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Ver Hoteles
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["verHoteles"])) {
    // Consulta SQL para obtener los hoteles
    $sqlSelect = "SELECT * FROM hoteles";
    $result = $conn->query($sqlSelect);

    if ($result->num_rows > 0) {
        // Almacena el contenido en una variable
        $content = "<table border='1'>";
        while ($row = $result->fetch_assoc()) {
            $content .= "<tr>";
            foreach ($row as $value) {
                $content .= "<td>{$value}</td>";
            }
            $content .= "</tr>";
        }
        $content .= "</table>";

        $outputFile = "output.html";
        file_put_contents($outputFile, $content);

        // Redirige al nuevo archivo HTML
        header("Location: $outputFile");
        exit;
    }
}
// Restaurar BBDD
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["restaurarBBDD"])) {
     // Nombre del archivo SQL con las instrucciones de restauración
     $sqlRestoreFile = "hoteles.sql";
     // Leemos el contenido del archivo SQL
     $sqlContent = file_get_contents($sqlRestoreFile);
     $sqlQueries = explode(';', $sqlContent);
     foreach ($sqlQueries as $sqlQuery) {
        $sqlQuery = trim($sqlQuery);
        $conn->query($sqlQuery);
     }
}
// Añadir Hoteles
elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["anadirHoteles"])) {
    $formPage = "anadirhoteles.php";
    
    header("Location: $formPage");
    exit;
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
            <li><a href="modificarhotel.php" class="underline-hover-effect">Modificar Hoteles</a></li>
            <li><a href="borrarhotel.php" class="underline-hover-effect">Borrar Hoteles</a></li>
            <li><a href="?restaurarBBDD=1" class="underline-hover-effect">Restaurar BBDD</a></li>
        </ul>
    </div>
</body>

</html>
