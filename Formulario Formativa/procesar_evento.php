<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombreCompleto = $_POST['nombreCompleto'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $genero = $_POST['genero'];
    $fechaEvento = $_POST['fechaEvento'];
    $tipoEntrada = $_POST['tipoEntrada'];
    $comida = isset($_POST['comida']) ? implode(", ", $_POST['comida']) : "Sin preferencias";
    $nombreUsuario = $_POST['nombreUsuario'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $notificaciones = isset($_POST['notificaciones']) ? "Sí" : "No";
    $terminos = isset($_POST['terminos']) ? "Aceptado" : "No aceptado";
    $calificacion = $_POST['calificacion'];
    $comentarios = $_POST['comentarios'];

    // Mostrar los datos recibidos
    echo "<h2>Datos recibidos del formulario:</h2>";
    echo "Nombre Completo: $nombreCompleto<br>";
    echo "Correo Electrónico: $email<br>";
    echo "Teléfono: $telefono<br>";
    echo "Fecha de Nacimiento: $fechaNacimiento<br>";
    echo "Género: $genero<br>";
    echo "Fecha del Evento: $fechaEvento<br>";
    echo "Tipo de Entrada: $tipoEntrada<br>";
    echo "Preferencias de Comida: $comida<br>";
    echo "Nombre de Usuario: $nombreUsuario<br>";
    echo "¿Desea recibir notificaciones?: $notificaciones<br>";
    echo "Aceptación de Términos: $terminos<br>";
    echo "Calificación de Eventos Anteriores: $calificacion<br>";
    echo "Comentarios Adicionales: $comentarios<br>";
} else {
    echo "Método de envío no válido.";
}
?>
