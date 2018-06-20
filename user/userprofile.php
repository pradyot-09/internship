<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Collapse - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../*-assets/css/vendors.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-content-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/animate/animate.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->

<!-- style for profile name in upper card-->
<style type="text/css">
.profile-title {
    font-weight: 500;
    letter-spacing: 0.05rem;
    font-size: 1.12rem;
}
.profile
{   
                    margin-top:4px;
}
@media only screen and (min-width: 1340px) {
.profile_image_div{
margin-left: 370%;
margin-top: -58px;
}
.column-name{
margin-left: 22%;
margin-top: 23px;

}
 }
</style>
</head>
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
  <!-- fixed-top-->
<?php include 'header.php'; ?>

  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"> </div>
      <?php include 'panel.php'; ?>
      <div class="content-body">
  
  <!-- user profile starting -->
        <div id="user-profile">
          <div class="row">
            <div class="col-12">
              <div class="card profile-with-cover">
                <div class="media profil-cover-details w-100">
                  <div class="media-left pl-2 pt-2">
                    <div class="profile_image_div">
                    <a href="#" class="profile-image">
                      <img src="../app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100"
                      alt="Card image">
                    </a>
                  </div>
                  </div>
                  <?php
                    include '../core/connect.php';
                    @session_start();
                    $email=$_SESSION['email'];
                    $res=mysql_query("select * from user where email='$email'");
                    $row=mysql_fetch_assoc($res);
                  ?>

                  <div class="media-body pt-3 px-2">
                    <div class="row">
                      <div class="col column-name">
                        <div><h3 class="profile-title"> <?php echo $row['first_name']." ".$row['last_name'];?><span class="small"> <?php echo "(".$row['designation'].")";?></span></h3></div>
                        <div><h3 class="card-desgination small" style="text-alogn:center"> <?php echo $row['institute'];?></h3></div>
                      </div>
                    </div>
                  </div>
                </div>
                

                <nav class="navbar navbar-light navbar-profile align-self-end">
                  <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false"
                  aria-label="Toggle navigation"></button>
                  
            </div>
          </div>
        </div>
  <!-- user profile ending -->
  <!-- container containing all information of users -->


          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title" id="row-separator-basic-form">Profile</h4>
                  <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
    
                                      <form class="form form-horizontal row-separator">
                      <div class="form-body">
                        <h4 class="form-section"><i class="la la-user"></i>Info<a href="javascript:void(0)"><i class="la la-edit" style="
    right: 30px;
    position: absolute;
    margin-top: 10px;color:#2C303B;
"></i></a></h4>

                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">Name of Institute</label>
                          <div class="col-md-9">
                            <p class="profile"><?php echo $row['institute'];?></p>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput1">First Name</label>
                          <div class="col-md-9">
                          
  <p class="profile"><?php echo $row['first_name'];?></p>
                          
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput2">Last Name</label>
                          <div class="col-md-9">
  <p class="profile"><?php echo $row['last_name'];?></p>
                          </div>
                        </div>


                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput2">Department</label>
                          <div class="col-md-9">
                     <p class="profile"><?php echo $row['department'];?></p>
  
                          </div>
                        </div>



                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput2">Designation</label>
                          <div class="col-md-9">
                            <p class="profile"><?php echo $row['designation'];?></p>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-md-3 label-control" for="projectinput3">E-mail</label>
                          <div class="col-md-9">
                          <p class="profile"><?php echo $row['email'];?></p>  
                          </div>
                        </div>

                        <div class="form-group row last">
                          <label class="col-md-3 label-control" for="projectinput4">Phone No.</label>
                          <div class="col-md-9">
                          <p class="profile"><?php echo $row['phone_no'];?></p>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="la la-remove"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          


      </div>
    </div>
  </div>
  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
      <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
        target="_blank">PIXINVENT </a>, All rights reserved. </span>
      <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
    </p>
  </footer>

  <!-- BEGIN VENDOR JS-->

  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->

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
    <script src="../app-assets/js/scripts/popover/popover.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>
