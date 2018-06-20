<?php
 //echo "<option>Aleret</option>";
 include '../core/connect.php'; 
 $find=mysql_query();
 // echo "<option>'".$_POST['get_option']."'</option>";
 
		       $query = "CALL selectuniversity('".$_POST['get_option']."')";
       
	              if($check = mysql_query($query)){
	              //echo "Done";
	                while($value = mysql_fetch_assoc($check)){
	
	       ?> 
          <option> <?php echo $value['university'];?> </option>	

	<?php                
	          }
	      }

?>