<?php
/*echo uniqid();
echo "<br>";*/
$rno;
session_start();
$_SESSION['email'] ;
$_SESSION['otp']=$rno;
echo $rno;
	if(isset($_POST['bemail'])){
	  include 'validation.php';
	  include 'connect.php';
	  $rno = rand ( 55555 , 65555);
	   echo "ME CALL";
	   $_SESSION['email']=$_POST['email'];
	
	   echo "Sucess";
	 }
   }


	if(isset($_POST['botp'])){

    
      echo "".$_SESSION['email'];
    

	}
