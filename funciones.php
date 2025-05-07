<?php
require 'conexion.php';
function intentarLogin($usuario, $clave) {
    global $conn;
    $sql = "SELECT * FROM Usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows == 1) {
        $user = $res->fetch_assoc();
        if ($user['estado'] === 'inactivo') return "Usuario bloqueado temporalmente";
        $_SESSION['usuario'] = $user['id_usuario'];
        $_SESSION['nombre'] = $user['nombre'] . " " . $user['apellido'];
        return true;
    } else {
        return "Credenciales inválidas";
    }
}
?>