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

  <!-- JQUERY -->
  <link rel="javascript" type="text/js" href="../app-assets/jquery/jquery-3.3.1.min.js">
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>

</head>
<body class="vertical-layout vertical-content-menu 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="vertical-content-menu" data-col="1-column">
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
                    <span>Forgot Password?</span>
                    
                  </h6>
                   <span id="error-msg" style="color:red;font-weight:bold;"></span>
                </div>
                <div class="card-content">
                  <div class="card-body">
                    <form class="form-horizontal form-simple" >
                      <fieldset class="form-group position-relative has-icon-left mb-0" id="html-form">
                        <input type="text" class="form-control form-control-lg input-lg" id="email" name="email" placeholder="Your email"
                        required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      <br>
                        <input type="number" class="form-control form-control-lg input-lg" id="phone" name="phone"
                        placeholder="Enter Phone no." required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-md-left">
                          <fieldset>
                            <!--<input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me"> Remember Me</label>-->
                          </fieldset>
                        </div>
                      </div>
                      <button type="submit" name="receiveOtp" id="send-otp" data-event="send_otp" class="btn btn-info btn-lg btn-block">Submit</button>
                    </form>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="">
                    <!--<p class="float-sm-left text-center m-0"><a href="recover-password.html" class="card-link">Recover password</a></p>-->
                    <p class="float-sm-right text-center m-0">New to Vlabs-Dev? <a href="register-user.php" class="card-link"><button type="button" class="btn mr-1 mb-1 btn-primary btn-sm" style="background-color:#168DEE !important;margin-top:5px;margin-left:5px;">Sign up</button></a></p>
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

        $("#send-otp").click(function(event){
            console.log("clicked");
            $("#error-msg").text("");
            var btn_event = $("#send-otp").attr("data-event");

            event.preventDefault();
            console.log("BUTON clicked, ", btn_event)
            if (btn_event === "send_otp") {
                send_otp_to_email_phone();
            } else if (btn_event === "verify_otp") {
                verify_otp();
            } else if (btn_event === "set_pwd") {
                reset_password();
            }
        });

        function send_otp_to_email_phone () {
            console.log("send_otp_to_email_phone")
            var email = $("#email").val().trim();
            var phone = $("#phone").val().trim();

            var php_data = {
                email: email,
                phone: phone,
            };

            $.post("validate-email-phone.php", php_data, function (data, status) {
                console.log(data, data.status);
                if (data.status === "success") {

                    $("#send-otp").attr("data-event", "verify_otp");
                    console.log("after setting attribute, ...", $("#send-otp").attr("data-event"))
                    $("#send-otp").text("Verify OTP");
                    render_verify_otp_form();
                    $.post("send-forgot-pwd-otp.php", {phone: phone, email: email}, function (data, status) {
                        console.log("OTP send to phone...")
                    });

                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });
        }

        function verify_otp () {
            var otp = $("#otp").val().trim();

            var php_data = {
                phoneotp: otp,
            };

            $.post("validate-phone-otp.php", php_data, function (data, status) {
                console.log(data, status)
                if (data.status === "success") {
                    $("#send-otp").attr("data-event", "set_pwd");
                    $("#send-otp").text("Reset password");
                    render_password_reset_form();
                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });
        }

        function reset_password () {
            var pwd = $("#pwd").val().trim();
            var conf_pwd = $("#conf_pwd").val().trim();

            var php_data = {
                pwd: pwd,
                conf_pwd: conf_pwd,
            }

            $.post("", php_data, function (data, status) {
                if (data.status === "success") {
                    // Redirect to dashboard form PHP
                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });
        }

        function render_password_reset_form () {
            var form='<br><fieldset class="form-group position-relative has-icon-left mb-0"><input type="password" class="form-control form-control-lg input-lg" name="password" placeholder="Enter your password" required id="pwd"><input type="password" class="form-control form-control-lg input-lg" name="password" placeholder="Confirm password" required id="conf_pwd"><div class="form-control-position"><i class="ft-lock"></i></div></fieldset>';
            $("#html-form").html(form);
        }

        function render_verify_otp_form () {
            console.log("render_verify_otp_form")
            $("#email").prop('disabled', true);
            $("#phone").prop('disabled', true);

            var form='<br><fieldset class="form-group position-relative has-icon-left mb-0"><input type="text" class="form-control form-control-lg input-lg" name="uname" placeholder="Enter your OTP "required id="otp"><div class="form-control-position"><i class="ft-lock"></i></div></fieldset>';
            $("#html-form").append(form);
        }


    });
  </script>
                          
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <!-- BEGIN VENDOR JS-->
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


