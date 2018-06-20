<?php
////////php page that will send the mail to user account
//echo "Gaurav";
include '../core/connect.php';
include '../core/validation.php';
header('Content-Type: application/json; charset=UTF-8');
	
	if (!validateEmail($_POST['get_option']) == 1) {
		$result['status'] = 'error';
        $result['msg'] = "Invalid email";
	} else {
		$query = "select count(email) as email from user where email='".$_POST['get_option']."'";
		header('Content-Type: application/json; charset=UTF-8');
	    $result=array();

		if($check = mysql_query($query)){
		    $value = mysql_fetch_assoc($check);
		    if ($value['email'] == 1) {
			    $result['status'] = 'success';
			} else {
				$query = "select count(email) as email from ldc where email='".$_POST['get_option']."'";
				if($check = mysql_query($query)){
					$value = mysql_fetch_assoc($check);
					if ($value['email'] == 1) {
						$result['status'] = 'success';
					} else{
						$result['status'] = 'error';
		        		$result['msg'] = "Email does not exist.";

					}
					
				}
				
			}
		}
	}
    echo json_encode($result);

?>