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
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
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
            <span id="error-msg" style="color:red;font-weight:bold;"></span>
            <div class="card-content">
              <div class="card-body">

                <ul class="nav nav-tabs">
                  <?php
                  $qry="SELECT exp_id FROM experiment WHERE lab_id=100";
                    if($check = mysql_query($qry)){
                      $i=1;
                     while($value = mysql_fetch_assoc($check)){
                          ?>
                            <li class="nav-item">
                              <a class="<?php if($i==1) {echo 'nav-link active';} else { echo 'nav-link';} ?>" id='<?php echo $value['exp_id'][0];?>'; data-toggle="tab" aria-controls="<?php echo "tab-exp".$i;?>"
                              href="<?php echo "#tab-exp".$i;?>" aria-expanded="true">
                                <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span><?php echo "Exp ".$i;?></a>
                            </li>

                          <?php
                          $i++;
                        }
                      
                    }
                    
                   ?>
                </ul>
                <div class="tab-content px-1 pt-1">
                  <?php
                  $qry="SELECT exp_id FROM experiment WHERE lab_id=100";
                    if($check = mysql_query($qry)){
                      $i=1;
                     while($value = mysql_fetch_assoc($check)){
                          ?>
                            <div role="tabpanel" class="<?php if($i==1) {echo 'tab-pane active';} else { echo 'tab-pane';} ?>" id="<?php echo "tab-exp".$i;?>" aria-expanded="true"
                            aria-labelledby="<?php echo "tab-exp".$i;?>">
                            <form class="form form-horizontal" novalidate>
                              <div class="form-body">
                                <h4 class="form-section"><i class="ft-clipboard"></i> Details</h4>
                                <div class="form-group row">
                                  <label class="col-md-3 label-control" for="labinput7">Link to source code</label>
                                  <div class="col-md-9">
                                    <div class="form-group">
                                      <div class="controls">
                                        <input id='<?php echo $value['exp_id'][0];?>'; type="text" class="form-control experiment_link" placeholder="Add URL" data-validation-regex-regex="((http[s]?|ftp[s]?):\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*"
                                        data-validation-regex-message="Only Valid URL's" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                              </div>
                              </div>
                              <div class="form-actions">
                                <button type="button" class="btn btn-warning mr-1">
                                  <i class="ft-x"></i> Cancel
                                </button>
                                <button type="button" class="btn btn-primary save-r3" data-id='<?php echo $value['exp_id'][0];?>'>
                                  <i class="la la-check-square-o"></i> Save
                                </button>
                              </div>
                            </form>
                            </div>
                  <?php
                  $i++;
                }
              }
           ?>
              </div>
            </div>
            <hr>
          <button type="button" id="submit-r3" class="btn btn-success" style="margin: 20px;">
            <i class="la la-check-square-o"></i> Submit all experiments
          </button>

          </div>
        </div>
      </div>
    </div>


    </section>
    <!-- // Basic form layout section end -->
  </div>
</div>
</div>
<script type="text/javascript">
  $(document).ready(function () {
    $("#submit-r3").click(function (e) {
         console.log("submit r3")
         var php_data = {};
         php_data.exp_ids = {};
         $('.experiment_link').each(function(index) {
            php_data.exp_ids[$(this).attr("id")] = $(this).val().trim();
        });

         send_ajax_request(php_data, this, 'r3submit.php');
     });

    $(".save-r3").click(function (e) {
        console.log("called.")
        var php_data = {};
        var id = $(this).attr("data-id");
        console.log(id, this);
        var link;
        $('.experiment_link').each(function(index) {
            if ($(this).attr("id") === id) {
              link = $(this).val().trim();
            }
        });

        console.log("saving exp of id in r3 form ", id, link);
        var php_data = {};
        php_data.exp_id = id;
        php_data.link_to_source_code = link;

        send_ajax_request(php_data, this, 'r3save.php');
    });

    function send_ajax_request (php_data, save_btn, file_name) {
        if (file_name === undefined) {
          file_name = 'r3save.php';
        }
        console.log("sending request to ", file_name, php_data);

        $.post(file_name, php_data, function (data, status) {
                console.log(data, status);
                if (data.status === "success") {
                  console.log("Successfully added!")
                  $(save_btn).parent().append('<div class="save-status" style="color: teal;font-size: small;font-style: oblique;">Saved!</div>');

                  setTimeout(function () {
                    $(".save-status").each(function () {
                      $(this).hide();
                    });
                  }, 2000);

                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });
        }
    });

</script>
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
