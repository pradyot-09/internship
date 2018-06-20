<?php

include '../core/connect.php';
include '../core/validation.php';
//echo ''.$_POST['des'];

// echo "<script>console.log('Hello there');</script>";
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $email=$_POST['email'];
 $password=$_POST['pass'];
 $cnf=$_POST['confpass'];
 $login_type="PIC";
 $institute=$_POST['pic'];
 $department=$_POST['department'];
 $designation=$_POST['designation'];
 $phone=$_POST['phone_no'];
 

 if($password==$cnf){
	  $gc=1;
	  if(validateAlphabates($fname)!=1){
	     $gc=0;
	     $error = $error.'Invalid First Name';
	  }else if(validateAlphabates($lname)!=1){
	    $gc=0;
	     $error = $error.'Invalid Last Name';
	  }else if(validateAlphabates($department)!=1){
	    $gc=0;
	     $error = $error.'Invalid Department Name';
	  }else if(validateAlphabates($institute)!=1){
	    $gc=0;
	     $error = $error.'Invalid PIC Name';
	  }else if(validateEmail($email)!=1){
	    $gc=0;
	     $error = $error.'Invalid Email';
	  }else if(validateMobile($phone)!=1){
	   $gc=0;
	     $error = $error.'Invalid Mobile';
	  }
     if($gc==1){
		 $query="call procSignupUser('".$fname."', '".$lname."', '".$email."','".$password."','". $login_type."', '".$institute."','".$department."','".$designation."',".$phone.",'".$presiding_pic."');";
		 $check = mysql_query($query);
	     $result['status'] = 'success';
         header("Location: login.php");

	 }else{
	 		     $result['status'] = 'error';
	 		     $result['msg'] = $error;
	 }
	 }else{
		     $error = $error.'Password and Confirm Password Not Match';
		     $result['msg'] = $error;
 }
    echo json_encode($result);


?>