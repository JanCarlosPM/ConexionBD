<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'conexion.php';
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $ubicacion = $_POST["ubicacion"];
    $my_query = "insert into facultad(nombre, descripcion, ubicacion) values('".$nombre."', '".$descripcion."', '".$ubicacion."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Registro guardado";
    }else{
        echo "Registro no guardado";
    }
}else{
    echo "Error desconocido";
}
?>