<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    require_once 'conexion.php';
    $my_query = "SELECT f.nombre as facultad, c.carrera FROM facultad f 
    INNER JOIN carrera c ON f.codigoFA = c.facultad ORDER BY f.nombre, 
    c.carrera;";
    $result = $mysql->query($my_query);
    if ($mysql->affected_rows > 0) {
        $json = "{\"data\":[";
        while ($row = $result->fetch_assoc()) {
            $json = $json . json_encode($row);
            $json = $json . " , ";
        }
        $json = substr(trim($json), 0, -1);
    }
    echo $json;
    $result->close();
    $mysql->close();
}
