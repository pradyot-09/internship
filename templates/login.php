<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>Login Page - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
    Dashboard
  </title>
<script type="text/javascript" src="jquery-1.4.2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/validation/form-validation.css">
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/toggle/switchery.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/icheck.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/forms/icheck/custom.css">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/app.css">
  <!-- END MODERN CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/menu/menu-types/vertical-content-menu.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/core/colors/palette-gradient.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/pages/login-register.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/validation/form-validation.css">

  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
<style type="text/css">
/*our defined css*/
  .step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}
/*all form making none*/
.tab
{
display: none;
}
.color{
background-color:#1E9FF2;
}
</style>


</head>
<body class="vertical-layout vertical-content-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-content-menu" data-col="1-column">
  <!-- ////////////////////////////////////////////////////////////////////////////-->

	<script type='text/javascript'>
		function refreshCaptcha()
		{
		var img = document.images['captchaimg'];
		img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
		}
	</script>
	  
  
 <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body" id="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center" id="marginkumar">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="../app-assets/images/logo/logo-dark.png" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span><h4><b>Login with Vlabs-Dev</b></h4></span>

                  </h6>
                   <label id="me" style="font-size:large;font-weight:bolder;color:red;"></label>  
                </div>
                <div class="card-content">
                  <div class="card-body">
                     <div id="emailDiv">
                                        <label id="me" style="font-size:medium;font-weight:bolder;">Email Address or Mobile Number</label>  
                       <input type="text"class="form-control form-control-lg input-lg" id="email" placeholder="Enter Mobile or Email Address"><br>
                       <button type="button"class="btn mr-1 mb-1 btn-info btn-sm" style="background-color:#168DEE !important;" id="subEmail" onclick="EmailSubmit()">Next</button>
                    </div>
                     <div id="paswordDiv">
                         <label id="me" style="font-size:medium;font-weight:bolder;">Password</label>  
                       <input type="password" class="form-control form-control-lg input-lg" id="password" placeholder="Password"/><br>
                     
                    <div class="form-group">
                    <label>Captcha:</label>
                    <img src="../captcha_code/captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
					<label for='message'>Enter the code above here :</label>
					<input type="text" name="captcha_code" id="captcha_code"> <br>
					Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
                    </div>     
					 
					 
					   <button type="button" class="btn mr-1 mb-1 btn-info btn-sm" style="background-color:#168DEE !important;" id="done" onclick="passwordCheck()"> Login</button>
                
					 
					 
					 </div> 
                     
                     <script>
                        var v = document.getElementById("paswordDiv");
                        v.style.display="none";
                        function EmailSubmit(){
	                       var e = document.getElementById("paswordDiv");
	                       var b = document.getElementById("emailDiv");
	                       var val = document.getElementById("email").value;
	                       	// document.getElementById("me").innerHTML=
											 //var vall = document.getElementById("projectinput5").value;
							 $.ajax({
							 type: 'post',
							 url: '../auth/loginlogic.php',
							 data: {
							  get_option:val
							 },
							 success: function (response) {
							  if(response=="1"){ 
							  e.style.display="block";
							  b.style.display="none";
							   document.getElementById("me").innerHTML="Invalid Email or Password";
							  }else{
							   	 document.getElementById("me").innerHTML=" ";
							  }
							 }
							 });
							
													
                         }
                         
                         
                         function passwordCheck(){
                         document.getElementById("me").innerHTML=" ";
                            var email = document.getElementById("email").value;
                            var password= document.getElementById("password").value;
                            var captcha_code=document.getElementById("captcha_code").value;          
	                           $.ajax({
								 type: 'post',
								 url: '../auth/passwordlogic.php',
								 data: {
								  uname:email,
								  password:password,
								  captcha_code:captcha_code
								 },
								 success: function (response) {
								 //document.getElementById("me").innerHTML=response;
								 alert(response);
								 if(response==1){ 
								 window.location.href = "../user/userdashboard.php";
								   document.getElementById("me").innerHTML=" ";
								  }else if(response==0){
									document.getElementById("me").innerHTML="Invalid Captcha";		
								  }else if(response==3){
									document.getElementById("me").innerHTML="Fill all the details.";		
								  }
								  else{
								   	 document.getElementById("me").innerHTML="Wrong Password";
								  }
								 }
								 });
							
                         
                         
                         }
                         
                         
                     </script>




                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <!--<p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>-->
                    <p class="float-sm-right text-center m-0">New user?<a href="register-user.php" class="card-link"> <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm" style="background-color:#168DEE !important;margin-top:5px;margin-left:5px;">Sign up</button></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

<!-- ////////////////////////////////////////////////////////////////////////////-->
<!-- BEGIN VENDOR JS-->
<!-- /*our defined js*/ -->
<script src="../app-assets/js/scripts/commonjs.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="../app-assets/vendors/js/ui/headroom.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="../app-assets/js/core/app-menu.js" type="text/javascript"></script>
<script src="../app-assets/js/core/app.js" type="text/javascript"></script>
<script src="../app-assets/js/core/app.js" type="text/javascript"></script>

<script src="../app-assets/js/core/app.js" type="text/javascript"></script>

<script src="../app-assets/js/scripts/forms/validation/form-validation.js"
type="text/javascript"></script>
<script src="../app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="../app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"
type="text/javascript"></script>
<script src="../app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js"
type="text/javascript"></script>

<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="../app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>


</body>
</html>
