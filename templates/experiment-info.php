<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    + Bitcoin Dashboard</title>
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/chartist.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-content-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/timeline.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-ecommerce.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
  <!-- fixed-top-->
  <?php include '../user/header.php'; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"> </div>
      <?php include '../user/panel.php'; ?>
      <div class="content-header row"> </div>
        <div class="content-body">

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                  <?php 
                    include '../core/connect.php';
                    $exp_id=$_GET['exp_id'];
                    $res=mysql_query("select * from experiment where exp_id=".$exp_id);
                    echo "<br/>";
                    echo "<h1 style='align:center'>";
                    while($row=mysql_fetch_assoc($res))
                    echo $row['exp_name'];
                    echo "</h1>";
                    ?>
                   
                   <h2><u>Learning Objectives</u></h2>
                    <div class="table-responsive">
                     <table class="table">
                        <thead>
                          <tr class="clickable" >
                            <th>Sr. no.</th>
                            <th>Learning Objective </th>
                            <th>Cognitive Level</th>
                            <th>Action Verb </th>
                          </tr>

                        </thead>
                        <tbody>
                          <tr>
                          <?php
                               $res1 = mysql_query("select * from learning_objectives where exp_id=".$exp_id);
                               while($row1=mysql_fetch_assoc($res1))
                               {?>
                                   <td><?php echo $row1['sr_no'];?></td>
                                   <td><?php echo $row1['learning_obj'];?></td>
                                   <td><?php echo $row1['cognitive_level'];?></td>
                                   <td><?php echo $row1['action_verb'];?></td>
                                   </tr>

                            <?php }?>
                        </tbody>
                      </table>
                      <h2><u>Instructional Strategy</u></h2>
                      <?php
                      $res=mysql_query("select * from experiment where exp_id=".$exp_id);
                      while($row=mysql_fetch_assoc($res)){
                          echo "<h3>Instruction Strategy</h3>";
                          echo $row['instruction_strategy'];
                          echo "<h3>Method</h3>";
                          echo $row['ISmethod'];
                          echo "<h3>Assessment</h3>";
                          echo $row['ISassessment'];
                      }?>
                      <h2><u>Simulator Interactions</u></h2>
                    <div class="table-responsive">
                     <table class="table">
                        <thead>
                          <tr class="clickable" >
                            <th>Sr. no.</th>
                            <th>What would simulator do?</th>
                            <th>What would student do?</th>
                            <th>Purpose</th>
                          </tr>

                        </thead>
                        <tbody>
                          <tr>
                          <?php
                               $res1 = mysql_query("select * from simulator_interactions where exp_id=".$exp_id);
                               while($row1=mysql_fetch_assoc($res1))
                               {?>
                                   <td><?php echo $row1['sr_no'];?></td>
                                   <td><?php echo $row1['simulator_action'];?></td>
                                   <td><?php echo $row1['student_action'];?></td>
                                   <td><?php echo $row1['purpose'];?></td>
                                   </tr>

                            <?php }?>
                        </tbody>
                      </table>
                      <h2><u>Task and Assessment</u></h2>
                    <div class="table-responsive">
                     <table class="table">
                        <thead>
                          <tr class="clickable" >
                            <th>Sr. no.</th>
                            <th>Task</th>
                            <th>Assessment question</th>
                          </tr>

                        </thead>
                        <tbody>
                          <tr>
                          <?php
                               $res1 = mysql_query("select * from task_assessment where exp_id=".$exp_id);
                               while($row1=mysql_fetch_assoc($res1))
                               {?>
                                   <td><?php echo $row1['sr_no'];?></td>
                                   <td><?php echo $row1['task'];?></td>
                                   <td><?php echo $row1['assessment_que'];?></td>
                                   </tr>

                            <?php }?>
                        </tbody>
                      </table>
                      <h2><u>Story</u></h2>
                      <?php
                      $res=mysql_query("select * from story where exp_id=".$exp_id);
                      while($row=mysql_fetch_assoc($res)){
                          echo "<h3>Story</h3>";
                          echo $row['story'];
                          echo "<h3>Visual stage description</h3>";
                          echo $row['visual_stage_desc'];
                          echo "<h3>User objectives and goals</h3>";
                          echo $row['user_goals'];
                          echo "<h3>Pathway activities</h3>";
                          echo $row['pathway_activities'];
                          echo "<h3>Challenges</h3>";
                          echo $row['challenges'];
                          echo "<h3>Pitfalls</h3>";
                          echo $row['pitfalls'];
                          echo "<h3>Conclusion</h3>";
                          echo $row['conclusion'];
                          echo "<h3>Equations</h3>";
                          echo $row['equations'];
                      }?>
                      
                      <?php
                      $res=mysql_query("select * from experiment where exp_id=".$exp_id);
                      while($row=mysql_fetch_assoc($res)){
                          echo "<h2><u>Story Outline</u></h2>";
                          echo $row['story_outline'];
                          echo "<h2><u>Flowchart</u></h2>";
                          echo '<a href="' . $row['flowchart'] . '" target="_blank">Flowchart</a>';
                          echo "<h2><u>Mind Map</u></h2>";
                          echo '<a href="' . $row['mind_map'] . '" target="_blank">MindMap</a>';
                          echo "<h2><u>Story Boarding</u></h2>";
                          echo '<a href="' . $row['story_boarding'] . '" target="_blank">Story Boarding</a>';
                      }?>
                      
                    
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Basic Tables end -->


        </div>
    </div>
  </div>
    <!-- // Basic form layout section end -->
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php include '../core/footer.php'; ?>
  <!-- BEGIN VENDOR JS-->
  <script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="../app-assets/vendors/js/ui/headroom.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js"
  type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="../app-assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->

  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>

</html>
