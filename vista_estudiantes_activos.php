<?php
require '../conexion.php';
$sql = "SELECT * FROM vista_estudiantes_activos";
$result = $conn->query($sql);
echo "<h2>Estudiantes Activos</h2><table border='1'><tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Email</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id_usuario']}</td><td>{$row['nombre']}</td><td>{$row['apellido']}</td><td>{$row['email']}</td></tr>";
}
echo "</table><a href='../dashboard.php'>Volver</a>";
?>