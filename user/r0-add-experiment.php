<?php
    include '../core/connect.php';
    session_start();
    header('Content-Type: application/json; charset=UTF-8');
    $lab_id=$_SESSION['lab_id'];
    $expid=$_SESSION['expidarr'];
    mysql_query("insert into experiment(lab_id) values('$lab_id')");
    $j=mysql_insert_id();
    array_push($expid, $j);
    $result=array();
    $result['status'] = 'success';
    echo json_encode($result);
?>