<?php
// Carga el autoload de Composer
require __DIR__ . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

try {
    $nombre  = $_POST['nombre'] ?? '';
    $email   = $_POST['email'] ?? '';
    $mensaje = $_POST['mensaje'] ?? '';

    if (empty($nombre) || empty($email) || empty($mensaje)) {
        header("Location: contacto.php?mensaje=error");
        exit;
    }

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com'; 
    $mail->SMTPAuth   = true;
    $mail->Username   = 'moraadictos@gmail.com';
    $mail->Password   = 'bwnf zhzb fcen obxg'; 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    $mail->Port       = 587;

    $mail->setFrom('moraadictos@gmail.com', 'Moradictos');
    // Cambia esta dirección al correo donde QUIERES recibir los mensajes
    $mail->addAddress('moraadictos@gmail.com', 'Nombre Destinatario');
    $mail->Subject = 'Nuevo mensaje de Moradictos';

    $mail->isHTML(false);
    $cuerpo = "Nombre: $nombre\n";
    $cuerpo .= "Correo: $email\n";
    $cuerpo .= "Mensaje:\n$mensaje\n";
    $mail->Body = $cuerpo;

    $mail->send();

    header("Location: contacto.php?mensaje=exito");
    exit;

} catch (Exception $e) {
    header("Location: contacto.php?mensaje=error");
    exit;
}