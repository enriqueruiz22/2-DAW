<?php
session_start();

// Array de usuarios predefinidos
$usuarios = [
    'admin' => '12345',
    'usuario1' => 'clave1',
    'usuario2' => 'clave2'
];

$error = '';

// Manejar el formulario de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $clave = $_POST['clave'] ?? '';

    if (isset($usuarios[$usuario]) && $usuarios[$usuario] === $clave) {
        // Credenciales válidas
        $_SESSION['usuario'] = $usuario;
        header('Location: bienvenida.php');
        exit();
    } else {
        // Credenciales inválidas
        $error = 'Usuario o contraseña incorrectos';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <?php if ($error): ?>
            <p class="error"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Contraseña" required>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>