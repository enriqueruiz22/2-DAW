<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];

    // Validación de campos obligatorios
    if (empty($_POST['nombre'])) {
        $errores[] = "El campo 'Nombre completo' es obligatorio.";
    }
    if (empty($_POST['email'])) {
        $errores[] = "El campo 'Correo electrónico' es obligatorio.";
    }
    if (empty($_POST['fecha_evento'])) {
        $errores[] = "El campo 'Fecha del evento' es obligatorio.";
    }
    if (empty($_POST['tipo_entrada'])) {
        $errores[] = "El campo 'Tipo de entrada' es obligatorio.";
    }
    if (empty($_POST['username'])) {
        $errores[] = "El campo 'Nombre de usuario' es obligatorio.";
    }
    if (empty($_POST['password'])) {
        $errores[] = "El campo 'Contraseña' es obligatorio.";
    }
    if (empty($_POST['confirm_password'])) {
        $errores[] = "El campo 'Confirmación de contraseña' es obligatorio.";
    }
    if (!isset($_POST['terminos'])) {
        $errores[] = "Debes aceptar los términos y condiciones.";
    }

    // Verificar que las contraseñas coincidan
    if (!empty($_POST['password']) && $_POST['password'] !== $_POST['confirm_password']) {
        $errores[] = "Las contraseñas no coinciden.";
    }

    // Mostrar resultados o errores
    if (empty($errores)) {
        echo "<h2>Datos del registro:</h2>";
        echo "<p>Nombre: " . htmlspecialchars($_POST['nombre']) . "</p>";
        echo "<p>Email: " . htmlspecialchars($_POST['email']) . "</p>";
        echo "<p>Fecha de Evento: " . htmlspecialchars($_POST['fecha_evento']) . "</p>";
        echo "<p>Tipo de Entrada: " . htmlspecialchars($_POST['tipo_entrada']) . "</p>";
        echo "<p>Nombre de Usuario: " . htmlspecialchars($_POST['username']) . "</p>";
        if (isset($_POST['comida'])) {
            echo "<p>Preferencias de Comida: " . implode(", ", $_POST['comida']) . "</p>";
        }
        echo "<p>Recibir Notificaciones: " . (isset($_POST['notificaciones']) ? 'Sí' : 'No') . "</p>";
        echo "<p>Calificación de Eventos Anteriores: " . htmlspecialchars($_POST['calificacion']) . "</p>";
        echo "<p>Comentarios: " . htmlspecialchars($_POST['comentarios']) . "</p>";
    } else {
        echo "<h2>Errores en el formulario:</h2>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        echo "<a href='formulario.html'>Volver al formulario</a>";
    }
}
?>