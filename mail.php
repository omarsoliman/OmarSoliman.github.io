<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth() = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Post = '465';
    $mail->isHTML();
    $mail->Username = 'omar.solimann@gmail.com';
    $mail->Password = '011$0lim@n';
    $mail->SetFrom = 'info@soliman.com';
    $mail->Subject = 'Soliman Contact';
    $mail->Message = 'Test Message';
    $mail->AddAddress = 'omar.solimann@gmail.com';
    
    $mail->Send();

?>