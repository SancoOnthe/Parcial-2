
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Principal</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f5f6fa;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #2f3640;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin: 30px;
        }
        .card {
            background-color: white;
            width: 250px;
            margin: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card a {
            text-decoration: none;
            color: #2f3640;
            display: block;
            padding: 20px;
            font-size: 18px;
            font-weight: bold;
        }
        .logout {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #e84118;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
        }
        .logout:hover {
            background-color: #c23616;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Bienvenido al Panel Principal</h1>
        <a class="logout" href="index.php">Cerrar sesión</a>
    </div>
    <div class="container">
        <div class="card"><a href="vistas/vista_estudiantes_activos.php">Estudiantes Activos</a></div>
        <div class="card"><a href="vistas/vista_inscripciones.php">Inscripciones</a></div>
        <div class="card"><a href="vistas/vista_equipos_area.php">Equipos por Área</a></div>
        <div class="card"><a href="vistas/vista_auditoria.php">Auditoría</a></div>
        <div class="card"><a href="vistas/vista_usuarios_bloqueados.php">Usuarios Bloqueados</a></div>
    </div>
</body>
</html>
