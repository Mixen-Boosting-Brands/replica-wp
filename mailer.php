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

// Get current language
$current_language = function_exists("pll_current_language")
    ? pll_current_language()
    : "es";

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

// Your SMTP settings...

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
    // Sanitize fields...

    try {
        // File handling...
        if (
            isset($_FILES["userfile"]) &&
            !empty($_FILES["userfile"]["name"][0])
        ) {
            foreach ($_FILES["userfile"]["tmp_name"] as $key => $tmp_name) {
                if ($_FILES["userfile"]["error"][$key] === UPLOAD_ERR_OK) {
                    $fileName = $_FILES["userfile"]["name"][$key];
                    $fileSize = $_FILES["userfile"]["size"][$key];
                    $fileType = $_FILES["userfile"]["type"][$key];

                    if ($fileSize > 10000000) {
                        throw new Exception(
                            pll__(
                                "El archivo es demasiado grande. Máximo 10MB."
                            )
                        );
                    }

                    // Validate file type...
                    $allowedTypes = [
                        "application/pdf",
                        "application/msword",
                        "application/vnd.openxmlformats-officedocument.wordprocessingml.document",
                    ];
                    if (!in_array($fileType, $allowedTypes)) {
                        throw new Exception(
                            pll__(
                                "Tipo de archivo no permitido. Solo se permiten archivos .doc y .pdf"
                            )
                        );
                    }

                    $mail->addAttachment($tmp_name, $fileName);
                }
            }
        }

        // Email content
        $mail->isHTML(true);
        $mail->Subject =
            pll__("Nueva solicitud de traducción de") . " " . $nombre;

        // Build message body with translations
        $mail->Body =
            "
            <strong>" .
            pll__("Información del solicitante") .
            ":</strong><br>
            " .
            pll__("Nombre") .
            ": {$nombre}<br>
            " .
            pll__("Teléfono") .
            ": {$telefono}<br>
            " .
            pll__("Correo electrónico") .
            ": {$correo}<br>
            <br>
            <strong>" .
            pll__("Información de la traducción") .
            ":</strong><br>
            " .
            pll__("Idioma nativo") .
            ": {$idiomaNativo}<br>
            " .
            pll__("Idioma meta") .
            ": {$idiomaMeta}<br>
            " .
            pll__("Fecha de entrega solicitada") .
            ": {$fechaEntrega}<br>
            <br>
            <strong>" .
            pll__("Comentarios") .
            ":</strong><br>
            {$comentarios}<br>";

        $mail->send();
        echo json_encode([
            "success" => true,
            "message" => pll__(
                "Gracias por contactarnos. Nos pondremos en contacto contigo a la brevedad."
            ),
        ]);
    } catch (Exception $e) {
        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" =>
                pll__(
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
        "message" => pll__("Por favor, complete todos los campos requeridos."),
    ]);
}
