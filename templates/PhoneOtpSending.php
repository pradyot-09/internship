<?php
////////php page that will send phone otp 
if(isset($_POST['phone']))
{
$email=$_POST['phone'];
// apply mail function here and send "OtpSended" to client when mail is sended 
echo "OtpSended"; 
}
?>