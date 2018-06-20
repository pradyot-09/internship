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
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/forms/validation/form-validation.css">
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
                              <h4 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                                 <span>
                                    <h4><b>Register with Vlabs-Dev</b></h4>
                                 </span>
                              </h4>
                              <span id="error-msg" style="color:red;font-weight:bold;"></span>
                           </div>
                           <div class="card-content">
                              <div class="card-body">
                                 <form class="form-horizontal form-simple" novalidate>
                                    <div class="tab">
                                       <fieldset id="email-form" class="form-group position-relative has-icon-left mb-0" >
                                          <div class="controls">
                                             <input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your Email"
                                                id="email" data-validation-regex-regex="([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})" required data-validation-required-message="This field is required" data-validation-regex-message="Enter Valid Email id" required>
                                          </div>
                                          <div class="form-control-position">
                                             <i class="ft-mail"></i>
                                          </div>
                                       </fieldset>
                                       <br>
                                    </div>
                                    <div class="tab">
                                       <fieldset id="phone-form" class="form-group position-relative has-icon-left mb-0">
                                          <div class="controls">
                                             <input type="text"  class="form-control form-control-lg input-lg" id="phone" name="uname" placeholder="Enter your Phone no." data-validation-regex-regex="[0-9]{12}$"
                                                data-validation-regex-message="Enter Valid Mobile No." required >
                                          </div>
                                          <div class="form-control-position">
                                             <i class="ft-phone"></i>
                                          </div>
                                       </fieldset>
                                       <br>
                                    </div>
                                    <div class="tab">
                                       <fieldset class="form-group position-relative has-icon-left mb-0" id="vlnc-form">
                                          <div class="controls">
                                             <select class="select2 form-control" id="pic" name="presiding_pic" required data-validation-required-message="This field is required">
                                                <optgroup label="Parent PIC">
                                                   <option value="" selected disabled hidden style="color:#cacfe7">Parent PIC</option>
                                                   <option value="Amrita Vishwa Vidyapeetham">Amrita Vishwa Vidyapeetham</option>
                                                   <option value="College of Engineering Pune">College of Engineering Pune</option>
                                                   <option value="Dayalbagh Education Institute">Dayalbagh Education Institute</option>
                                                   <option value="IIT Bombay">IIT Bombay</option>
                                                   <option value="IIT Delhi">IIT Delhi</option>
                                                   <option value="IIT Kharagpur">IIT Kharagpur</option>
                                                   <option value="IIT Kanpur">IIT Kanpur</option>
                                                   <option value="IIT Roorkee">IIT Roorkee</option>
                                                   <option value="National Institute of Technology Karnataka Surathkal"> National Institute of Technology Karnataka Surathkal </option>
                                             </select>
                                          </div>
                                          <div class="form-control-position">
                                          <i class="ft-home"></i>
                                          </div>
                                       </fieldset>
                                       </br>
                                       <fieldset class="form-group position-relative has-icon-left mb-0">
                                       <div class="controls">
                                       <select class="select2 form-control"  id="institute" name="presiding_pic" required data-validation-required-message="This field is required">
                                       <optgroup label="Parent PIC">
                                       <option value="" selected disabled hidden style="color:#cacfe7">Name of Institute</option>
                                       <option value="Amrita Vishwa Vidyapeetham">Goverment College</option>
                                       <option value="Amrita Vishwa Vidyapeetham">Goverment College</option>
                                       <option value="Amrita Vishwa Vidyapeetham">Goverment College</option>
                                       <option value="Amrita Vishwa Vidyapeetham">Goverment College</option>
                                       <option value="Amrita Vishwa Vidyapeetham">Goverment College</option>
                                       <option value="Amrita Vishwa Vidyapeetham">Goverment College</option>
                                       </select>
                                       </div>
                                       <div class="form-control-position">
                                       <i class="ft-home"></i>
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
                                       <div class="controls">
                                       <input id="lname" type="text" name="lname" placeholder="Last Name" class="form-control" pattern="^[a-zA-Z]+$" required data-validation-required-message="This field is required"   data-validation-pattern-message="Characters only"
                                          class="form-control" required>
                                       </div>
                                       <div class="form-control-position">
                                       <i class="ft-user"></i>
                                       </div>
                                       </fieldset>
                                       </br>
                                       <fieldset class="form-group position-relative has-icon-left mb-0">
                                       <div class="controls">
                                       <select id="desgination" class="select2  form-control" name="des" required data-validation-required-message="This field is required" >
                                       <optgroup label="Designation">
                                       <option value="" selected disabled hidden>Designation</option>
                                       <option value="professor">Professor</option>
                                       <option value="assocprofessor">Associate Professor</option>
                                       <option value="asstprofessor">Assistant Professor</option>
                                       </optgroup>
                                       </select>
                                       </div>
                                       <div class="form-control-position">
                                       <i class="ft-user"></i>
                                       </div>
                                       </fieldset>
                                       </br>
                                       <fieldset class="form-group position-relative has-icon-left mb-0">
                                          <div class="controls">
                                             <select id="department" class="select2  form-control" name="des" required data-validation-required-message="This field is required" >
                                                <optgroup label="Designation">
                                                   <option value="" selected disabled hidden style="color:#cacfe7">Department</option>
                                                   <option value="professor">Computer Science and Engineering</option>
                                                   <option value="professor">Computer Science and Engineering</option>
                                                   <option value="professor">Computer Science and Engineering</option>
                                                   <option value="professor">Computer Science and Engineering</option>
                                                   <option value="professor">Computer Science and Engineering</option>
                                                </optgroup>
                                             </select>
                                          </div>
                                          <div class="form-control-position">
                                             <i class="ft-home"></i>
                                          </div>
                                       </fieldset>
                                       </br>
                                       <fieldset class="form-group position-relative has-icon-left mb-0">
                                          <div class="controls">
                                             <input id="pass" type="password" name="password" placeholder="Password" class="form-control" required data-validation-required-message="This field is required"
                                                pattern="^.{6,14}$" data-validation-pattern-message="password length should be minimum 6 and maximum 14">
                                          </div>
                                          <div class="form-control-position">
                                             <i class="la la-key"></i>
                                          </div>
                                       </fieldset>
                                       </br>
                                       <fieldset class="form-group position-relative has-icon-left mb-0">
                                          <div class="controls">
                                             <input id="confpass" type="password" name="password2" placeholder="Confirm Password" data-validation-match-match="password" class="form-control"
                                                required required data-validation-required-message="This field is required"
                                                pattern="^.{6,14}$" data-validation-pattern-message="password length should be minimum6 and maximum 14">
                                          </div>
                                          <div class="form-control-position">
                                             <i class="la la-key"></i>
                                          </div>
                                       </fieldset>
                                       </br>
                                    </div>
                                    <div style="text-align:center;margin-bottom: 1.5rem;">
                                       <span class="step"></span>
                                       <span class="step"></span>
                                       <span class="step"></span>
                                    </div>
                                    <button type="submit" id="register-vlnc" data-event="get_email" name="login" class="submitreg btn btn-info btn-lg btn-block">Submit</button>
                                 </form>
                              </div>
                           </div>
                           <div class="card-footer">
                              <div class="">
                                 <!--<p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>-->
                                 <p class="float-sm-right text-center m-0">Already a user?   <a href="login.php" class="card-link"> <button type="button" class="btn mr-1 mb-1 btn-primary btn-sm" style="background-color:#168DEE !important;margin-top:5px;margin-left:5px;">Login</button></a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         ////////button clicking event
         $(document).ready(function () {
         showTab(0);

         $("#register-vlnc").click(function(event){
            console.log("clicked");
            $("#error-msg").text("");
            var btn_event = $("#register-vlnc").attr("data-event");
            event.preventDefault();

            if (btn_event === "get_email") {
               get_email_and_send_otp();
            } else if (btn_event === "verify_email") {
               verify_email_with_otp();
            } else if (btn_event === "get_phone_no") {
               get_phone_no_and_send_otp();
            } else if (btn_event === "verify_phone_no") {
               verify_phone_no_with_otp();
            } else if (btn_event === "register_vlnc_finally") {
               register_vlnc_finally();
            }
         });

         function get_email_and_send_otp () {
            var email = $("#email").val().trim();
            console.log("get_email_and_send_otp", email)
            if(email!="" && (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)))
            {
               $.post("send-otp-to-email.php", {email: email}, function (data, status) {
                  console.log(data, status);
                  if (data.status === "success") {
                     console.log("OTP send to email");
                     $("#register-vlnc").attr("data-event", "verify_email");
                     $("#email").prop('disabled', true);
                     $("#register-vlnc").text("Verify email")

                     render_email_otp_form();

                  } else if (data.status === "error") {
                     $("#error-msg").text(data.msg);
                  }
               });

            } else {
               $("#error-msg").text("Invalid email");
            }
         }

         function verify_email_with_otp () {
            var otp = $("#email_otp").val().trim();

            var php_data = {
                emailOtp: otp,
            };

            $.post("validate-email-otp.php", php_data, function (data, status) {
                console.log(data, status)
                if (data.status === "success") {
                     $("#register-vlnc").attr("data-event", "get_phone_no");
                     $("#register-vlnc").text("Submit");

                     render_get_phone_no_form();
                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });
         }

         function get_phone_no_and_send_otp () {
            var phone = $("#phone").val().trim();
            console.log("get_email_and_send_otp", phone);

            if(phone.length === 12)
            {
               $.post("send-otp-to-phone.php", {phone: phone}, function (data, status) {
                  console.log(data, status);
                  if (data.status === "success") {
                     console.log("OTP send to email");
                     $("#register-vlnc").attr("data-event", "verify_phone_no");
                     $("#register-vlnc").text("Verify phone no");
                     $("#phone").prop('disabled', true);

                     render_verify_phone_no_form();
                  } else if (data.status === "error") {
                     $("#error-msg").text(data.msg);
                  }
               });

            } else {
               $("#error-msg").text("Invalid phone no");
            }
         }

         function verify_phone_no_with_otp () {
            var otp = $("#phone_otp").val().trim();

            var php_data = {
                phoneotp: otp,
            };

            $.post("validate-phone-otp.php", php_data, function (data, status) {
                console.log(data, status)
                if (data.status === "success") {
                     $("#register-vlnc").attr("data-event", "register_vlnc_finally");
                     $("#register-vlnc").text("Submit");

                     render_register_vlnc_form();
                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });            
         }

         function register_vlnc_finally () {
            console.log("register_vlnc_finally")
            var fname=$('#fname').val().trim();
            var lname=$('#lname').val().trim();
            var designation=$('#desgination').val().trim();
            var department=$('#department').val().trim();
            var pass=$('#pass').val().trim();
            var confpass=$('#confpass').val().trim();
            var institute = $("#institute").val().trim();
            var pic = $("#pic").val().trim();
            var phone_no = $("#phone").val().trim();
            var email = $("#email").val().trim();

            var php_data = {
                 fname: fname,
                 lname: lname,
                 email: email,
                 designation: designation,
                 department: department,
                 pass: pass,
                 confpass: confpass,
                 institute: institute,
                 pic: pic,
                 phone_no: phone_no,
             };

            $.post("add-vlnc.php", php_data, function(data, status) {
               console.log(data, status)
                  if (data.status === "success") {
                     // window.location.href = "login.php"
                     // Redirect to login from PHP
                  } else if (data.status === "error") {
                     $("#error-msg").text(data.msg);
                  }
            });
         }

         function render_verify_phone_no_form () {
            console.log("appending phone otp")
            $("#phone").prop('disabled',true);
            var phoneOtpHtml = '<br><fieldset class="form-group position-relative has-icon-left mb-0"><input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your Phone OTP (Phone otp)"required id="phone_otp"><div class="form-control-position"><i class="ft-lock"></i></div></fieldset>';
            $("#phone-form").append(phoneOtpHtml);
         }

         function render_register_vlnc_form () {
            hideTab(1);
            showTab(2);
         }

         function render_get_phone_no_form () {
            console.log("render_get_phone_no_form")
            hideTab(0);
            showTab(1);
         }

         function render_email_otp_form () {
            var emailOtpHtml = '<br><fieldset class="form-group position-relative has-icon-left mb-0"><input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your OTP (email otp)"required id="email_otp"><div class="form-control-position"><i class="ft-lock"></i></div></fieldset>';
            $("#email-form").append(emailOtpHtml);
         }

         function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            fixStepIndicator(n);
         }

         function hideTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "none";
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
      });
      </script>
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
      <!-- END PAGE LEVEL JS-->
   </body>
</html>
