<?php
header('Content-Type: application/json');

// Configuración
$destinatario = "salazarjocksan2005@gmail.com"; // Cambia esto
$asunto = "Mensaje desde la web de Saprissa";

// Validar datos
if (empty($_POST['nombre']) || empty($_POST['email']) || empty($_POST['mensaje'])) {
    echo json_encode(['success' => false, 'message' => 'Todos los campos son obligatorios.']);
    exit;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Correo electrónico no válido.']);
    exit;
}

// Sanitizar datos
$nombre = htmlspecialchars($_POST['nombre']);
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$mensaje = htmlspecialchars($_POST['mensaje']);

// Construir el correo
$contenido = "Nombre: $nombre\n";
$contenido .= "Email: $email\n\n";
$contenido .= "Mensaje:\n$mensaje";

$headers = "From: $nombre <$email>";

// Enviar correo
$envioExitoso = mail($destinatario, $asunto, $contenido, $headers);

if ($envioExitoso) {
    echo json_encode(['success' => true, 'message' => '¡Mensaje enviado con éxito!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Error al enviar. Intenta nuevamente.']);
}
?>