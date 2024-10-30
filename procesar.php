<?php
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$response = [];

if ($method == 'PATCH') {
    // Leer los datos JSON enviados
    $input = json_decode(file_get_contents("php://input"), true);
    
    // Datos simulados del usuario
    $usuario = [
        "email" => "usuario@ejemplo.com",
        "telefono" => "123456789",
        "ciudad" => "CiudadEjemplo"
    ];

    // Actualizar solo los campos proporcionados
    if (isset($input['email'])) $usuario['email'] = $input['email'];
    if (isset($input['telefono'])) $usuario['telefono'] = $input['telefono'];
    if (isset($input['ciudad'])) $usuario['ciudad'] = $input['ciudad'];

    $response['status'] = "success";
    $response['message'] = "Datos actualizados exitosamente (simulado)";
    $response['usuario_actualizado'] = $usuario;
} else {
    $response['status'] = "error";
    $response['message'] = "Método no soportado";
}

echo json_encode($response);
?>