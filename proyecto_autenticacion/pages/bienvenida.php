<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    header('Location: no-permisos.php');
    exit();
}

// Obtén el nombre del usuario y la hora actual
$usuario = $_SESSION['usuario'];
$hora = date('H:i:s');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Bienvenido, <?= htmlspecialchars($usuario) ?>!</h1>
        <p>La hora actual es: <?= $hora ?></p>
        <p>¡Esperamos que tengas un excelente día!</p>
        <a href="logout.php"><button>Cerrar Sesión</button></a>
    </div>
</body>
</html>