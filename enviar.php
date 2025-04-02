<?php
// Carga el autoload de Composer
require __DIR__ . '/vendor/autoload.php';

// Cargar las variables de entorno desde el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load(); // Esto carga las variables en $_ENV y $_SERVER


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
    // Usar $_ENV en lugar de getenv()
    $mail->Username   = $_ENV['MAIL_USERNAME'];
    $mail->Password   = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Usar $_ENV aquí también
    $mail->setFrom($_ENV['MAIL_USERNAME'], 'Moradictos');
    $mail->addAddress($_ENV['MAIL_USERNAME'], 'Nombre Destinatario');
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
    // Para debugging, podrías loggear el error:
    // error_log($e->getMessage());
    header("Location: contacto.php?mensaje=error");
    exit;
}
