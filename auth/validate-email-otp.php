<?php
    session_start();
    header('Content-Type: application/json; charset=UTF-8');    
     if($_POST['emailOtp']==$_SESSION['emailotp']){
        $result=array();
        $result['status'] = 'success';
        echo json_encode($result);
     }else{
        $result=array();
        $result['status'] = 'error';
        $result['msg'] = "Invalid OTP";
        echo json_encode($result);
     }
 ?>
