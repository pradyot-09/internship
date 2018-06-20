<?php
    include '../core/connect.php';
    session_start();
    $lab_id=$_SESSION['lab_id'];
    $exp_id=$_POST['exp_id'];
    $story_out=$_POST['story_out'];
    $flowchart=$_POST['flowchart'];
    $mindmap=$_POST['mindmap'];
    $storyboard=$_POST['storyboard'];
    $story=$_POST['story'];
    $vis_stage_desc=$_POST['vis_stage_desc'];
    $user_goals=$_POST['user_goals'];
    $path_act=$_POST['path_act'];
    $challenge=$_POST['challenge'];
    $pitfall=$_POST['pitfall'];
    $conclusion=$_POST['conclusion'];
    $equation=$_POST['equation'];
    mysql_query("call r2save('$lab_id', '$exp_id', '$story_out', '$flowchart', '$mindmap', '$storyboard', '$story', '$vis_stage_desc', '$user_goals', '$path_act', '$challenge', '$pitfall', '$conclusion', '$equation')");

?>