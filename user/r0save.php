<?php
    include '../core/connect.php';
    session_start();
    header('Content-Type: application/json; charset=UTF-8');    
    $tab = $_POST['section'];
    $lab_id=$_SESSION['lab_id'];
    if($tab == "introduction"){
        $lab_name=$_POST['lab_name'];
        $objective=$_POST['objective'];
        $discipline=$_POST['discipline'];
        $state=$_POST['state'];
        $university=$_POST['university'];
        $target_group=$_POST['target_group'];
        $expid=$_SESSION['expidarr'];
        for($i=0;$i<sizeof($expid);$i++){
            $exp_name=$_POST['exp_name'.$i];
            $exp_id=$expid[$i];
            mysql_query("update experiment set exp_name='$exp_name' where exp_id='$exp_id'");
        }
        mysql_query("call r0_intro_save('$lab_id', '$discipline', '$target_group', '$state', '$university', '$lab_name', '$objective')");
        }

    if($tab == "virtualization"){
        $virtualintent = $_POST['virtualintent'];
        $feeloflab = $_POST['feeloflab'];
        $animationuse = $_POST['animationuse'];
        mysql_query("call r0_virtual_save('$lab_id', '$virtualintent', '$feeloflab', ''$animationuse)");
    }

    if($tab == "documentation"){
        $manual=$_POST['manual'];
        $proceduredoc=$_POST['proceduredoc'];
        $resources=$_POST['resources'];
        $addhelp=$_POST['addhelp'];
        $quiz=$_POST['quiz'];
        mysql_query("call r0_doc_save('$lab_id', '$manual', '$proceduredoc', '$resources', '$addhelp', '$quiz')");
    }

    if($tab == "technology"){
        $webui=$_POST['webui'];
        $backend_tech=$_POST['backend_tech'];
        $misc_tech=$_POST['misc_tech'];
        mysql_query("call r0_tech_save('$webui', '$backend_tech', '$misc_tech', '$lab_id')");
    }

    if($tab == "outcome"){
        $manualOC=$_POST['manualOC'];
        $hwswOC=$_POST['hwswOC'];
        mysql_query("call r0_outcome_save('$lab_id', '$manualOC', '$hwswOC')");
    }

    if($tab == "studentlearning"){
        $learning_component=$_POST['learning_component'];
        $stud_ability=$_POST['stud_ability'];
        mysql_query("call r0_stud_learn_save('$lab_id', '$learning_component', '$stud_ability')");
    }

    $result=array();
    $result['status'] = 'success';
    echo json_encode($result);

?>