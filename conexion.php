<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "universidad";

$conexion = mysqli_connect($host, $user, $pass, $db);

if (!$conexion) {
    echo "Fallo la conexión";
}
?>

$conexion = new mysqli("localhost", "id21129834_mcf", "M24x09M03123!", "id21129834_publicaciones");