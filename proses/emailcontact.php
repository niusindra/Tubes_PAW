<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-6.0.3/src/Exception.php';
    require 'PHPMailer-6.0.3/src/PHPMailer.php';
    require 'PHPMailer-6.0.3/src/SMTP.php';

    $mail= new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth= true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->isHTML();
    $mail->Username= 'daveylombardo@gmail.com';
    $mail->Password= 'Halohalo1!';
    $mail->SetFrom('no-reply@barbarbershop.com');
    $mail->Subject= 'Email Verification';
    $mail->Body= 'A test email';
    $mail->AddAddress('niusindra@gmail.com');

    if($mail->Send()) {
        echo 'success';
    }


?>