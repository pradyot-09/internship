<?php
    include '../core/connect.php';
    session_start();
    // header('Content-Type: application/json; charset=UTF-8');
     $lab_id=100;
         $exp_id=$_POST['exp_id'];

        /*
            exp_id: "",
            learning_objectives: [
                {
                    "name": "",
                    "level": "",
                    "verb": "",
                }
            ]
            increase serial no of lab id here.

            instruction: {
                "method": "",
                "assessment": "",
            }

            task_assessment: [
                {
                    "task": "",
                    "question": "",
                }
            ]

            simulator_interactions: [
                {
                    "what_sm": "",
                    "what_student": "",
                    "purpose": "",
                }
            ]

        */

         $learning_objectives=$_POST['learning_objectives'];
         // echo $learning_objectives;
         // echo sizeof($learning_objectives);
         for($i=0;$i<sizeof($learning_objectives);$i++)
         {
            $sr_no_lo=$i;
            $learning_obj=$learning_objectives[$i]['name'];
            $cog_level=$learning_objectives[$i]['level'];
            $action_verb=$learning_objectives[$i]['verb'];
            // echo $i;
            // echo $learning_obj.$cog_level.$action_verb;
            mysql_query("call r1_lo_save('$exp_id', '$sr_no_lo', '$learning_obj', '$cog_level', '$action_verb')");
            // echo $i;

         }
         $inst_strategy=$_POST['instruction'];
         $in_strategy = $inst_strategy['strategy'];
         $ismethod=$inst_strategy['method'];
         $isassess=$inst_strategy['assessment'];
         mysql_query("call r1_is_save('$exp_id', '$in_strategy', '$ismethod', '$isassess')");

         $task_assessment=$_POST['task_assessment'];
         for($i=0;$i<sizeof($task_assessment);$i++)
         {
            $sr_no_ta=$i;
            $task=$task_assessment[$i]['task'];
            $ass_que=$task_assessment[$i]['question'];
            mysql_query("call r1_ta_save('$exp_id', '$sr_no_ta','$task', '$ass_que')");
         }
         $simulator_interactions=$_POST['simulator_interactions'];
         for($i=0;$i<sizeof($simulator_interactions);$i++)
         {
            $sr_no_si=$i;
            $sim_action=$simulator_interactions[$i]['what_sm'];
            $stud_action=$simulator_interactions[$i]['what_student'];
            $purpose=$simulator_interactions[$i]['purpose'];
            mysql_query("call r1_si_save('$exp_id', '$sr_no_si', '$sim_action', '$stud_action', '$purpose')");
         }

    // mysql_query("call r1save('$lab_id', '$exp_id', '$sr_no_lo', '$learning_obj', '$cog_level', '$action_verb', '$inst_strategy', '$ismethod', '$isassess', '$sr_no_ta', '$task', '$ass_que', '$sr_no_si', '$sim_action', '$stud_action', '$purpose')");
     
    $result=array();
    $result['status'] = 'success';
    echo json_encode($result);
?>