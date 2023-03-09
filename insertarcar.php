<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    require_once 'conexion.php';
    $carrera = $_POST["carrera"];
    $descripcion = $_POST["descripcion"];
    $precio = $_POST["precio"];
    $codigoFac = $_POST["codigoFac"];
    $my_query = "insert into carrera(carrera, descripcion, precio, codigoFac) values('".$carrera."', '".$descripcion."', '".$precio."', '".$codigoFac."')";
    $result = $mysql -> query($my_query);
    if($result == true){
        echo "Carrera guardada";
    }else{
        echo "Carrera no guardado";
    }
}else{
    echo "Error desconocido";
}
?>