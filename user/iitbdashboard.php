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
                      <h4 class="card-title">Pending for Review</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <p></p>
                        <ul class="nav nav-tabs">
                          <li class="nav-item">
                            <a class="nav-link active" id="baseLable1-tab1" data-toggle="tab" aria-controls="tabLable11"
                            href="#tabLable11" aria-expanded="true">
                              <span class="badge badge-pill badge-glow badge-default badge-success"></span> Round 0</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="baseLable1-tab2" data-toggle="tab" aria-controls="tabLable12"
                            href="#tabLable12" aria-expanded="false">Round 1<span class="badge badge-pill badge-glow badge-default badge-warning float-right"></span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="baseLable1-tab3" data-toggle="tab" aria-controls="tabLable13"
                            href="#tabLable13" aria-expanded="false">
                              <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span> Round 2 </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="baseLable1-tab4" data-toggle="tab" aria-controls="tabLable14"
                            href="#tabLable14" aria-expanded="false">
                              <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span> Round 3 </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="baseLable1-tab5" data-toggle="tab" aria-controls="tabLable15"
                            href="#tabLable15" aria-expanded="false">
                              <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span> Round 4 </a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="baseLable1-tab6" data-toggle="tab" aria-controls="tabLable16"
                            href="#tabLable16" aria-expanded="false">
                              <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span> Round 5 </a>
                          </li>

                        </ul>
                        <div class="tab-content px-1 pt-1">
                          <div role="tabpanel" class="tab-pane active" id="tabLable11" aria-expanded="true"
                          aria-labelledby="baseLable1-tab1">
                          <div id="Round0" role="tablist" aria-multiselectable="false">
                            <div class="card collapse-icon accordion-icon-rotate">
                            <div class="row">
                                         <?php
                                      include '../core/connect.php';
                                      $res=mysql_query("select lab_id from submission_status where r0=2 and r0_iitb=2");
                                      while($row=mysql_fetch_assoc($res)){?>
                                <div class="col-lg-3 col-xl-2">
                                <?php
                                $id="label".$row['lab_id'];
                                $acc="accordian".$row['lab_id'];
                                ?>
 						                          <div id='<?php echo $id;?>' class="card-header bg-danger" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
 						                        		data-trigger="hover" data-original-title="R0 Form">
                                      
 						                          <a data-toggle="collapse" data-parent="Round0" href= '<?php echo "#".$acc?>' aria-expanded="false"
 						                        		  aria-controls='<?php echo $acc;?>' class="card-title lead white"><?php echo "Lab ".$row['lab_id'];?></a>
 						                        </div>
 						                  
                                     <div id='<?php echo $acc;?>' role="tabpanel" aria-labelledby='<?php echo $id;?>' class="border-danger card-collapse collapse"
 				                    	            aria-expanded="true">
 				                            <div class="card-content">
 				                                 <ul class="list-group">

 				                                <li class="list-group-item">
 				                                     <div class="text-center">
 				                                  	       <span class="badge badge-danger ">Pending for Review</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 													                   <div class="text-center">
                                               <img src="images/deadline.jpg" style="width:25%;height:25%;"></img>
 				                                  	    <span class="badge badge-danger">10/06/2018</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 				                                 	<div class="text-center">
 				                                  	<button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
 				                                  	</div>
 				                                </li>
 				                              </ul>
 				                           </div>
 				                        </div>
                              </div>


                                      <?php }?>
                                      </div></div></div></div>
                          <div class="tab-pane" id="tabLable12" aria-labelledby="baseLable1-tab2">
                            <div id="Round1" role="tablist" aria-multiselectable="false">
                              <div class="card collapse-icon accordion-icon-rotate">
                                <div class="row"><?php
                                      include '../core/connect.php';
                                      $res=mysql_query("select lab_id from submission_status where r1=2 and r1_iitb=2");
                                      while($row=mysql_fetch_assoc($res)){?>
                                <div class="col-lg-3 col-xl-2">
                                <?php
                                $id="label".$row['lab_id'];
                                $acc="accordian".$row['lab_id'];
                                ?>
 						                          <div id='<?php echo $id;?>' class="card-header bg-danger" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
 						                        		data-trigger="hover" data-original-title="R Form">
                                      
 						                          <a data-toggle="collapse" data-parent="Round1" href= '<?php echo "#".$acc?>' aria-expanded="false"
 						                        		  aria-controls='<?php echo $acc;?>' class="card-title lead white"><?php echo "Lab ".$row['lab_id'];?></a>
 						                        </div>
 						                        <div id='<?php echo $acc;?>' role="tabpanel" aria-labelledby='<?php echo $id;?>' class="border-danger card-collapse collapse"
 				                    	            aria-expanded="true">
 				                            <div class="card-content">
 				                                 <ul class="list-group">

 				                                <li class="list-group-item">
 				                                     <div class="text-center">
 				                                  	       <span class="badge badge-danger ">Pending for Review</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 													                   <div class="text-center">
                                               <img src="images/deadline.jpg" style="width:25%;height:25%;"></img>
 				                                  	    <span class="badge badge-danger">10/06/2018</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 				                                 	<div class="text-center">
 				                                  	<button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
 				                                  	</div>
 				                                </li>
 				                              </ul>
 				                           </div>
 				                        </div>
                              </div>
                                      <?php }?>
                                      </div></div></div></div>
                          
                          <div class="tab-pane" id="tabLable13" aria-labelledby="baseLable1-tab3">
                          <div id="Round2" role="tablist" aria-multiselectable="false">
                              <div class="card collapse-icon accordion-icon-rotate">
                              <div class="row">
                          <?php
                                      include '../core/connect.php';
                                      $res=mysql_query("select lab_id from submission_status where r2=2 and r2_iitb=2");
                                      while($row=mysql_fetch_assoc($res)){?>
                                <div class="col-lg-3 col-xl-2">
                                <?php
                                $id="label".$row['lab_id'];
                                $acc="accordian".$row['lab_id'];
                                ?>
 						                          <div id='<?php echo $id;?>' class="card-header bg-danger" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
 						                        		data-trigger="hover" data-original-title="R2 Form">
                                      
 						                          <a data-toggle="collapse" data-parent="Round2" href= '<?php echo "#".$acc?>' aria-expanded="false"
 						                        		  aria-controls='<?php echo $acc;?>' class="card-title lead white"><?php echo "Lab ".$row['lab_id'];?></a>
 						                        </div>
 						                        <div id='<?php echo $acc;?>' role="tabpanel" aria-labelledby='<?php echo $id;?>' class="border-danger card-collapse collapse"
 				                    	            aria-expanded="true">
 				                            <div class="card-content">
 				                                 <ul class="list-group">

 				                                <li class="list-group-item">
 				                                     <div class="text-center">
 				                                  	       <span class="badge badge-danger ">Pending for Review</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 													                   <div class="text-center">
                                               <img src="images/deadline.jpg" style="width:25%;height:25%;"></img>
 				                                  	    <span class="badge badge-danger">10/06/2018</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 				                                 	<div class="text-center">
 				                                  	<button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
 				                                  	</div>
 				                                </li>
 				                              </ul>
 				                           </div>
 				                        </div>
                              </div>
                                      <?php }?>
                                      </div></div></div></div>                       
                          <div class="tab-pane" id="tabLable14" aria-labelledby="baseLable1-tab4">
                          <div id="Round3" role="tablist" aria-multiselectable="false">
                              <div class="card collapse-icon accordion-icon-rotate">
                              <div class="row">
                          <?php
                                      include '../core/connect.php';
                                      $res=mysql_query("select lab_id from submission_status where r3=2 and r3_iitb=2");
                                      while($row=mysql_fetch_assoc($res)){?>
                                <div class="col-lg-3 col-xl-2">
                                <?php
                                $id="label".$row['lab_id'];
                                $acc="accordian".$row['lab_id'];
                                ?>
 						                          <div id='<?php echo $id;?>' class="card-header bg-danger" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
 						                        		data-trigger="hover" data-original-title="R3 Form">
                                      
 						                          <a data-toggle="collapse" data-parent="Round3" href= '<?php echo "#".$acc?>' aria-expanded="false"
 						                        		  aria-controls='<?php echo $acc;?>' class="card-title lead white"><?php echo "Lab ".$row['lab_id'];?></a>
 						                        <div id='<?php echo $acc;?>' role="tabpanel" aria-labelledby='<?php echo $id;?>' class="border-danger card-collapse collapse"
 						                        </div>
 				                    	            aria-expanded="true">
 				                            <div class="card-content">
 				                                 <ul class="list-group">

 				                                <li class="list-group-item">
 				                                     <div class="text-center">
 				                                  	       <span class="badge badge-danger ">Pending for Review</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 													                   <div class="text-center">
                                               <img src="images/deadline.jpg" style="width:25%;height:25%;"></img>
 				                                  	    <span class="badge badge-danger">10/06/2018</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 				                                 	<div class="text-center">
 				                                  	<button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
 				                                  	</div>
 				                                </li>
 				                              </ul>
 				                           </div>
 				                        </div>
                              </div>
                                      <?php }?>
                                      </div></div></div></div>
                          <div class="tab-pane" id="tabLable15" aria-labelledby="baseLable1-tab5">
                          <div id="Round4" role="tablist" aria-multiselectable="false">
                              <div class="card collapse-icon accordion-icon-rotate">
                              <div class="row">
                          <?php
                                      include '../core/connect.php';
                                      $res=mysql_query("select lab_id from submission_status where r4=2 and r4_iitb=2");
                                      while($row=mysql_fetch_assoc($res)){?>
                                <div class="col-lg-3 col-xl-2">
                                <?php
                                $id="label".$row['lab_id'];
                                $acc="accordian".$row['lab_id'];
                                ?>
 						                    
 						                          <div id='<?php echo $id;?>' class="card-header bg-danger" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
 						                        		data-trigger="hover" data-original-title="R4 Form">
                                      
 						                          <a data-toggle="collapse" data-parent="Round4" href= '<?php echo "#".$acc?>' aria-expanded="false"
 						                        		  aria-controls='<?php echo $acc;?>' class="card-title lead white"><?php echo "Lab ".$row['lab_id'];?></a>
 						                        </div>
 						                        <div id='<?php echo $acc;?>' role="tabpanel" aria-labelledby='<?php echo $id;?>' class="border-danger card-collapse collapse"
 				                    	            aria-expanded="true">
 				                            <div class="card-content">
 				                                 <ul class="list-group">

 				                                <li class="list-group-item">
 				                                     <div class="text-center">
 				                                  	       <span class="badge badge-danger ">Pending for Review</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 													                   <div class="text-center">
                                               <img src="images/deadline.jpg" style="width:25%;height:25%;"></img>
 				                                  	    <span class="badge badge-danger">10/06/2018</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 				                                 	<div class="text-center">
 				                                  	<button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
 				                                  	</div>
 				                                </li>
 				                              </ul>
 				                           </div>
 				                        </div>
                              </div>
                                      <?php }?>
                                      </div></div></div></div>
                          <div class="tab-pane" id="tabLable16" aria-labelledby="baseLable1-tab6">
                          <div id="Round5" role="tablist" aria-multiselectable="false">
                              <div class="card collapse-icon accordion-icon-rotate">
                              <div class="row">
                          <?php
                                      include '../core/connect.php';
                                      $res=mysql_query("select lab_id from submission_status where r5=2 and r5_iitb=2");
                                      while($row=mysql_fetch_assoc($res)){?>
                                <div class="col-lg-3 col-xl-2">
                                <?php
                                $id="label".$row['lab_id'];
                                $acc="accordian".$row['lab_id'];
                                ?>
 						                          <div id='<?php echo $id;?>' class="card-header bg-danger" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
 						                        		data-trigger="hover" data-original-title="R5 Form">
                                      
 						                          <a data-toggle="collapse" data-parent="Round5" href= '<?php echo "#".$acc?>' aria-expanded="false"
 						                        		  aria-controls='<?php echo $acc;?>' class="card-title lead white"><?php echo "Lab ".$row['lab_id'];?></a>
 						                        </div>
 						                        <div id='<?php echo $acc;?>' role="tabpanel" aria-labelledby='<?php echo $id;?>' class="border-danger card-collapse collapse"
 				                    	            aria-expanded="true">
 				                            <div class="card-content">
 				                                 <ul class="list-group">

 				                                <li class="list-group-item">
 				                                     <div class="text-center">
 				                                  	       <span class="badge badge-danger ">Pending for Review</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 													                   <div class="text-center">
                                               <img src="images/deadline.jpg" style="width:25%;height:25%;"></img>
 				                                  	    <span class="badge badge-danger">10/06/2018</span>
 				                                  	</div>
 				                                </li>
 				                                <li class="list-group-item">
 				                                 	<div class="text-center">
 				                                  	<button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
 				                                  	</div>
 				                                </li>
 				                              </ul>
 				                           </div>
 				                        </div>
                              </div>
                                      <?php }?></div></div></div></div>
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
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include '../core/footer.php'; ?>


</body>
</html>
