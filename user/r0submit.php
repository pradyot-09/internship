<?php
    include '../core/connect.php';
    session_start();
    header('Content-Type: application/json; charset=UTF-8');
    $result=array();
    $lab_id=$_SESSION['lab_id'];
    $email=$_SESSION['email'];
    $res=mysql_query("select user_id from user where email='$email'");
    $uid=mysql_fetch_assoc($res)['user_id'];
    $lab_name=$_POST['lab_name'];
     $objective=$_POST['objective'];
     $discipline=$_POST['discipline'];
     $state=$_POST['state'];
     $university=$_POST['university'];
     $target_group=$_POST['target_group'];
     $virtualintent = $_POST['virtualintent'];
     $feeloflab = $_POST['feeloflab'];
     $animationuse = $_POST['animationuse'];
     $manual=$_POST['manual'];
     $proceduredoc=$_POST['proceduredoc'];
     $resources=$_POST['resources'];
     $addhelp=$_POST['addhelp'];
     $quiz=$_POST['quiz'];
     $webui=$_POST['webui'];
     $backend_tech=$_POST['backend_tech'];
     $misc_tech=$_POST['misc_tech'];
     $manualOC=$_POST['manualOC'];
     $hwswOC=$_POST['hwswOC'];
     $learning_component=$_POST['learning_component'];
     $stud_ability=$_POST['stud_ability'];
     $expid=$_SESSION['expidarr'];
     for($i=0;$i<sizeof($expid);$i++){
            $exp_name=$_POST['exp_name'.$i];
            $exp_id=$expid[$i];
            mysql_query("update experiment set exp_name='$exp_name' where exp_id='$exp_id'");
        }
     mysql_query("call r0_submit('$objective', '$webui', '$backend_tech', '$misc_tech', '$virtualintent', '$feeloflab','$animationuse', '$manualOC', '$hwswOC', '$learning_component', '$stud_ability', '$discipline', '$target_group', '$state', '$university', '$manual', '$proceduredoc', '$resources', '$addhelp', '$quiz', '$uid', '$lab_id', '$lab_name')");
     mysql_query("call r0status('$lab_id', '$user_id')");

    $result['status'] = 'success';
        
    echo json_encode($result);
?>