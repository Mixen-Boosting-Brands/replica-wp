<?php
/**
 * PHPMailer multiple files upload and send
 */

// Include WordPress
require_once dirname(dirname(dirname(dirname(__FILE__)))) . "/wp-load.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

// Fallback function for Polylang translations
function safe_pll__($string)
{
    if (function_exists("pll__")) {
        return pll__($string);
    }
    return $string;
}

// Get current language
$current_language = function_exists("pll_current_language")
    ? pll_current_language()
    : "es";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

//Server settings
$mail->isSMTP();
$mail->Host = "smtp.hostinger.com"; // Your SMTP host
$mail->SMTPAuth = true;
$mail->Username = "noreply@yourdomain.com"; // Your SMTP username
$mail->Password = "your-smtp-password"; // Your SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
    // Sanitize all fields
    $nombre = strip_tags(trim($_POST["nombre"]));
    $correo = filter_var(trim($_POST["correo"]), FILTER_SANITIZE_EMAIL);
    $telefono = strip_tags(trim($_POST["telefono"]));
    $idiomaNativo = strip_tags(trim($_POST["idioma-nativo"]));
    $idiomaMeta = strip_tags(trim($_POST["idioma-meta"]));
    $fechaEntrega = strip_tags(trim($_POST["fecha-entrega"]));
    $comentarios = strip_tags(trim($_POST["comentarios"]));

    // Remove line breaks
    $nombre = str_replace(["\r", "\n"], [" ", " "], $nombre);
    $comentarios = str_replace(["\r", "\n"], [" ", " "], $comentarios);

    try {
        //Recipients
        $mail->setFrom("noreply@yourdomain.com", "Translation Service");
        $mail->addAddress("your-email@domain.com"); // Where to receive the form submissions
        $mail->addReplyTo($correo, $nombre);

        // Handle file uploads
        if (
            isset($_FILES["userfile"]) &&
            !empty($_FILES["userfile"]["name"][0])
        ) {
            foreach ($_FILES["userfile"]["tmp_name"] as $key => $tmp_name) {
                if ($_FILES["userfile"]["error"][$key] === UPLOAD_ERR_OK) {
                    $fileName = $_FILES["userfile"]["name"][$key];
                    $fileSize = $_FILES["userfile"]["size"][$key];
                    $fileType = $_FILES["userfile"]["type"][$key];

                    // Validate file size (10MB limit)
                    if ($fileSize > 10000000) {
                        throw new Exception(
                            safe_pll__(
                                "El archivo es demasiado grande. Máximo 10MB."
                            )
                        );
                    }

                    // Validate file type
                    $allowedTypes = [
                        "application/pdf",
                        "application/msword",
                        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                    ];
                    if (!in_array($fileType, $allowedTypes)) {
                        throw new Exception(
                            safe_pll__(
                                "Tipo de archivo no permitido. Solo se permiten archivos .doc y .pdf"
                            )
                        );
                    }

                    // Add attachment
                    $mail->addAttachment($tmp_name, $fileName);
                }
            }
        }

        //Content
        $mail->isHTML(true);
        $mail->Subject =
            safe_pll__("Nueva solicitud de traducción de") . " " . $nombre;

        // Build message body
        $mail->Body =
            "
            <strong>" .
            safe_pll__("Información del solicitante") .
            ":</strong><br>
            " .
            safe_pll__("Nombre") .
            ": {$nombre}<br>
            " .
            safe_pll__("Teléfono") .
            ": {$telefono}<br>
            " .
            safe_pll__("Correo electrónico") .
            ": {$correo}<br>
            <br>
            <strong>" .
            safe_pll__("Información de la traducción") .
            ":</strong><br>
            " .
            safe_pll__("Idioma nativo") .
            ": {$idiomaNativo}<br>
            " .
            safe_pll__("Idioma meta") .
            ": {$idiomaMeta}<br>
            " .
            safe_pll__("Fecha de entrega solicitada") .
            ": {$fechaEntrega}<br>
            <br>
            <strong>" .
            safe_pll__("Comentarios") .
            ":</strong><br>
            {$comentarios}<br>
            <br>
            " .
            safe_pll__(
                "Este mensaje fue enviado a través del formulario de solicitud de traducción."
            );

        // Plain text version
        $mail->AltBody = strip_tags(str_replace("<br>", "\n", $mail->Body));

        $mail->send();
        echo json_encode([
            "success" => true,
            "message" => safe_pll__(
                "Gracias por contactarnos. Nos pondremos en contacto contigo a la brevedad."
            ),
        ]);
    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" =>
                safe_pll__(
                    "Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo."
                ) .
                " Error: " .
                $mail->ErrorInfo,
        ]);
    }
} else {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => safe_pll__(
            "Por favor, complete todos los campos requeridos."
        ),
    ]);
}
