<?php
    include '../core/connect.php';
    session_start();
    header('Content-Type: application/json; charset=UTF-8');
    $lab_id = $_SESSION['lab_id'];
    $expid=$_POST['exp_ids'];
    foreach ($expid as $exp_id => $link) {
        mysql_query("call r3_save('$lab_id', '$exp_id', '$link')");

    }

    mysql_query("call r3status('$lab_id')");
    $result=array();
    $result['status'] = 'success';
    echo json_encode($result);
?>