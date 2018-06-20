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
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
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
</head>
  <!-- fixed-top-->
<?php include 'header.php'; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"> </div>
      <?php include 'panel.php'; ?>
      <div class="content-body">
        <!-- Sample Project Scrumboard -->
        <section id="sample-project-scrumboard" class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><?php @session_start();
                  // echo $_SESSION['useName'];
                ?> </h4>
                <h4 class="card-title">Review Labs</h4>
              </div>

              <div class="card-content">
                <div class="card-body">

                  <div class="row match-height">



                    <div class="col-lg-12 col-xl-12">

                    <div id="accordionWrap4" role="tablist" aria-multiselectable="true" >
                      <div class="card collapse-icon accordion-icon-rotate">

                        <div class="row">
                        <?php for($i=0;$i<=5;$i++){?>
                        <div class="col-lg-3 col-xl-2">

                            <div id="heading41" class="card-header border-info" >
                              <a data-toggle="collapse" data-parent="#accordionWrap4" href="#accordion41" aria-expanded="false"
                              aria-controls="accordion1" class="card-title lead ">R<?php echo $i;?> Form</a>
                            </div>
                            <?php
                              include '../core/connect.php' ;
                              $res=mysql_query("select * from ldc where email='$email'");
                              $ldcdis=mysql_fetch_assoc($res)['discipline'];
                              $query="select * FROM submission_status WHERE lab_id IN (select lab_id from syllabi_mapping where discipline_name='$ldcdis') and status=0 ";
                              //$value;
                              if($check = mysql_query($query)){
                                while($value = mysql_fetch_assoc($check)){
                                  $labid=$value['lab_id'];
                                  $labname=mysql_query("select * from lab where lab_id=$labid");
                                  $res2=mysql_fetch_assoc($labname);
                                  //echo $res2;
                                  //$uid=mysql_fetch_assoc($labname)['user_id'];
                                  //echo "Hi";


                                  $uid=$res2['user_id'];
                                  $type=mysql_query("select * from user where user_id='$uid'");
                                  $loginType=mysql_fetch_assoc($type)['login_type'];

                                //echo $value['lab_id'];

                            ?>
                            <?php if($value['round_status']==$i){?>


                        <div id="accordion41" role="tabpanel" aria-labelledby="heading41" class=" card-collapse collapse show">
                          <div class="card-contenoy tab-content" >
                              <ul class="list-group" >

                              <?php if($value['r'.$i]==2){  ?>

                                <li class="list-group-item" style="padding:0">
                                  <div style="width:100%;">
                                    <div class="card bg-danger" style="margin:0;">
                                      <div class="card-content">
                                        <div class="card-body">
                                          <b><h6 class="text-white"> <?php echo $res2['lab_name'];?><?php echo $value['lab_id'];?> </h6></b>
                                        </div>
                                        <table  style="width:100%;">
                                          <tr>
                                            <td> <span class="badge badge-yellow "><?php echo $loginType;?></span></td>
                                            <td> <button class="badge badge-info float-right" >view</span><td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                              <?php } ?>



                              <?php if($value['r'.$i]==3){ ?>

                                <?php //echo 'hi stutu choti'.$i; ?>
                                <li class="list-group-item" style="padding:0">
                         <div style="width:100%;">
                            <div class="card bg-warning" style="margin:0;">
                              <div class="card-content">
                                <div class="card-body">
                                  <h6 class="text-white"><?php echo $res2['lab_name'];?> <?php echo $value['lab_id'];?> </h6>
                              </div>
                              <table  style="width:100%;">
                                <tr>
                                  <td> <span class="badge badge-yellow "><?php echo $loginType;?></span></td>
                                  <td> <button class="badge badge-info float-right" >view</span><td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </li>
                              <?php } ?>
                              <?php if($value['r'.$i]==1){ ?>
                                <li class="list-group-item" style="padding:0">
                                  <div style="width:100%;">
                                    <div class="card bg-success" style="margin:0;">
                                      <div class="card-content">
                                        <div class="card-body">
                                          <h6 class="text-white"><?php echo $res2['lab_name'];?><?php echo $value['lab_id'];?></h6>
                                        </div>
                                        <table  style="width:100%;">
                                          <tr>
                                            <td> <span class="badge badge-yellow "><?php echo $loginType;?></span></td>
                                            <td> <button class="badge badge-info float-right" >view</span><td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </li>
                                <?php } ?>
                              </ul>


                          </div>
                        </div>
                              <?php  }  } }?>
                      </div>

                  <?php  }?>
                  </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>


          </div>
        </section>

<!--

        <section id="sample-project-scrumboard" class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Lab ID #2 </h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <div class="row match-height">
                    <div class="col-lg-12 col-xl-12">

                    <div id="accordionWrap5" role="tablist" aria-multiselectable="false">
                      <div class="card collapse-icon accordion-icon-rotate">
                        <div class="row">
                        <div class="col-lg-3 col-xl-2">
                          <div id="heading51" class="card-header bg-success" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
                        data-trigger="hover" data-original-title="R0 Form">

                          <a data-toggle="collapse" data-parent="#accordionWrap5" href="#accordion51" aria-expanded="true"
                          aria-controls="accordion51" class="card-title lead white">R0 Form</a>

                        </div>
                        <div id="accordion51" role="tabpanel" aria-labelledby="heading51" class="border-success card-collapse collapse show"
                        aria-expanded="true">
                          <div class="card-content">
                            <ul class="list-group">
                                <li class="list-group-item">


                                  <span class="badge badge-success float-right">Accepted</span>
                                </li>
                                <li class="list-group-item">
                                  Submission date:
                                  <span class="badge badge-info float-right">10/06/2018</span>
                                </li>
                                <li class="list-group-item">

                                  <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-sm" ><i class="la la-eye"></i> view</button>
                                </li>
                              </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12 col-xl-2">
                      <div class="disabled">
                      <div id="r1_form" class="card-header bg-success" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
                      data-trigger="hover" data-original-title="R1 Form">
                        <a data-toggle="collapse" data-parent="#accordionWrap5" href="#accordion52" aria-expanded="false"
                        aria-controls="accordion52" class="card-title lead white">R1 Form</a>
                      </div>
                      <div id="accordion52" role="tabpanel" aria-labelledby="heading52" class="border-success card-collapse collapse show"
                      aria-expanded="true">
                        <div class="card-content">
                          <ul class="list-group">
                              <li class="list-group-item">


                                <span class="badge badge-success float-right">Accepted</span>
                              </li>
                              <li class="list-group-item">
                                Submission date:
                                <span class="badge badge-info float-right">10/06/2018</span>
                              </li>
                              <li class="list-group-item">

                                <button type="button" class="btn mr-1 mb-1 btn-outline-success btn-sm" ><i class="la la-eye"></i> view</button>
                              </li>
                            </ul>

                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-lg-12 col-xl-2">
                    <div id="heading53" class="card-header bg-warning" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
                    data-trigger="hover" data-original-title="R2 Form">
                      <a data-toggle="collapse" data-parent="#accordionWrap5" href="#accordion53" aria-expanded="false"
                      aria-controls="accordion51" class="card-title lead white">R2 Form</a>
                    </div>
                    <div id="accordion53" role="tabpanel" aria-labelledby="heading53" class="border-info card-collapse collapse show"
                    aria-expanded="true">
                      <div class="card-content">
                        <ul class="list-group">
                            <li class="list-group-item">


                              <span class="badge badge-warning float-right">pending</span>
                            </li>
                            <li class="list-group-item">
                              Deadline date:
                              <span class="badge badge-info float-right">10/06/2018</span>
                            </li>
                            <li class="list-group-item">

                              <button type="button" class="btn mr-1 mb-1 btn-outline-warning btn-sm" ><i class="la la-edit"></i> edit</button>
                            </li>
                          </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-xl-2">
                  <div id="heading54" class="card-header bg-dark" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
                  data-trigger="hover" data-original-title="R3 Form">
                    <a data-toggle="collapse" data-parent="#accordionWrap5" href="#accordion54" aria-expanded="false"
                    aria-controls="accordion41" class="card-title lead white">R3 Form</a>
                  </div>
                  <div id="accordion54" role="tabpanel" aria-labelledby="heading54" class="border-danger card-collapse collapse show"
                  aria-expanded="true">
                    <div class="card-content">
                      <ul class="list-group">
                          <li class="list-group-item">

                            <span class="badge badge-success float-right"></span>
                          </li>
                          <li class="list-group-item">
                            Submission date:
                            <span class="badge badge-danger float-right"></span>
                          </li>
                          <li class="list-group-item">

                            <button type="button" class="btn mr-1 mb-1 btn-outline-light btn-sm" ><i class="la la-eye"></i> view</button>
                          </li>
                        </ul>
                    </div>
                  </div>
                </div><div class="col-lg-12 col-xl-2">
                <div id="heading55" class="card-header bg-dark" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
                data-trigger="hover" data-original-title="R4 Form">
                  <a data-toggle="collapse" data-parent="#accordionWrap5" href="#accordion55" aria-expanded="false"
                  aria-controls="accordion55" class="card-title lead white">R4 Form</a>
                </div>
                <div id="accordion55" role="tabpanel" aria-labelledby="heading55" class="border-danger card-collapse collapse show"
                aria-expanded="true">
                  <div class="card-content">
                    <ul class="list-group">
                        <li class="list-group-item">


                          <span class="badge badge-success float-right"></span>
                        </li>
                        <li class="list-group-item">
                          Submission date:
                          <span class="badge badge-info float-right"></span>
                        </li>
                        <li class="list-group-item">

                          <button type="button" class="btn mr-1 mb-1 btn-outline-light btn-sm" ><i class="la la-eye"></i> view</button>
                        </li>
                      </ul>
                  </div>
                </div>
              </div><div class="col-lg-12 col-xl-2">
              <div id="heading56" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
              data-trigger="hover" data-original-title="R5 Form">
                <a data-toggle="collapse" data-parent="#accordionWrap5" href="#accordion56" aria-expanded="false"
                aria-controls="accordion56" class="card-title lead white" >R5 Form</a>
              </div>
              <div id="accordion56" role="tabpanel" aria-labelledby="heading56" class="border-danger card-collapse collapse show"
              aria-expanded="true" >
                <div class="card-content">
                  <ul class="list-group">
                      <li class="list-group-item">


                        <span class="badge badge-success float-right"></span>
                      </li>
                      <li class="list-group-item">
                        Submission date:
                        <span class="badge badge-info float-right"></span>
                      </li>
                      <li class="list-group-item">

                        <button type="button" class="btn mr-1 mb-1 btn-outline-light btn-sm" ><i class="la la-eye"></i> view</button>
                      </li>
                    </ul>
                </div>
              </div>
            </div>
                  </div>
                    </div>
                  </div>
                </div>
                </div>
              </div>
            </div>


          </div>
        </section>
       -->
      </div>

    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include '../core/footer.php'; ?>


</body>
</html>
