<?php


   if(isset($_POST['save'])){
      //echo "At Request".$_POST['gk'] ;
      $errors= array();
      
      $file_name_story = $_FILES['story_board']['name'];
      $file_size_story =$_FILES['story_board']['size'];
      $file_tmp_story =$_FILES['story_board']['tmp_name'];
      $file_type_story=$_FILES['story_board']['type'];
      
      $file_name_mind = $_FILES['mind_map']['name'];
      $file_size_mind =$_FILES['mind_map']['size'];
      $file_tmp_mind =$_FILES['mind_map']['tmp_name'];
      $file_type_mind=$_FILES['mind_map']['type'];
      
      $file_name_flow = $_FILES['flow_chart']['name'];
      $file_size_flow =$_FILES['flow_chart']['size'];
      $file_tmp_flow =$_FILES['flow_chart']['tmp_name'];
      $file_type_flow=$_FILES['flow_chart']['type'];
      
      //$file_extension =$_FILES['image'][type];
  //    $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
//      echo "<br>Fname : ".$file_name_s."<hr>";
    /*  $expensions= array("jpeg","jpg","png","pdf","mm");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }

      echo "At Request 1";      
     if($file_size > 2097152000){
         $errors[]='File size must be excately 2 MB';
      }
            echo "At Request 2";*/


      
      if(empty($errors)==true){
      
         move_uploaded_file($file_tmp_story,"doc/lab_101/ex_1/".$file_name_story);
         move_uploaded_file($file_tmp_mind,"doc/lab_101/ex_1/".$file_name_mind);
         move_uploaded_file($file_tmp_flow,"doc/lab_101/ex_1/".$file_name_flow);
         echo "Sucessfully Upload";
      }else{
         print_r($errors);
      }
  }
 
   
?>
