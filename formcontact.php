<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer classes directly
require 'libs/PHPMailer/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/PHPMailer/src/SMTP.php';

$errors = [];
$fields = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $tel = sanitizeInput($_POST['tel']);
    $options = isset($_POST['options']) ? implode(', ', $_POST['options']) : '';
    $message = sanitizeInput($_POST['message']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($tel) || empty($message)) {
        $errors[] = 'All fields are required.';
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format.';
    }

    // If no errors, proceed with sending email
    if (empty($errors)) {
        // Create a new PHPMailer instance
        $mail = new PHPMailer(true); // Passing true enables exceptions

        try {
            // Enable debugging output
            $mail->SMTPDebug = 2; // 2 for detailed debugging output
            $mail->Debugoutput = function ($str, $level) {
                echo "DEBUG: $str\n";
            };

            // Server settings (replace with your GoDaddy SMTP settings)
            $mail->isSMTP();
            $mail->Host       = 'smtpout.secureserver.net';
            $mail->SMTPAuth   = true;
            $mail->Username   = ''; // Replace with your GoDaddy email address
            $mail->Password   = '';    // Replace with your GoDaddy email password
            $mail->SMTPSecure = ''; // Use 'ssl' for SSL connection
            $mail->Port       = 25; // Port for SSL connection 465

            // Sender and recipient settings
            $mail->setFrom($email, $name);
            $mail->addAddress('info@swindiatours.com', 'SwIndiaTours'); // Replace with recipient information

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Form Submission - Airport Pickup & Drop';
            $mail->Body    = "Name: $name<br>Email: $email<br>Mobile No.: $tel<br>Options: $options<br>Message: $message";

            // Send the email
            $mail->send();
            echo 'Message sent successfully';
        } catch (Exception $e) {
            echo "Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

// Function to sanitize form input
function sanitizeInput($input)
{
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}
?>
