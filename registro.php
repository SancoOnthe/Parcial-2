<?php
require 'conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $clave = password_hash($_POST['clave'], PASSWORD_DEFAULT);
    $sql = "INSERT INTO Usuarios (nombre, apellido, documento_identidad, tipo_usuario, email, estado)
            VALUES (?, ?, ?, 'estudiante', ?, 'activo')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $apellido, $documento, $email);
    $stmt->execute();
    echo "Usuario registrado. <a href='index.php'>Iniciar sesión</a>";
}
?>
<form method="POST">
    Nombre: <input name="nombre"><br>
    Apellido: <input name="apellido"><br>
    Documento: <input name="documento"><br>
    Email: <input name="email"><br>
    Clave: <input type="password" name="clave"><br>
    <button type="submit">Registrar</button>
</form>