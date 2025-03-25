<?php
// Carga el autoload de Composer
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    // 1. Recibir datos del formulario
    $nombre  = $_POST['nombre'] ?? '';
    $email   = $_POST['email'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    // 2. Validar que no estén vacíos
    if (empty($nombre) || empty($email) || empty($mensaje)) {
        throw new Exception("Todos los campos son obligatorios.");
    }

    // 3. Configurar PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    // OJO: si tienes la verificación en 2 pasos, necesitas contraseña de aplicación
    $mail->Username   = 'salazarjocksan2005@gmail.com';
    $mail->Password   = 'vhja bctn qaej dwyn';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;

    // 4. Datos del correo
    $mail->setFrom('tu_correo@gmail.com', 'Tu Nombre o Empresa');
    $mail->addAddress('destinatario@ejemplo.com', 'Nombre Destinatario');
    $mail->Subject = 'Nuevo mensaje de contacto';

    // 5. Construir el cuerpo
    $mail->isHTML(false); 
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";
    $mail->Body = $cuerpo;

    // 6. Enviar
    $mail->send();
    echo "Mensaje enviado con éxito.";

} catch (Exception $e) {
    // Mostrar errores
    echo "Error al enviar el mensaje. Error: {$mail->ErrorInfo}";
}