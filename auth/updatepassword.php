<?php
    include '../core/connect.php';
    $email=$_SESSION['email'];
    $password=$_POST['password'];
    $i=mysql_query("update user set password='$password' where email='$email'");
    echo $i." row updated";
?>