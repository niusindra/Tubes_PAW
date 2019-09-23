<?php
    isset($_POST['submit']);
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer-6.0.3/src/Exception.php';
    require 'PHPMailer-6.0.3/src/PHPMailer.php';
    require 'PHPMailer-6.0.3/src/SMTP.php';

    $receiver= $_POST['email'];
    $subject= $_POST['subject'];
    $body= $_POST['message'];

    $mail= new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth= true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->isHTML();
    $mail->Username= 'daveylombardo@gmail.com';
    $mail->Password= 'Halohalo1!';
    $mail->SetFrom($receiver);
    $mail->Subject= "From: ".$receiver;
    $mail->Body= $subject." - ".$body;
    $mail->AddAddress("barbarbershoponline@gmail.com");

    if($mail->Send()) {
        echo 'Thank you for the feedback :D';
    }


?>