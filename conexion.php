<?php

$mysql = new mysqli("localhost", "root", "", "ucabd");
if($mysql->connect_error){
    echo "Error: ";
    die("Error de Conexion");
}else{
    echo "Conexion Exitosa";
}
?>