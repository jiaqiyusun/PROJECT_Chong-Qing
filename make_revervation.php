<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP(True);
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'ariclinis1@gmail.com';
    $mail->Password = '934641870Ariclinis1998';
	$mail->Port = 587;

	$mail->setFrom('ariclinis1@gmail.com');
	$mail->addAddress('ariclinis1@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = 'Teste de email via gmail Canal TI';
	$mail->Body = 'Chegou o email teste do <strong>Canal TI</strong>';
	$mail->AltBody = 'Chegou o email teste do Canal TI';

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}