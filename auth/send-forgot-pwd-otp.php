<?php

    require __DIR__ . '/vendor/autoload.php';

    use sendotp\sendotp;
    session_start(); 
    $otp = new sendotp( '106928AtR690kUucCK56ddcd30','Your OTP for registration is {{otp}}. Please do not share it.');
     $otpa = $otp->generateOtp();
     $_SESSION['otp']=$otpa;
     print_r($otp->send($_POST['phone'], 'MSGIND',$otpa));


	require '/usr/share/php/libphp-phpmailer/class.phpmailer.php';
	require '/usr/share/php/libphp-phpmailer/class.smtp.php';
	$mail = new PHPMailer;
	$mail->setFrom('vlabsteam@gmail.com');
	$mail->addAddress($_POST['email']);
	$mail->Subject = 'OTP .';
	$mail->Body = "You are receiving this message from the <dumbest> guy at vlabs :) ".$_SESSION['otp'];
	$mail->IsSMTP();
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'ssl://smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Port = 465;

	//Set your existing gmail address as user name
	$mail->Username = 'vlabsteam@gmail.com';

	//Set the password of your gmail address here
	$mail->Password = 'gitlabiscool';
	if(!$mail->send()) {
	  echo 'Email is not sent.';
	  echo 'Email error: ' . $mail->ErrorInfo;
	} else {
	  echo 'Email has been sent.';
	}


  ?>
