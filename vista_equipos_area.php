<?php
require '../conexion.php';
$sql = "SELECT * FROM vista_equipos_area";
$result = $conn->query($sql);
echo "<h2>Equipos por Área</h2><table border='1'><tr><th>Equipo</th><th>Marca</th><th>Área</th><th>Estado</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['nombre_equipo']}</td><td>{$row['marca']}</td><td>{$row['nombre_area']}</td><td>{$row['estado']}</td></tr>";
}
echo "</table><a href='../dashboard.php'>Volver</a>";
?>