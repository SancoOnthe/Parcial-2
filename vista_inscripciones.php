<?php
require '../conexion.php';
$sql = "SELECT * FROM vista_inscripciones";
$result = $conn->query($sql);
echo "<h2>Inscripciones</h2><table border='1'><tr><th>ID Inscripción</th><th>Usuario</th><th>Curso</th><th>Fecha</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>{$row['id_inscripcion']}</td><td>{$row['nombre_usuario']}</td><td>{$row['nombre_curso']}</td><td>{$row['fecha_inscripcion']}</td></tr>";
}
echo "</table><a href='../dashboard.php'>Volver</a>";
?>