<?php
// Lógica para procesar el formulario de añadir hoteles
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["anadirHoteles"])) {
    // Asegúrate de validar y sanitizar los datos del formulario
    $nombreHotel = $_POST["nombreHotel"] ?? "";
    $categoria = $_POST["categoria"] ?? "";
    $habitaciones = $_POST["habitaciones"] ?? "";
    $poblacion = $_POST["poblacion"] ?? "";
    $direccion = $_POST["direccion"] ?? "";

    // Nueva variable para almacenar el valor de la categoría (star rating)
    $rating = $_POST["rating"] ?? "";

    // Abre el archivo en modo de escritura
    $csvFile = "hoteles.csv";
    $file = fopen($csvFile, "a");

    // Agrega la nueva entrada al archivo CSV
    fputcsv($file, array($nombreHotel, $categoria, $habitaciones, $poblacion, $direccion, $rating));

    // Cierra el archivo
    fclose($file);

    // Redirige de nuevo a la página principal u otra página según tus necesidades
    header("Location: index.php");
    exit;
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
            /* Adjust the width as needed */
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
        <form method="post" action="anadirhoteles.php">
            <label for="nombreHotel">Nombre del Hotel:</label>
            <input type="text" id="nombreHotel" name="nombreHotel" required>

            <!-- Reemplaza la categoría con el rating -->
            <label for="rating">Categoría (Star Rating):</label>
            <div class="rate">
                <input type="radio" id="star5" name="rating" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rating" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
            <br><br>

            <label for="habitaciones">Número de Habitaciones:</label>
            <input type="number" id="habitaciones" name="habitaciones" required>

            <label for="poblacion">Población:</label>
            <input type="text" id="poblacion" name="poblacion" required>

            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>

            <button type="submit" name="anadirHoteles" class="underline-hover-effect">Añadir Hotel</button>
        </form>
    </div>
</body>

</html>