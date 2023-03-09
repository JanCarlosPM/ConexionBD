<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once 'conexion.php';
    $my_query = "select f.facultad, c.carrera from facultad f join 
    carrera c on f.codigoFac = c.codigoFac order by f.facultad; ";
    $result = $mysql->query($my_query);
    if($mysql->affected_rows > 0){
        $json = "{\"data\":[";
            while ($row = $result->fetch_assoc()) {
                $json = $json.json_encode($row);
                $json = $json.",";
            }
            $json = substr(trim($json),0,-1);
    }
    echo $json;
    $result->close();
    $mysql->close();
}
