<?php
require '../conexion.php';
$sql = "SELECT * FROM vista_usuarios_bloqueados";
$result = $conn->query($sql);
echo "<h2>Usuarios Bloqueados</h2><table border='1'><tr><th>ID</th><th>Usuario</th><th>Razón</th><th>Fecha</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id_bloqueo']}</td><td>{$row['nombre']}</td><td>{$row['razon_bloqueo']}</td><td>{$row['fecha_bloqueo']}</td></tr>";
}
echo "</table><a href='../dashboard.php'>Volver</a>";
?>