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
                           <div class="table-responsive">
                             <table class="table">
                               <thead>
                                 <tr class="clickable" >
                                   <th>Lab #ID</th>
                                   <th>Name of Lab </th>
                                   <th>Status</th>
                                 </tr>
                                 </thead>
                               <tbody>
                                 <?php 
                                   include '../core/connect.php';
                                   @session_start();
                                   
                                   //echo $_SESSION['useName'];
                                   $qry="select * from user where email='".$_SESSION['email']."'";
                                   $res4 = mysql_query($qry);
								   $uid=mysql_fetch_assoc($res4);
                                  // echo "User Name".$uid['user_id'];
                                   
                                   $i=1;
                                   $res=mysql_query("select * from lab where user_id=".$uid['user_id']);
                                   while($row=mysql_fetch_assoc($res)){
                                 ?>

                             
                                 <tr>
                                   <th scope="row"><?php echo $i;?></th>
                                   <td><!--<form  method="post" action="pending-lab.php"> -->
                                   <?php
                                   $path = 'pending-lab.php?lab_id='.$row['lab_id'];
                                   echo '<a href="' . $path . '">'.$row['lab_name'].'</a>';
                                    ?>
                                    
                                    </td>
                                   <td>  
                                      <?php
                                       $query2 = "select * from submission_status where lab_id=".$row['lab_id'];
                                       
                                       if($check = mysql_query($query2)){
                                        while($row1 = mysql_fetch_assoc($check)){
                                      if($row1['r0']==0){
                                          echo 'RO';
                                        }else if($row1['r1']==0){
                                          echo 'R1';
                                        }else if($row1['r2']==0){
                                           echo 'R2';
                                        }else if($row1['r3']==0){
                                          echo 'R3';
                                        }else if($row1['r4']==0){
                                          echo 'R4';
                                        }else if($row1['r5']==0){
                                          echo 'R5';
                                        }else if($row1['status']==1){
                                          echo "submitted";
                                        }
                                       
                                      }
                                      
                                    }


                                    ?> 
                                    </td>
                                 </tr>
                                   <?php
                                  $i=$i+1;
                                  }?>
                               </tbody>
                             </table>
                           </div>
                         </div>

                       </div>
                     </div>
                   </div>
                 </div>

        </div>
    </div>
  </div>
    <!-- // Basic form layout section end -->
  <!-- ////////////////////////////////////////////////////////////////////////////-->
 <?php include 'footer.php'; ?>
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
