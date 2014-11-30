<?php

require 'lib/phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->CharSet = 'UTF-8';
$mail->setFrom('webmaster@aromichev.ru', 'Сайт aromichev.ru');
$mail->addReplyTo('arctic.manic@gmail.com', 'First Last');
$mail->addAddress('arctic.manic@gmail.com', 'Anton Romichev');
$mail->addCC('arctic.manic@yandex.ru');

$mail->isHTML(true);

$mail->Subject = 'Сообщение с сайта aromichev.ru';
$mail->Body = "Имя: {$_POST['fio']}<br> Email: {$_POST['email']}<br> Сообщение: " . nl2br($_POST['message']);
$mail->AltBody = "Имя: {$_POST['fio']}\r\n Email: {$_POST['email']}\r\n Сообщение: {$_POST['message']}";
$mail->addAttachment('img/mailer.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}

?>