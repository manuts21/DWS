<?php
// Definir variables
$hoteles = [
    ["Nombre" => "Abashiri (NH)", "CAT" => "3*", "HAB" => 168, "Poblacion" => "46013 Valencia", "Direccion" => "Avenida Ausias March,59"],
    ["Nombre" => "Abba Acteon", "CAT" => "4*", "HAB" => "189", "Poblacion" => "46023 Valencia", "Direccion" => "Escultor Vicente Bertran Grimal, 2"], ["Nombre" => "Acta Atarazaans", "CAT" => "4*", "HAB" => "42", "Poblacion" => "46011 Valencia", "Direccion" => "Plaza Tribunal de las Aguas, 4"], ["Nombre" => "Acta del Carmen", "CAT" => "3*", "HAB" => "25", "Poblacion" => "46003 Valencia", "Direccion" => "Blanquerias 11"],
    ["Nombre" => "AC Valencia", "CAT" => "4* ", "HAB" => "183", "Poblacion" => "46023 Valencia", "Direccion" => "Avenida de Francia,67"],
    ["Nombre" => "Ad Hoc Monumental Valencia", "CAT" => "3*", "HAB" => "28", "Poblacion" => "46003 Valencia", "Direccion" => "Boix, 4"],
    ["Nombre" => "Alkazar", "CAT" => "1*", "HAB" => "18", "Poblacion" => "46002 Valencia", "Direccion" => "Mosen Femades, 11"]


];

// Función para mostrar el listado de hoteles
function mostrarListadoHoteles($hoteles)
{
    foreach ($hoteles as $hotel) {
        echo "Nombre: {$hotel['Nombre']} | Categoría: {$hotel['CAT']} | Habitaciones: {$hotel['HAB']} | Población: {$hotel['Poblacion']} | Dirección: {$hotel['Direccion']}<br>";
    }
    if ($hoteles === NULL || $hoteles === []) {
        echo ("No hay hoteles en la base de datos<br><br>");
    }
}
// Funcion para mostar hoteles de mas de 100 habitaciones

function mostrarHoteles100hab($hoteles)
{
    foreach ($hoteles as $hotel) {
        if ($hotel['HAB'] > 100) {
            echo "Nombre: {$hotel['Nombre']} | Categoría: {$hotel['CAT']} | Habitaciones: {$hotel['HAB']} | Población: {$hotel['Poblacion']} | Dirección: {$hotel['Direccion']}<br>";
        }
    }
}

// Funcion para mostrar hoteles de menos de 100 habitaciones y 3 estrellas
function mostrarHoteles100hab3stars($hoteles)
{
    foreach ($hoteles as $hotel) {
        if ($hotel['HAB'] < 100 && $hotel['CAT'] === '3*') {
            echo "Nombre: {$hotel['Nombre']} | Categoría: {$hotel['CAT']} | Habitaciones: {$hotel['HAB']} | Población: {$hotel['Poblacion']} | Dirección: {$hotel['Direccion']}<br>";
        }
    }
}

// Funcion para borrar hoteles por nombre
function borrarHotelPorNombre(&$hoteles, $nombreHotel)
{
    foreach ($hoteles as $key => $hotel) {
        if ($hotel['Nombre'] === $nombreHotel) {
            unset($hoteles[$key]);
        }
    }
}


// Llamadas a funciones
echo("<h1>Listado de hoteles</h1>");
mostrarListadoHoteles($hoteles);
echo ("<br><br><h1>Hoteles de mas de 100 habitaciones</h1><br>");
mostrarHoteles100hab($hoteles);
echo ("<br><br><h1>Hoteles de menos de 100 habitaciones y exactamente tres estrellas</h1><br>");
mostrarHoteles100hab3stars($hoteles);
echo ("<br><br> <h1>Borrando el hotel Acta del Carmen</h1><br>");
borrarHotelPorNombre($hoteles, "Acta del Carmen");
mostrarListadoHoteles($hoteles);
echo ("<br><br><h1>BORRANDO HOTELES</h1><br>");
$hoteles = [];
mostrarListadoHoteles($hoteles);
$hoteles = [["Nombre" => "Astoria Palace", "CAT" => "4*", "HAB" => "204", "Poblacion" => "46002 Valencia", "Direccion" => "Plaza Rodrigo Botet,5"], 
["Nombre" => "Balenario Las Arenas", "CAT" => "Lujo", "HAB" => "253", "Poblacion" => "46011 Valencia", "Direccion" => "Eugenia Viñes, 22-24"
]];
echo ("<br><h1>Añadidos hoteles nuevos</h1>");
mostrarListadoHoteles($hoteles);
