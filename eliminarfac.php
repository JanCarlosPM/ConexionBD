<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once 'conexion.php';
    $codigoFac = $_POST["codigoFac"];
    $my_query = "delete from facultad where codigoFac = $codigoFac";
    $result = $mysql->query($my_query);
    if ($result == true) {
        echo "Facultad Eliminada";
    } else {
        echo "Facultad no Eliminada";
    }
} else {
    echo "Error Desconocido";
}

?>