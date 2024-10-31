<?php
header('Content-Type: application/json');

$usuarios = [
    ["id" => 1, "nombre" => "Juan", "apellidos" => "Pérez", "direccion" => "Calle A"],
    ["id" => 2, "nombre" => "Ana", "apellidos" => "García", "direccion" => "Calle B"],
    ["id" => 3, "nombre" => "Luis", "apellidos" => "Martínez", "direccion" => "Calle C"],
];

// Array de ejemplo para simular datos de clientes en una base de datos
$clientes = [
    ["id" => 1, "nombre" => "Carlos", "direccion" => "123 Main St", "ciudad" => "Madrid", "telefono" => "123456789"],
    ["id" => 2, "nombre" => "Lucia", "direccion" => "456 Side Rd", "ciudad" => "Barcelona", "telefono" => "987654321"]
];

session_start();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        if (isset($_GET['action']) && $_GET['action'] == 'login') {
            $contenido = file_get_contents('php://input');
            $datos = json_decode($contenido, true);

            if ($datos['username'] === 'admin' && $datos['password'] === '1234') {
                $_SESSION['loggedin'] = true;
                echo json_encode(["mensaje" => "Login exitoso"]);
            } else {
                http_response_code(401);
                echo json_encode(["error" => "Credenciales incorrectas"]);
            }
        } elseif (isset($_GET['action']) && $_GET['action'] == 'add_client') {
            // Agregar un nuevo cliente
            $contenido = file_get_contents('php://input');
            $nuevoCliente = json_decode($contenido, true);
            $nuevoCliente["id"] = end($clientes)['id'] + 1;  // Incrementa el ID
            $clientes[] = $nuevoCliente;
            echo json_encode(["mensaje" => "Cliente añadido con éxito"]);
        }
        break;

    case 'GET':
        if (isset($_GET['action']) && $_GET['action'] == 'list_clients') {
            // Listar clientes
            echo json_encode($clientes);
        }
        break;

    case 'DELETE':
        if (isset($_GET['action']) && $_GET['action'] == 'delete_client' && isset($_GET['id'])) {
            // Eliminar cliente por ID
            $clientes = array_filter($clientes, function($cliente) {
                return $cliente['id'] != $_GET['id'];
            });
            echo json_encode(["mensaje" => "Cliente eliminado con éxito"]);
        }
        break;
}
?>
