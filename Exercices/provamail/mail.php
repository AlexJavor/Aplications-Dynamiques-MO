<?php
require_once('PHPMailer/PHPMailerAutoload.php');

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->STMPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '465';
$mail->isHTML();
$mail->Username = 'aleksanjavor@gmail.com';
$mail->Password = 'Bmfyboesf15.,;';
$mail->SetFrom('aleksanjavor@gmail.com');
$mail->Subject = 'Hello World';
$mail->Body = 'A test email!';
$mail->AddAddress('alexjavor14@gmail.com');

$mail->Send();
?>