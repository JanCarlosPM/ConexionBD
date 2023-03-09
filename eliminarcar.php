<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $codigoCar = $_POST["codigoCar"];
    $my_query = "delete from carrera where codigoCar = $codigoCar";
    $result = $mysql->query($my_query);
    if ($result == true) {
        echo "Carrera Eliminada";
    } else {
        echo "Carrera no Eliminada";
    }
} else {
    echo "Error Desconocido";
}

?>