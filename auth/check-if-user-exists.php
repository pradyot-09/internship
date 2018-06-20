<?php
    include '../core/connect.php' ;
    $email=$_POST['email'];
    $res=mysql_query("select count(email) from user where email='$email'");
    if($res>=1)
    {
        echo "Cannot register";
    }
    else{
        echo "Continue";
    }
?>