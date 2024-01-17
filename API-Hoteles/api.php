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

// GET: Devuelve el listado de hoteles
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $result = $conn->query("SELECT * FROM hoteles");
    $hoteles = array();

    while ($row = $result->fetch_assoc()) {
        $hoteles[] = $row;
    }

    echo json_encode(["hoteles" => $hoteles]);
}

// GET con ID: Devuelve solo un hotel en concreto.
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM hoteles WHERE id = $id");

    if ($result->num_rows > 0) {
        $hotel = $result->fetch_assoc();
        echo json_encode(["hotel" => $hotel]);
    } else {
        echo json_encode(["mensaje" => "Hotel no encontrado"]);
    }
}

// POST: Inserta un hotel
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    $nombre = $data['nombre'];
    $cat = $data['cat'];
    $hab = $data['hab'];
    $poblacion = $data['poblacion'];
    $direccion = $data['direccion'];

    $sql = "INSERT INTO hoteles (Nombre, CAT, HAB, Poblacion, Direccion) 
            VALUES ('$nombre', '$cat', '$hab', '$poblacion', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["mensaje" => "Hotel agregado correctamente"]);
    } else {
        echo json_encode(["mensaje" => "Error al agregar el hotel: " . $conn->error]);
    }
}

// PUT: Modifica un hotel
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    parse_str(file_get_contents("php://input"), $data);
    $id = $data['id'];
    $nombre = $data['nombre'];
    $cat = $data['cat'];
    $hab = $data['hab'];
    $poblacion = $data['poblacion'];
    $direccion = $data['direccion'];

    $sql = "UPDATE hoteles 
            SET Nombre='$nombre', CAT='$cat', HAB='$hab', Poblacion='$poblacion', Direccion='$direccion' 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["mensaje" => "Hotel modificado correctamente"]);
    } else {
        echo json_encode(["mensaje" => "Error al modificar el hotel: " . $conn->error]);
    }
}

// DELETE: Elimina un hotel
if ($_SERVER['REQUEST_METHOD'] === 'DELETE' && isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM hoteles WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["mensaje" => "Hotel eliminado correctamente"]);
    } else {
        echo json_encode(["mensaje" => "Error al eliminar el hotel: " . $conn->error]);
    }
}

$conn->close();
?>
