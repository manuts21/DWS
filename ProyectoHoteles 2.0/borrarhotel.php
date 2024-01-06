<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "hoteles";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Lógica para procesar el formulario de añadir hoteles
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrarHoteles"])) {
    $idHotel = $_POST["idHotel"] ?? "";
    // Consulta SQL para insertar datos en la base de datos
    $sql = "DELETE FROM hoteles WHERE id = $idHotel"; 

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Hoteles</title>
    <link rel="icon" type="image/x-icon" href="F1.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <!-- Estilo para el rating -->
    <style>
        /* Estilo general */
        body {
            margin: 0;
            font-family: 'Rubik', sans-serif;
            font-size: 1rem;
            background-color: #000;
            color: #fff;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            height: 100vh;
        }

        #formdiv {
            text-align: center;
            margin-top: 20px;
            width: 400px;
        }

        label {
            display: block;
            margin: 10px 0;
            text-align: left;
        }

        input,
        button {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Estilo para el rating */
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '★ ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>

</head>

<body>
    <!-- Formulario para añadir hoteles -->
    <div id="formdiv">
        <form method="post" action="borrarhotel.php">
            <label for="idHotel">ID del hotel:</label>
            <input type="text" id="idHotel" name="idHotel" required>
        
            <button type="submit" name="borrarHoteles" class="underline-hover-effect">Borrar Hotel</button>
        </form>
    </div>
</body>

</html>

<?php
$conn->close();
?>
