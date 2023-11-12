<?php
$host="localhost";
$user="root";
$passwd="";
$dbname = "BD_FERRETERIA";

$connection=@mysqli_connect($host, $user, $passwd, $dbname);
if (!$connection) {
    echo "Error de conexion";
}
?>