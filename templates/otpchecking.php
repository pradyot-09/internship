<?php
if(isset($_POST['otp']))
{
$otp=$_POST['otp'];
$otref="123456";
if($otref==$otp){
echo "yes";
}
}
?>