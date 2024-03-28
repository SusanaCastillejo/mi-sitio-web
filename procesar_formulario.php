<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera el correo electrónico ingresado por el usuario
    $email = $_POST["email"];

    // Dirección de correo electrónico a la que se enviará el mensaje
    $destinatario = "tucorreo@example.com";

    // Asunto del correo electrónico
    $asunto = "Nuevo correo electrónico ingresado";

    // Mensaje a enviar
    $mensaje = "Se ha recibido un nuevo correo electrónico: $email";

    // Cabeceras adicionales
    $cabeceras = "From: webmaster@example.com" . "\r\n" .
                 "Reply-To: webmaster@example.com" . "\r\n" .
                 "X-Mailer: PHP/" . phpversion();

    // Envía el correo electrónico
    mail($destinatario, $asunto, $mensaje, $cabeceras);

    // Redirecciona al usuario a una página de confirmación
    header("Location: confirmacion.html");
    exit;
}
?>
