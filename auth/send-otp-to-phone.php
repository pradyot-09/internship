<?php

  
    session_start(); 
    header('Content-Type: application/json; charset=UTF-8');
    require __DIR__ . '/vendor/autoload.php';

    use sendotp\sendotp;
    $otp = new sendotp( '106928AtR690kUucCK56ddcd30','Your OTP for registration is {{otp}}. Please do not share it.');
    $otpa = $otp->generateOtp();
    $_SESSION['otp']=$otpa;
    $otp->send($_POST['phone'], 'MSGIND',$otpa);

    $result = array();
    $result['status'] = 'success';
    echo json_encode($result);

    // print_r($otp->retry('91998153xxxx','text'));
    // print_r($otp->verify('91998153xxxx', '3051'));
  
  ?>

