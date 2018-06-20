<?php


	
	function validateSpecialCharacter($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	  function validateAlphabates($str){
			$check = validateSpecialCharacter($str);
			if(empty($check)){
			//echo "<script>alert('Empty Field');</script>";
			}else{
			  if (!preg_match("/^[a-zA-Z ]*$/",$check)) {
			    // echo "<script>alert('Only Letter's Allowed');</script>";
			  }else{
//			  	   echo "Accept Alphabate";
			       return 1;          
			  }
			
			}
			
	  }

  
  	  function validateEmail($str){
			$check = validateSpecialCharacter($str);
			if(empty($check)){
			//echo "<script>alert('Empty Field');</script>";
			}else{
			  if (!filter_var($check, FILTER_VALIDATE_EMAIL)) {
    			//echo "<script>alert('Invalid Email');</script>";
			  }else{
//			        echo "Accept Email";
			       return 1;          

			  }
			
			}
			
	  }
	  
	  

  	  function validateMobile($str){
			$check = validateSpecialCharacter($str);
			if(empty($check)){
			//echo "<script>alert('Empty Field');</script>";
			}else{
			  if (!preg_match('/^[0-9]{12}$/', $str)) {
			  //      echo "<script>alert('Only Numberic Value Allowed');</script>";

//			     echo $nameErr;
			  }else{
			       // echo "Accept Mobile";
			       return 1;          
			  }
			
			}
			
	  }
	  
	  

  

  

?>