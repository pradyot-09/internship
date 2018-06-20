<?php
////////php page that will check email otp  from database
if(isset($_POST['emailOtp']))
{
$email=$_POST['emailOtp'];
// apply mail function here and send "OtpVerified" to client when mail is sended 
echo "OtpVerified"; 
}
?>