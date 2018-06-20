
<?php

    include '../core/connect.php';
    session_start();
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $flag=0;
    $res = mysql_query("select * from user");
    while($row=mysql_fetch_assoc($res))
    {
        if($row['email']==$email)
        {
             $_SESSION['email']=$row['email'];
             $_SESSION['phone']=$row['phone_no'];
             $flag = 1;
        }
    }
    header('Content-Type: application/json; charset=UTF-8');
    if ($flag == 1) {
        $result=array();
        $result['status'] = 'success';
        echo json_encode($result);
    } else {
        $result=array();
        $result['status'] = 'error';
        $result['msg'] = 'No such email';
        //feel free to add other information like $result['errorcode']
        echo json_encode($result);
    }
?>