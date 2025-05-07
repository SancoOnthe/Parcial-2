<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "mi_base_de_datos";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>