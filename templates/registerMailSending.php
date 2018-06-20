<?php
////////php page that will send the mail to user account
if(isset($_POST['email']))
{
$email=$_POST['email'];
// apply mail function here and send "OtpSended" to client when mail is sended 
echo "OtpSended"; 
}
?>