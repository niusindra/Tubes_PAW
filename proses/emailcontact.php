<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../PHPMailer-master/src/Exception.php';
    require '../PHPMailer-master/src/PHPMailer.php';
    require '../PHPMailer-master/src/SMTP.php';
    require_once('../vendor/autoload.php');

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

    $mail->Send();


?>