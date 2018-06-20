<?php
  $web = "localhost";
  $user = "root";
  $pass = "";
  
  if(!mysql_connect($web,$user,$pass)){
     die("unable to connect");
  }else{

//  echo "Connected sucessful";
 // echo "cpnnected sucessful";

     if(mysql_select_db('dbvlabdev')){
	//	echo"database selected sucessfully";
	 }
  
  }
?>
