<?php
// Leer archivo CSV
$csvFile = fopen('hoteles.csv', 'r');

// Verificar si el archivo se abre correctamente
if ($csvFile !== false) {
    echo '<table border="1">';
    // Leer cada fila del archivo CSV
    while (($row = fgetcsv($csvFile)) !== false) {
        echo '<tr>';
        // Mostrar datos de las columnas
        foreach ($row as $col) {
            echo '<td>' . $col . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    // Cerrar el archivo CSV
    fclose($csvFile);
} else {
    echo 'Error al abrir el archivo CSV.';
}
?>
