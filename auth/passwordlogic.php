<?php
////////php page that will send the mail to user account
//echo "Gaurav";
include '../core/connect.php';
@session_start();
header('Content-Type: application/json; charset=UTF-8');
$result=array();
// 
	// else{		
	if($_POST['captcha_code']==$_SESSION['captcha_code']){	
		$query = "select count(email) as email from user where email='".$_POST['email']."' and password='".$_POST['password']."'";
        if($check = mysql_query($query)){
            $value = mysql_fetch_assoc($check);

            if($value['email']==1){
                @session_start();
                $_SESSION['email'] = $_POST['email'];
                $result['status'] = 'success';
                $result['type'] = 'user_login';
            }  else {
                $query = "select count(email) as email from ldc where email='".$_POST['email']."' and password='".$_POST['password']."'";
                if($check = mysql_query($query)){
                    $value = mysql_fetch_assoc($check);
                    if($value['email']==1){
                        @session_start();
                        $_SESSION['email'] = $_POST['email'];
                        $result['status'] = 'success';
                        $result['type'] = 'ldc_login';
                    }else{

                    $result['status'] = 'error';
                    $result['msg'] = "Invalid password.";
                }
            }
        }
    }
}
     else {
	    $result['status'] = 'error';
        $result['msg'] = "Invalid captcha.";
    }
echo json_encode($result);

?>