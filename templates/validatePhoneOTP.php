<?php
////////php page that will send phone otp 
if(isset($_POST['phoneotp']))
{
$phoneOtp=$_POST['phoneotp'];
// apply mail function here and send "OtpSended" to client when mail is sended 
echo "OtpVerified"; 
}
?>