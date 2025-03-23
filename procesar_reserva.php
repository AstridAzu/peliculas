<?php

header('Content-Type: application/json');
require_once 'config.php'; // Incluir la configuración

$response = [];

// Verificar si la solicitud es POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y sanitizar los datos del formulario
    $nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $fecha = isset($_POST['fecha']) ? trim($_POST['fecha']) : '';

    // Validar datos
    if (empty($nombre) || empty($email) || empty($fecha)) {
        $response['error'] =  'Todos los campos son obligatorios.';
        echo json_encode($response);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['error'] = 'Correo electrónico no válido.';
        echo json_encode($response);
        exit;
    }

    // Preparar la consulta SQL segura
    $stmt = $conexion->prepare("INSERT INTO gta_vi (nombre, correo_electronico, fecha_reserva) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nombre, $email, $fecha);

    // Ejecutar la consulta y manejar errores
    if ($stmt->execute()) {
        $response['success'] = 'Reserva realizada con éxito.';
    } else {
        $response['error'] = 'Error al procesar la reserva.';
    }

    $stmt->close();
    $conexion->close();
} else {
    $response['error'] = 'Método no permitido.';
}

// Enviar respuesta en formato JSON
echo json_encode($response);

?>
