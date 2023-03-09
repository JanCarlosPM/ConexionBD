<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    require_once 'conexion.php';
    $codigoFac= $_GET["codigoFac"];
    $my_query = "select * from facultad
    where codigoFac = $codigoFac";
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
?>