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
  <!-- fixed-top-->
  <!-- ////////////////////////////////////////////////////////////////////////////-->

      <div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
          <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href="userdashboard.php"><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">
              <div class="text-center">
                <div class="card-body">
                  <img src="../app-assets/images/portrait/medium/avatar-m-4.png" class="rounded-circle  height-100"
                  alt="Card image">
                </div>
                  <h4 class="card-title">
                  <?php
                  include '../core/connect.php';
                    @session_start();
                    $flag=0;
                    $email=$_SESSION['email'];
                    $res=mysql_query("select * from user");
                    while($row=mysql_fetch_assoc($res)){
                      if($row['email']==$email){
                        $flag=1;
                        break;
                      }
                      else
                      continue;
                    }
                    if($flag==1)
                    $res1=mysql_query("select * from user where email='$email'");
                    else
                    $res1=mysql_query("select * from ldc where email='$email'");
                    $row=mysql_fetch_assoc($res1);
                    $fname=$row['first_name'];
                    $lname=$row['last_name'];
                    echo $fname;
                    echo $lname;

                  ?>
                  </h4>
                  <h6 class="card-subtitle text-muted">
                  <?php
                  $designation=$row['designation'];
                  echo $designation;
                  ?>
                  </h6>

            </div></span></a>
            </li>

            <li class="nav-item"><a href="submit-lab.php"><i class="la la-plus"></i><span class="menu-title" data-i18n="nav.dash.main">
            <div class="text-center">
            <button type="button" class="btn mr-1 mb-1 btn-warning btn-sm" ><i class="la la-plus"></i>Propose a Lab</button>
            </div>
            </span>
                </li>
            <li class=" nav-item"><a href="userdashboard.php"><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Dashboard</span><span class="badge badge badge-info badge-pill float-right mr-2">3</span></a>
            </li>
            <!--<li class=" nav-item"><a href="#"><i class="la la-edit"></i><span class="menu-title" data-i18n="nav.templates.main">Proposal</span></a>
              <ul class="menu-content">

                    <li><a class="menu-item" href="view-labs.php" data-i18n="nav.templates.vert.classic_menu">View</a>
                    </li>
                    <li><a class="menu-item" href="submit-lab.php">Submit</a>
                    </li>

              </ul>
            </li>-->

            <li class=" nav-item"><a href="../core/documentation.php" target="_blank"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Documentation</span></a>
            </li>
            <li class=" nav-item"><a href="http://vlabs.iitb.ac.in/gitlab/Community-Docs/New-Lab-development/Samples/Fluid_Mechanics_Sample/tree/master" targe="_blank"><i class="la la-eye"></i><span class="menu-title" data-i18n="nav.dash.main">Sample Reference</span></a>
            </li>
            <li class=" nav-item"><a href="index.html"><i class="la la-phone"></i><span class="menu-title" data-i18n="nav.dash.main">Support</span></a>
            </li>
          </ul>
        </div>
      </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->

  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->

  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <!-- END PAGE LEVEL JS-->
</body>
</html>
