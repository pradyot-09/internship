<?php
    include '../core/connect.php';
    session_start();
    header('Content-Type: application/json; charset=UTF-8');
    $lab_id = $_SESSION['lab_id'];
    $exp_id=$_POST['exp_id'];
    $link=$_POST['link_to_source_code'];
    mysql_query("call r3_save('$lab_id', '$exp_id', '$link')");    
    $result=array();
    $result['status'] = 'success';
    echo json_encode($result);
?>