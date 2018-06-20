<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
      <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
      <meta name="author" content="PIXINVENT">
      <title>R2 Form</title>
      <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
      <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
      <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
      <!-- BEGIN VENDOR CSS-->
      <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/weather-icons/climacons.min.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/fonts/meteocons/style.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/morris.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/chartist.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
      <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/animate/animate.css">
      <!-- END VENDOR CSS-->
      <!-- DRAG DROP FEATURE LINK START  -->
          <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
          <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">
      <!-- DRAG DROP FEATURE LINK END  -->
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
-      <!-- BEGIN Custom CSS-->
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      <!-- END Custom CSS-->
      <!--CKeditor-->
      <script src="../ckeditor/ckeditor.js"> </script>
      <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<style>
.help{
margin-left:0px;margin-top:5px;position: absolute;
}
.icon_click{
cursor: pointer;
}
.icon_display_none{
display: none;
}
</style>



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
               <div class="col-xl-12 col-lg-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">R2 Form</h4>
                     </div>
                     <div class="card-content">
                        <div class="card-body">
                           <ul class="nav nav-tabs">
                              <li class="nav-item">
                                 <a class="nav-link active" id="baseLable1-tab1" data-toggle="tab" aria-controls="tabLable11"
                                    href="#tabLable11" aria-expanded="true">
                                 <span class="badge badge-pill badge-glow badge-default badge-success"></span> Exp 1</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="baseLable1-tab2" data-toggle="tab" aria-controls="tabLable12"
                                    href="#tabLable12" aria-expanded="false">Exp2 <span class="badge badge-pill badge-glow badge-default badge-warning float-right"></span></a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" id="baseLable1-tab3" data-toggle="tab" aria-controls="tabLable13"
                                    href="#tabLable13" aria-expanded="false">
                                 <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span> Exp 3 </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link disabled"><i class="ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2ft-link-2"></i> Disabled</a>
                              </li>
                           </ul>




               <!-- ROW OF LAB PROPOSAL START  -->
                <div class="row">

                    <span id="error-msg" style="color:red;font-weight:bold;"></span>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card collapse-icon accordion-icon-rotate">
                                                    <div class="card-content collapse show">
                                                      <div class="card-body">
                                                     <!-- (form for drag start) -->
                                                        <form action="#" class="dropzone dropzone-area dz-clickable" id="dpz-btn-select-files" style="height:100px">
                                                          <div class="dz-message">Drop Files Here To Upload</div>
                                                        </form>
                                                     <!-- (form for drag end) -->
                                                     <!-- button Click me to select files -->
                                                        <button id="select-files" style="margin-left:40%;margin-top:10px" class="btn btn-primary mb-1 dz-clickable"><i class="ft-file"></i> Click me to select files</button>
                                                        

                                                      </div>
                                                    </div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- ROW OF LAB PROPOSAL END  -->


               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      </div>
      <!-- ////////////////////////////////////////////////////////////////////////////-->
      <?php include '../core/footer.php'; ?>
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
