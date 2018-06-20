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
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-content-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/la-check-square-os/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/simple-line-icons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/timeline.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/dashboard-ecommerce.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/validation/form-validation.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
  <!-- fixed-top-->
  <?php include 'header.php'; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"> </div>
      <?php include 'panel.php'; ?>
  <div class="content-body">
    <!-- Basic form layout section start -->
    <section id="horizontal-form-layouts">
      <div class="row">
        <div class="col-xl-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">R3</h4>
            </div>
            <div class="card-content">
              <div class="card-body">

                <ul class="nav nav-tabs">
                  <?php
                  $qry="SELECT COUNT(exp_id) as total FROM experiment WHERE lab_id=100";
                    if($check = mysql_query($qry)){
                     while($value = mysql_fetch_assoc($check)){
                        for($i=1;$i<=$value['total'];$i++){
                          ?>
                            <li class="nav-item">
                              <a class="<?php if($i==1) {echo 'nav-link active';} else { echo 'nav-link';} ?>" id='<?php echo "exp".$i;?>'; data-toggle="tab" aria-controls="<?php echo "tab-exp".$i;?>"
                              href="<?php echo "#tab-exp".$i;?>" aria-expanded="true">
                                <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span><?php echo "Exp ".$i;?></a>
                            </li>

                          <?php
                        }
                      }
                    }
                   ?>
                </ul>
                <div class="tab-content px-1 pt-1">
                  <?php
                  $qry="SELECT COUNT(exp_id) as total FROM experiment WHERE lab_id=100";
                    if($check = mysql_query($qry)){
                     while($value = mysql_fetch_assoc($check)){
                        for($i=1;$i<=$value['total'];$i++){
                            ?>
                            <div role="tabpanel" class="<?php if($i==1) {echo 'tab-pane active';} else { echo 'tab-pane';} ?>" id="<?php echo "tab-exp".$i;?>" aria-expanded="true"
                            aria-labelledby="<?php echo "tab-exp".$i;?>">
                            <form class="form form-horizontal" novalidate>
                              <div class="form-body">
                                <h4 class="form-section"><i class="ft-clipboard"></i> Details</h4>
                                  <div class="form-group row">
                                      <button type="submit" class="btn btn-success" style="margin-left:40%;">
                                        <i class="la la-check-square-o"></i> Hosted to Beta Labs
                                      </button>
                                  </div>                                      
                                </div>
                                <div class="form-group">
                              </div>
                              </div>
                              <div class="form-actions">
                                

                              </div>
                            </form>
                            </div>
                  <?php
                }
              }
            }
           ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    </section>
    <!-- // Basic form layout section end -->
  </div>
</div>
</div>
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
  <script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="../app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/pages/dashboard-ecommerce.js" type="text/javascript"></script>
  <script src="../app-assets/js/scripts/forms/validation/form-validation.js"
  type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->
</body>
</html>
