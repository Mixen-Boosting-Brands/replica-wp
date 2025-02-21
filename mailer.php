<?php
/**
 * PHPMailer multiple files upload and send
 */

// Create a custom debug log array to store messages
$debugLog = [];

// Custom function to capture debug info
function debugCapture($message)
{
    global $debugLog;
    $debugLog[] = $message;
}

// Include WordPress
require_once dirname(dirname(dirname(dirname(__FILE__)))) . "/wp-load.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check PHPMailer files
$phpmailer_files = [
    "./PHPMailer/PHPMailer.php",
    "./PHPMailer/SMTP.php",
    "./PHPMailer/Exception.php",
];
foreach ($phpmailer_files as $file) {
    if (!is_readable($file)) {
        debugCapture("PHPMailer file not readable: " . $file);
        die(
            json_encode([
                "success" => false,
                "message" => "Configuration error: Missing required files",
                "debug" => $debugLog,
            ])
        );
    }
}

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

// Debug settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Debugoutput = function ($str, $level) {
    debugCapture("Debug ($level): $str");
};

//Server settings
$mail->isSMTP();
$mail->Host = "smtp.hostinger.com";
$mail->SMTPAuth = true;
$mail->Username = "noreply@replicalt.com";
$mail->Password = "eFE8bt@jsuX8";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// Add SSL options
$mail->SMTPOptions = [
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false,
        "allow_self_signed" => true,
    ],
];

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
    debugCapture("Form data received: " . json_encode($_POST));

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
        // Test SMTP connection
        debugCapture("Testing SMTP connection...");
        if (!$mail->SmtpConnect()) {
            throw new Exception("SMTP connection failed: " . $mail->ErrorInfo);
        }
        debugCapture("SMTP connection successful");

        //Recipients
        $mail->setFrom("noreply@replicalt.com", "Replica Legal Translation");
        $mail->addAddress("luis.pando@mixen.mx");
        $mail->addReplyTo($correo, $nombre);

        // Handle file uploads
        if (
            isset($_FILES["userfile"]) &&
            !empty($_FILES["userfile"]["name"][0])
        ) {
            debugCapture("Processing file uploads...");
            foreach ($_FILES["userfile"]["tmp_name"] as $key => $tmp_name) {
                debugCapture(
                    "Processing file: " . $_FILES["userfile"]["name"][$key]
                );
                if ($_FILES["userfile"]["error"][$key] === UPLOAD_ERR_OK) {
                    $fileName = $_FILES["userfile"]["name"][$key];
                    $fileSize = $_FILES["userfile"]["size"][$key];
                    $fileType = $_FILES["userfile"]["type"][$key];

                    debugCapture(
                        "File details - Name: $fileName, Size: $fileSize, Type: $fileType"
                    );

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
                    debugCapture("File attached successfully: $fileName");
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

        debugCapture("Attempting to send email...");
        $mail->send();
        debugCapture("Email sent successfully");

        echo json_encode([
            "success" => true,
            "message" => safe_pll__(
                "Gracias por contactarnos. Nos pondremos en contacto contigo a la brevedad."
            ),
            "debug" => $debugLog,
        ]);
    } catch (Exception $e) {
        $errorDetails = [
            "error_message" => $e->getMessage(),
            "smtp_code" => $mail->SMTPDebug,
            "smtp_error" => $mail->ErrorInfo,
            "to_address" => $mail->getToAddresses(),
            "from_address" => $mail->From,
            "host" => $mail->Host,
        ];

        debugCapture("Error details: " . print_r($errorDetails, true));

        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => safe_pll__(
                "Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo."
            ),
            "error" => $mail->ErrorInfo,
            "debug" => $debugLog,
            "errorDetails" => $errorDetails,
        ]);
    }
} else {
    debugCapture("Required form fields missing");
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => safe_pll__(
            "Por favor, complete todos los campos requeridos."
        ),
        "debug" => $debugLog,
    ]);
}

// DNS check function
function checkDNS($domain)
{
    $records = dns_get_record($domain, DNS_MX + DNS_TXT);
    debugCapture("DNS Records for " . $domain . ": " . print_r($records, true));
    return $records;
}

// Check DNS and add to debug log
$dnsRecords = checkDNS("replicalt.com");
