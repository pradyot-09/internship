<?php


    session_start();
    header('Content-Type: application/json; charset=UTF-8'); 

     $_SESSION['emailotp']=rand(55555,66666);
require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
require '/usr/share/php/libphp-phpmailer/class.smtp.php';
$mail = new PHPMailer;
$mail->setFrom('vlabsteam@gmail.com');
$mail->addAddress($_POST['email']);
$mail->Subject = 'OTP .';
$mail->Body = "You are receiving this message from the <dumbest> guy at vlabs :) ".$_SESSION['emailotp'];
$mail->IsSMTP();
$mail->SMTPSecure = 'ssl';
$mail->Host = 'ssl://smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Port = 465;

//Set your existing gmail address as user name
$mail->Username = 'vlabsteam@gmail.com';

//Set the password of your gmail address here
$mail->Password = 'gitlabiscool';
$result=array();
if(!$mail->send()) {
	$result['status'] = 'error';
	$result['msg'] = 'Email is not sent.'. $mail->ErrorInfo;
} else {
	$result['status'] = 'success';
}
echo json_encode($result);

  ?>
