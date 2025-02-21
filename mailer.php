<?php
/**
 * PHPMailer multiple files upload and send
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include WordPress
require_once dirname(dirname(dirname(dirname(__FILE__)))) . "/wp-load.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if PHPMailer files are readable
$phpmailer_files = ["./PHPMailer/PHPMailer.php", "./PHPMailer/SMTP.php", "./PHPMailer/Exception.php"];
foreach ($phpmailer_files as $file) {
    if (!is_readable($file)) {
        error_log('PHPMailer file not readable: ' . $file);
        die(json_encode([
            'success' => false,
            'message' => 'Configuration error: Missing required files'
        ]));
    }
}

require "./PHPMailer/PHPMailer.php";
require "./PHPMailer/SMTP.php";
require "./PHPMailer/Exception.php";

// Rest of your functions...
[Previous functions remain the same]

$mail = new PHPMailer(true);
$mail->CharSet = "UTF-8";

// Add debug settings
$mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
$mail->Debugoutput = function($str, $level) {
    error_log("PHPMailer: $level - $str");
}; // Log debug output

//Server settings
$mail->isSMTP();
$mail->Host = "smtp.hostinger.com";
$mail->SMTPAuth = true;
$mail->Username = "noreply@replicalt.com";
$mail->Password = "eFE8bt@jsuX8";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

// Add SSL options for troubleshooting
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

if (isset($_POST["nombre"]) && isset($_POST["correo"])) {
    // Your existing sanitization code remains the same...

    try {
        // Test SMTP connection before proceeding
        if (!$mail->SmtpConnect()) {
            throw new Exception('SMTP connection failed: ' . $mail->ErrorInfo);
        }

        // Your existing recipients and content code remains the same...

        // Before sending, log the attempt
        error_log('Attempting to send email to: ' . $mail->getToAddresses()[0][0]);

        $mail->send();
        error_log('Email sent successfully');

        echo json_encode([
            "success" => true,
            "message" => safe_pll__(
                "Gracias por contactarnos. Nos pondremos en contacto contigo a la brevedad."
            ),
        ]);
    } catch (Exception $e) {
        error_log('Mailer Error: ' . $e->getMessage());

        // Get detailed error information
        $errorDetails = [
            'error_message' => $e->getMessage(),
            'smtp_code' => $mail->SMTPDebug,
            'smtp_error' => $mail->ErrorInfo,
            'debug_output' => $mail->Debugoutput,
            'to_address' => $mail->getToAddresses(),
            'from_address' => $mail->From,
            'host' => $mail->Host,
        ];

        error_log('Detailed Error Info: ' . print_r($errorDetails, true));

        http_response_code(400);
        echo json_encode([
            "success" => false,
            "message" => safe_pll__(
                "Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo."
            ),
            "error" => $mail->ErrorInfo,
            "debug" => $errorDetails
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

// Function to check DNS records (add at the end of file)
function checkDNS($domain) {
    $records = dns_get_record($domain, DNS_MX + DNS_TXT);
    error_log('DNS Records for ' . $domain . ': ' . print_r($records, true));
    return $records;
}

// Check DNS records for your domain
checkDNS('replicalt.com');
