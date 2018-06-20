<?php
    include '../core/connect.php';
    session_start();
    header('Content-Type: application/json; charset=UTF-8');
    $user_email=$_SESSION['email'];
    $res=mysql_query("select user_id from user where email='$user_email'");
    $user_id=mysql_fetch_assoc($res)['user_id'];
    $lab_id=$_SESSION['lab_id'];
    $lab_name=$_POST['lab_name'];
    $lab_objective=$_POST['lab_objective'];
    mysql_query("insert into lab(user_id, lab_name, objective)values('$user_id','$lab_name','$lab_objective')");
    $lab_id=mysql_insert_id();
    $_SESSION['lab_id']=$lab_id;
    mysql_query("insert into submission_status(user_id, lab_id)values('$user_id', '$lab_id')");
    mysql_query("update submission_status set r0=3, r1=0, r2=0, r3=0, r4=0, r5=0 where user_id='$user_id' and lab_id='$lab_id'");
    $expidarr=array();
    for($i=0;$i<7;$i++){
    mysql_query("insert into experiment(lab_id) values('$lab_id')");
    $j=mysql_insert_id();
    array_push($expidarr, $j);
    }
    $_SESSION['expidarr']=$expidarr;

    $result=array();
    $result['status'] = 'success';
    echo json_encode($result);

?>