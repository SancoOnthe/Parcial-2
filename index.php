<?php
session_start();
require 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $login = intentarLogin($usuario, $clave);
    if ($login === true) {
        header("Location: dashboard.php");
        exit();
    } else {
        $mensaje = $login;
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
<h2>Login</h2>
<form method="POST">
    Usuario: <input type="text" name="usuario"><br>
    Clave: <input type="password" name="clave"><br>
    <button type="submit">Entrar</button>
</form>
<?php if (!empty($mensaje)) echo "<p>$mensaje</p>"; ?>
<p><a href="registro.php">Registrarse</a></p>
</body>
</html>