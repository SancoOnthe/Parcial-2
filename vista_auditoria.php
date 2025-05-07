<?php
require '../conexion.php';
$sql = "SELECT * FROM vista_auditoria";
$result = $conn->query($sql);
echo "<h2>Auditoría</h2><table border='1'><tr><th>ID</th><th>Operación</th><th>Descripción</th><th>Fecha</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id_auditoria']}</td><td>{$row['operacion']}</td><td>{$row['descripcion']}</td><td>{$row['fecha_operacion']}</td></tr>";
}
echo "</table><a href='../dashboard.php'>Volver</a>";
?>