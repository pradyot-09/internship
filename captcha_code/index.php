<?php 
session_start();
// if (!isset($_SESSION['name']))
// header("Location: index.php");
error_reporting(0);

include 'connect.php';

if(isset($_POST['submit'])){
    // code for check server side validation
if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != '0')
    {  
        $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.     
    }
    else
    {  // Captcha verification is Correct. Final Code Execute here!     
        $email=$_POST['email'];
        $emails=htmlentities($email);
        $password=$_POST['password'];
        $passwords=htmlentities($password);
        
        $sql="SELECT * FROM register WHERE email='$emails' and pwd=MD5('$passwords') ";
        $result=mysql_query($sql);
        $counts=mysql_num_rows($result);

        if (mysql_num_rows($result)==1)
        {
            $row=mysql_fetch_array($result);

            $admin=$row['admin'];

            if($admin=='1')
            {
                $email=$row['email'];
                $_SESSION['email']=$email;
                header("location:viewparticipant.php");
            }

            elseif($admin=='0')
            {
            $id=$row['id'];
            $picname=$row['picname'];
            $name=$row['name'];
            $designation=$row['designation'];
            $department=$row['department'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            
            $_SESSION['id']=$id;
            $_SESSION['picname']=$picname;
            $_SESSION['name']=$name;
            $_SESSION['designation']=$designation;
            $_SESSION['department']=$department;
            $_SESSION['email']=$email;
            $_SESSION['mobile']=$mobile;

            header("location:template.php");
            }
        }
        else 
        $login="<span style='color:red'>Email and Password do not match</span>"; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Virtual Labs</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<script type='text/javascript'>
	function refreshCaptcha()
	{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
	}
</script>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
    	<?php include 'headerlogin.php'; ?>
        <div class="unix-login">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <br><h3><strong><center><u>New Lab Submission for PICs</u></center></strong></h3>
                        <div class="login-content card">
                            <div class="login-form">
                               <form action='#' method='POST' role='form' enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <p><b><?php echo $login;?></b></p>
                                    </div>
                                    <div class="form-group">
                                        <label style="color: #000;"><b>Email address</b></label>
                                        <input type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <p><b><?php echo $msg;?></b></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Captcha:</label>
                                        <img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>
								        <label for='message'>Enter the code above here :</label>
								        <input type="text" name="captcha_code" id="captcha_code"> <br>
								        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.
                                        <div class="row">
                                        <div class="col-md-6"><label style="margin-top: 15%;"><strong> <a href="forgotpwd.php">Forgot Password?</a> </strong></label></div>
                                        <div class="col-md-6"><button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit">Sign in</button></div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6"><label style="margin-top: 8%; color: #4680FF; text-align: right;">Not Registered?</label></div>
                                        <div class="col-md-4" style="float: right;"><a href="reg.php"><button type="button" class="btn btn-primary">Register</button></a></div>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>

</body>

</html>