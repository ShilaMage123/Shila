<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $mail = new PHPMailer(true);

    try {
   $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; // or your mail server
    $mail->SMTPAuth = true;
    $mail->Username = 'shilamage2@gmail.com'; // your Gmail
    $mail->Password = 'bqiw oxfk sxnv fyqn'; // use app password (not Gmail password)
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender & recipient
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('shilamage2@gmail.com'); // where to receive form

        $mail->isHTML(false);
        $mail->Subject = "Portfolio Contact: " . $_POST['subject'];
        $mail->Body    = 
"Name: {$_POST['name']}
Email: {$_POST['email']}
Phone: {$_POST['phone']}

Message:
{$_POST['message']}";

        $mail->send();
        echo "success";

    } catch (Exception $e) {
        echo "error";
    }
}
?>
