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
	// get Imputs
	$name= filter_input(INPUT_POST, 'inputName');
	$email= filter_input(INPUT_POST, 'inputEmail');
	$phone= filter_input(INPUT_POST, 'inputTelefone');
	$data= filter_input(INPUT_POST, 'inputData');
	$time= filter_input(INPUT_POST, 'book_time');
	$numberOfPerson= filter_input(INPUT_POST, 'inputPessoa');
	if(empty($name) || empty($email) || empty($phone) || empty($data) || empty($time) || empty($numberOfPerson) ){
		return 'erro';
		exit;
	}
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP(True);
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'chongqinglisboa@gmail.com';
    $mail->Password = '968485955lisboa';
	$mail->Port = 587;

	$mail->setFrom($email);
	$mail->addAddress('chongqinglisboa@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = 'Reserva de Mesa';
	$mail->Body ='<strong>Informações do Reservante</strong>'.
				 '<p> <strong>Nome:</strong> '.$name.
				'</p> <p>Email: '.$email.
				'</p> <p> Telefone: '.$phone.
				'</p> </hr>'.
				'<p><strong>Data:</strong>'.$data.
				'</p> <p><strong>Hora:</strong>'.$time.
				'</p><p><strong>Número de Pessoas:</strong>'.$numberOfPerson.'</p>';
	$mail->AltBody = 'Chegou o email teste do Canal TI';

	if($mail->send()) {
		echo 'success';
	} else {
		echo 'error';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}