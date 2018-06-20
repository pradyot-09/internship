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
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
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
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <!-- END Custom CSS-->
<<<<<<< HEAD:templates/login-simple.php
=======
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
<?php
$msg="";
  if(isset($_POST['login'])){
       session_start();
     include 'connect.php';
    //  echo "".$_SESSION['email'];
       $query = "CALL userLogin('".$_POST['uname']."')";

            if($check = mysql_query($query)){
                $value = mysql_fetch_assoc($check);
                   if($_POST['password']==$value['password']){
                   //echo "<hr>Sucess".$value['password'];
                       header("Location: userdashboard.php");
                  }else{
                   // echo "<hr>NOT".$value['password']."<br>";
                    $msg ="Unauthorized User";
                   // break;
                  }
             }
        }

?>



  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <div class="p-1">
                      <img src="../app-assets/images/logo/logo-dark.png" alt="branding logo">
                    </div>
                  </div>
                  <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Login with Vlabs-Dev</span>

                  </h6>
                   <span style="color:red;font-weight:bold;"><?php echo $msg;?></span>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" action="#" method="post"novalidate>
<<<<<<< HEAD:templates/login-simple.php
                      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input type="text" class="form-control form-control-lg input-lg" id="user-name" name="uname" placeholder="Your Username"
                        required>
=======


<div class="tab">
                      <fieldset id="emailfield" class="form-group position-relative has-icon-left mb-0">
                        <input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your Email"
                        required  id="email">
>>>>>>> d5572e740ffbeb0e952c8766d4eb47803f3566e4:templates/Registerpic.php
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <br>
<<<<<<< HEAD:templates/login-simple.php
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control form-control-lg input-lg" id="user-password" name="password"
                        placeholder="Enter Password" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
=======
</div>

<div class="tab">
                      <fieldset id="phonefield" class="form-group position-relative has-icon-left mb-0">
                        <input type="text"  class="form-control form-control-lg input-lg" id="phone" name="uname" placeholder="Enter your Phone no."
                        required >
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <br>
</div>





<div class="tab">

  <fieldset id="phonefield" class="form-group position-relative has-icon-left mb-0">
                        <input type="text"  class="form-control form-control-lg input-lg" id="nameofinstitute" name="uname" placeholder="Name of Institute"
                        required >
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>

      <fieldset class="form-group position-relative has-icon-left mb-0">
                   <input type="text" name="fname" placeholder="First Name" class="form-control" pattern="^[a-zA-Z]+$" required id="fname" data-validation-required-message="This field is required"   data-validation-pattern-message="Characters only"
                        class="form-control" required>
                   <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>


      <fieldset class="form-group position-relative has-icon-left mb-0">
                   <input type="text" name="fname" placeholder="First Name" class="form-control" pattern="^[a-zA-Z]+$" required id="fname" data-validation-required-message="This field is required"   data-validation-pattern-message="Characters only"
                        class="form-control" required>
                   <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>



      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input id="lname" type="text" name="lname" placeholder="Last Name" class="form-control" pattern="^[a-zA-Z]+$" required data-validation-required-message="This field is required"   data-validation-pattern-message="Characters only"
                        class="form-control" required>
                   <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>


      <fieldset class="form-group position-relative has-icon-left mb-0">
                       <select id="desgination" class="select2  form-control" name="des" required data-validation-required-message="This field is required" >
                          <optgroup label="Designation">
                          <option value="" selected disabled hidden>Designation</option>
                          <option value="professor">Professor</option>
                          <option value="assocprofessor">Associate Professor</option>
                          <option value="asstprofessor">Assistant Professor</option>
                        </optgroup>
                      </select>
                      </fieldset>
</br>

      <fieldset class="form-group position-relative has-icon-left mb-0">
                  <input id="dept" type="text" name="department" placeholder="Department" class="form-control" pattern="^[a-zA-Z]+$" required data-validation-required-message="This field is required"   data-validation-pattern-message="Characters only"
                        class="form-control" required>
                 <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>

      <fieldset class="form-group position-relative has-icon-left mb-0">
                      <input id="pass" type="password" name="password" placeholder="Password" class="form-control" required data-validation-required-message="This field is required"
                        pattern="^.{6,14}$" data-validation-pattern-message="password length should be minimum6 and maximum 14">
                 <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>


      <fieldset class="form-group position-relative has-icon-left mb-0">
                        <input id="confpass" type="password" name="password2" placeholder="Confirm Password" data-validation-match-match="password" class="form-control"
                        required>

                 <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
</br>
</div>
<div style="text-align:center;margin-bottom: 1.5rem;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>


  <!--        <div class="form-group row">
>>>>>>> d5572e740ffbeb0e952c8766d4eb47803f3566e4:templates/Registerpic.php
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 text-center text-md-right"><a href="recover-password.html" class="card-link">Forgot Password?</a></div>
                      </div>
<<<<<<< HEAD:templates/login-simple.php
                      <button type="submit" name="login"class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
=======
 -->
                      <button type="submit"name="login"class="submitreg btn btn-info btn-lg btn-block">Submit</button>
>>>>>>> d5572e740ffbeb0e952c8766d4eb47803f3566e4:templates/Registerpic.php
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <!--<p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>-->
                    <p class="float-sm-right text-center m-0">Already a user?   <a href="register-user.php" class="card-link"> <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm" style="background-color:#168DEE !important;margin-top:5px;margin-left:5px;">Login</button></a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
<<<<<<< HEAD:templates/login-simple.php
  <!-- ////////////////////////////////////////////////////////////////////////////-->
=======
<script type="text/javascript">
////////button clicking event
$(document).ready(function(){
var currentTab=0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab
var flag=false;
//////button click event
   $(".submitreg").click(function(event){
      event.preventDefault();
      buttonClick();
      // nextPrev(1);
});

  function buttonClick()
{
if(currentTab==0)
{
// email
if(flag==false)
{
  isValidateEmail();
}else{
  isValidateEmailOtp();
}
}
else if(currentTab==1){
// phone
if(flag==false)
{
isValidatePhone();
}else{
isValidatePhoneOtp();
}
}
else{
//  remaining form
remainingForm();
}
}

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  // if (n == 0) {
  //   document.getElementById("prevBtn").style.display = "none";
  // } else {
  //   document.getElementById("prevBtn").style.display = "inline"
  fixStepIndicator(n);
}

function fixStepIndicator(n)
{
 // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
  if(x[i].classList.contains("color"))
  {
    x[i].className = x[i].className.replace("color", "");
  }
  }
  //... and adds the "active" class on the current step:
  x[n].className += " color";
}

function isValidateEmail()
{
var email=$('#email').val();
if(email!="")
{
if ((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
{
/////proceed with ajax query...
 $.post("registerMailSending.php",
    {
        email:email
    },
    function(data,status){
if(status=="success")
{
if(data=="OtpSended")
{
// applying modal here for otp checking
// sModal function is in commonjs.js file
flag=true;
$("#email").prop('disabled', true);
var emailOtpHtml='<br><fieldset class="form-group position-relative has-icon-left mb-0"><input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your OTP (email otp)"required id="emailnootp"><div class="form-control-position"><i class="ft-user"></i></div></fieldset><a style="margin-top:10px;text-align:right" href="javascript:void(0)" onclick="differentMail()" id="anotherMailLink">Try With Another Mail...</a>';
$("#emailfield").append(emailOtpHtml);
// var linkTryWithDifferentMail='';
// sModal("Error","Check your OTP and verify your account...");
}
}
}
)
// ajax end
}
else{
// applying modal here for showing error
// sModal("Error","Email is not correct");
}
}
else{
// applying modal here for showing error
// sModal("Error","Email is not correct");
}
}




// isValidateEmailOtp() validates OTP
function isValidateEmailOtp()
{
//////validate OTP
var emailnootp=$('#emailnootp').val().trim();
var otpLength=6;
if(emailnootp.length==otpLength)
{
$.post("validateEmailOTP.php",
    {
        emailOtp:emailnootp
    },
    function(data,status){
if(status=="success")
{

if(data=="OtpVerified")
{
      nextPrev(1);
      flag=false;
}
}
}
)
}
}


function differentMail()
{
$("#email").prop('disabled',false);
$("#email").val("");
}

function isValidatePhone()
{
// ((+*)((0[ -]+)|(91 ))(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}
var phone=$('#phone').val().trim();
if(phone!="")
{
// var pattern = new RegExp("^([0|\+[0-9]{1,5})?([7-9][0-9]{9)$");
 // if(pattern.test(phonenootp)){
$.post("PhoneOtpSending.php",
    {
        phone:phone
    },
    function(data,status){
if(status=="success")
{
if(data=="OtpSended")
{
// applying modal here for otp checking
// sModal function is in commonjs.js file
flag=true;
$("#phone").prop('disabled',true);
var phoneOtpHtml='<br><fieldset class="form-group position-relative has-icon-left mb-0"><input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your Phone OTP (Phone otp)"required id="phonenootp"><div class="form-control-position"><i class="ft-user"></i></div></fieldset>';
$("#phonefield").append(phoneOtpHtml);
// sModal("Error","Check your Phone OTP and Add remaining details");
}
}
}
)
}
}

// isValidatePhoneOtp() validates OTP
function isValidatePhoneOtp()
{
//////validate OTP
var phonenootp=$('#phonenootp').val().trim();
var otpLength=6;
if(phonenootp.length==otpLength)
{
$.post("validatePhoneOTP.php",
    {
        phoneotp:phonenootp
    },
    function(data,status){
if(status=="success")
{
if(data=="OtpVerified")
{
      nextPrev(1);
      flag=false;
}
}
}
)
}
}

function remainingForm()
{
var fname=$('#fname').val().trim();
var lname=$('#lname').val().trim();
var phonenootp=$('#desgination').val().trim();
var phonenootp=$('#dept').val().trim();
var phonenootp=$('#pass').val().trim();
var phonenootp=$('#confpass').val().trim();







}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (flag==false) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}
});
</script>
<!-- ////////////////////////////////////////////////////////////////////////////-->
>>>>>>> d5572e740ffbeb0e952c8766d4eb47803f3566e4:templates/Registerpic.php
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
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="../app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->


</body>
</html>
