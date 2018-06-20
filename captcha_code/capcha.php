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
      
				<?php
				
				  include  '../core/connect.php';
				  @session_start();
				   // echo $_SESSION\['email'\];
				  //$email = $_SESSION['email'];
				  $email ="kad@gmail.com";
				  $res=mysql_query("select user_id from user where email='$email'");
				  $row=mysql_fetch_assoc($res);
				  $user_id=$row['user_id'];
				 
				?>

      <div class="content-body">
        <!-- Sample Project Scrumboard -->
  
              
              
              


   <?php
      $qry="select lab_id from lab where user_id='$user_id'";
        if($check = mysql_query($qry)){
           while($value = mysql_fetch_assoc($check)){
            $fqry="select * from submission_status where lab_id=".$value['lab_id'];
 	

    ?>
        <section id="sample-project-scrumboard" class="row">
          <div class="col-md-12">
            <div class="card">
       
       		<div class="card-header">
                <h4 class="card-title">Lab ID <?php echo $value['lab_id'];?></h4>
              </div>
                   <div class="card-content">
				                <div class="card-body">
				                  <div class="row match-height">
				                    <div class="col-lg-12 col-xl-12">
				          			<div id='<?php echo $value['lab_id'];?>' role="tablist" aria-multiselectable="false">
				                      <div class="card collapse-icon accordion-icon-rotate">
				                        <div class="row">
				                               
				 <?php
				 			if($fcheck = mysql_query($fqry)){
								 while($fvalue = mysql_fetch_assoc($fcheck)){ 
				                    for($i=0;$i<=5;$i++){
				                    
				                        if($fvalue['r'.$i]==1){
                                     ?>

			            
				
				                       <div class="col-lg-3 col-xl-2">
				                          <div id='<?php echo $value['lab_id'].$i;?>' class="card-header bg-success" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
				                        data-trigger="hover" data-original-title="R0 Form">
				
				                          <a data-toggle="collapse" data-parent='<?php echo "#".$value['lab_id'];?>' href='<?php echo "#accordian".$value['lab_id'].$i;?>' aria-expanded="true"
				                          aria-controls="accordion51" class="card-title lead white">R<?php echo $i;?></a>
				
				                        </div>
				                        <div id='<?php echo "accordian".$value['lab_id'].$i;?>' role="tabpanel" aria-labelledby='<?php echo $value['lab_id'].$i;?>' class="border-success card-collapse collapse show"
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

                          <?php }//R - > Completed ?>
                          
                       <?php  if($fvalue['r'.$i]==2){ ?>

			                            <div class="col-lg-3 col-xl-2">
				                          <div id='<?php echo $value['lab_id'].$i;?>' class="card-header bg-warning" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
				                        data-trigger="hover" data-original-title="R0 Form">
				
				                          <a data-toggle="collapse" data-parent='<?php echo "#".$value['lab_id'];?>' href='<?php echo "#accordian".$value['lab_id'].$i;?>' aria-expanded="true"
				                          aria-controls="accordion51" class="card-title lead white">R<?php echo $i;?></a>
				
				                        </div>
				                        <div id='<?php echo "accordian".$value['lab_id'].$i;?>' role="tabpanel" aria-labelledby='<?php echo $value['lab_id'].$i;?>' class="border-warning card-collapse collapse show"
				                        aria-expanded="true">
				                          <div class="card-content">
				                            <ul class="list-group">
				                                <li class="list-group-item">
				
				
				                                  <span class="badge badge-warning float-right">pending</span>
				                                </li>
				                                <li class="list-group-item">
				                                  Submission date:
				                                  <span class="badge badge-warning float-right">10/06/2018</span>
				                                </li>
				                                <li class="list-group-item">
				
				                                  <button type="button" class="btn mr-1 mb-1 btn-outline-warning btn-sm" ><i class="la la-eye"></i> view</button>
				                                </li>
				                              </ul>
				                          </div>
				                        </div>

                <?php }//R - > Pending For Review ?>
                                   

          <?php if($fvalue['r'.$i]==0){ ?>
                

			              
				                        <div class="col-lg-3 col-xl-2">
				                          	<div id='<?php echo $value['lab_id'].$i;?>' class="card-header bg-dark" class="card-header bg-dark" data-toggle="popover" data-content="Status: " data-placement="top"
				                        	data-trigger="hover" data-original-title="R0 Form">
				
				                          	<a data-toggle="collapse" data-parent='<?php echo "#".$value['lab_id'];?>' href='<?php echo "#accordian".$value['lab_id'].$i;?>' aria-expanded="true"
				                          	aria-controls="accordion51" class="card-title lead white">R<?php echo $i;?></a>
				
				                        	</div>
				                        <div id='<?php echo "accordian".$value['lab_id'].$i;?>' role="tabpanel" aria-labelledby='<?php echo $value['lab_id'].$i;?>' class="border-light card-collapse collapse show"
				                        aria-expanded="true">
				                          <div class="card-content">
				                            <ul class="list-group">
				                                <li class="list-group-item">
				
				
				                                  <span class="badge badge-light float-right"></span>
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

         			 <?php }//R - > Approved ?>
         			 
         			 
         			  <?php  if($fvalue['r'.$i]==3){ ?>

			              
				                        <div class="col-lg-3 col-xl-2">
				                          <div id='<?php echo $value['lab_id'].$i;?>' class="card-header bg-danger" class="card-header bg-danger" data-toggle="popover" data-content="Status: " data-placement="top"
				                        data-trigger="hover" data-original-title="R0 Form">
				
				                          <a data-toggle="collapse" data-parent='<?php echo "#".$value['lab_id'];?>' href='<?php echo "#accordian".$value['lab_id'].$i;?>' aria-expanded="true"
				                          aria-controls="accordion51" class="card-title lead white">R<?php echo $i;?></a>
				
				                        </div>
				                        <div id='<?php echo "accordian".$value['lab_id'].$i;?>' role="tabpanel" aria-labelledby='<?php echo $value['lab_id'].$i;?>' class="border-warning card-collapse collapse show"
				                        aria-expanded="true">
				                          <div class="card-content">
				                            <ul class="list-group">
				                                <li class="list-group-item">
				
				
				                                  <span class="badge badge-danger float-right">Pending</span>
				                                </li>
				                                <li class="list-group-item">
				                                  Submission date:
				                                  <span class="badge badge-danger float-right">10/06/2018</span>
				                                </li>
				                                <li class="list-group-item">
				
				                                  <button type="button" class="btn mr-1 mb-1 btn-outline-danger btn-sm" ><i class="la la-eye"></i> view</button>
				                                </li>
				                              </ul>
				                          </div>
				                        </div>

                <?php }//R - > Pending For Review ?>
                                   


						<?php                         
				
								   }>?
								    </div></div></div></div></div></div></div></div>			  </div>
				  </section>
	
								 <?php  //echo "<hr>";
								 }
							 }
				  }
				  ?>
				  
				  <?php
				  }
				 ?>
         
      

    </div>
  </div>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include '../core/footer.php'; ?>


</body>
</html>
