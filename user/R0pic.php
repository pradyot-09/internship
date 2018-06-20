<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard eCommerce - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
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
    <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">


    <script src="../app-assets/vendors/js/forms/repeater/jquery.repeater.min.js" type="text/javascript"></script>





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
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END Custom CSS-->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
</head>

<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">
    <!-- fixed-top-->
    <?php include '../user/header.php'; ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row"> </div>
            <?php include '../user/panel.php'; ?>
            <div class="content-header row"> </div>
            <div class="content-body">


               <!-- ROW OF LAB PROPOSAL START  -->
                <div class="row">

                    <span id="error-msg" style="color:red;font-weight:bold;"></span>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card collapse-icon accordion-icon-rotate">
                                	<h2 style="padding: 20px;font-size: xx-large;color: coral;font-family: inherit;">Lab proposal</h2>

                                                    <div class="card-content collapse show">
                                                      <div class="card-body">
                                                     <!-- (form for drag start) -->
                                                        <form action="#" class="dropzone dropzone-area dz-clickable" id="dpz-btn-select-files" style="height:100px">
                                                          <div class="dz-message">Drop Files Here To Upload</div>
                                                        </form>
                                                     <!-- (form for drag end) -->
                                                     <!-- button Click me to select files -->
                                                        <button id="select-files" style="margin-left:40%;margin-top:10px" class="btn btn-primary mb-1 dz-clickable"><i class="ft-file"></i> Upload Round 0 file</button>
                                                        

                                                      </div>
                                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- ROW OF LAB PROPOSAL END  -->


            <script>
                var l = document.getElementById("hideAll");
            </script>

            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <div class="form-button-round right">
                        <button type="button" class="btn btn-primary">
                            <i class="la la-check-square-o"></i>Cancel
                          </button>

                        <button type="button" class="btn btn-primary update-form">
                            <i class="la la-check-square-o"></i>Save
                          </button>

                        <button type="button" id="submit-r0" class="btn btn-primary">
                            <i class="la la-check-square-o"></i>Submit
                          </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript">

    $(document).ready(function () {
        var m = 8;
        var exp8 = document.getElementById("noex8");
        var exp9 = document.getElementById("noex9");
        var exp10 = document.getElementById("noex10");
        var exp11 = document.getElementById("noex11");
        exp8.style.display = "none";
        exp9.style.display = "none";
        exp10.style.display = "none";
        exp11.style.display = "none";
        var decp = document.getElementById("otherDiscipline");
        decp.style.display = "none";

        $("#submit-r0").click(function (e) {
        	console.log("submit r0")
        	var php_data = {};
    		php_data.lab_name = $("#labName").val().trim();
			php_data.objective = $("#learningObjective").val().trim();
			php_data.discipline = $("#discipline").val().trim();
			php_data.state = $("#state").val().trim();
			php_data.university = $("#univName").val().trim();
			php_data.target_group = $("#target_group").val().trim();
			php_data.virtualintent = $("#virtualintent").val().trim();
			php_data.feeloflab = $("#feeloflab").val().trim();
			php_data.animationuse = $("#animationuse").val().trim();
			php_data.manual = $("#manual").val().trim();
			php_data.proceduredoc = $("#proceduredoc").val().trim();
			php_data.resources = $("#resources").val().trim();
			php_data.addhelp = $("#addhelp").val().trim();
			php_data.quiz = $("#quiz").val().trim();
			php_data.manualOC = $("#manualOC").val().trim();
			php_data.hwswOC = $("#hwswOC").val().trim();
			php_data.learning_component = $("#learning_component").val().trim();
			php_data.stud_ability = $("#stud_ability").val().trim();
			php_data.webui = $("#webui").val().trim();
			php_data.backend_tech = $("#backend_tech").val().trim();
			php_data.misc_tech = $("#misc_tech").val().trim();

        	send_ajax_request(php_data, this, 'r0submit.php');
        });

        function addExperiment() {
            var p = document.getElementById("noex" + m);;
            p.style.display = "block";
            m++;

            if (m === 11) {
                $("#add-exp").hide();
            }

            send_ajax_request({}, this, 'r0-add-experiment.php')
        }

        function otherDiscpline() {
            var n = document.getElementById("projectinput5").value;
            if (n == "others") {
                var dp = document.getElementById("otherDiscipline");
                dp.style.display = "block";
            } else {
                var dp = document.getElementById("otherDiscipline");
                dp.style.display = "none";
            }
        }

	    function fetch_select() {
	    	console.log("fetch_valiue")
	        //var vall = document.getElementById("projectinput5").value;
	        $.ajax({
	            type: 'post',
	            url: 'universityList.php',
	            data: {
	                get_option: $("#state").val().trim(),
	            },
	            success: function(response) {
	                document.getElementById("univName").innerHTML = response;
	            }
	 	   });
		}

        $("#state").change(function (e) {
        	e.preventDefault();
        	fetch_select();
        });

        $("#add-exp").click(function (e) {
            e.preventDefault();
            addExperiment();
        });
    	
    	$("#add-lab").click(function (e) {
    		e.preventDefault();
    		console.log("new lab created..");
    		var lab_name = $("#labName").val().trim();
    		var lab_objective = $("#learningObjective").val().trim();

    		var php_data = {
                lab_name: lab_name,
                lab_objective: lab_objective,
            };

            $.post("create-new-lab.php", php_data, function (data, status) {
                console.log(data, status)
                if (data.status === "success") {
                	console.log("Successfully added!")
                	$("#add-lab").parent().append('<div class="save-status" style="color: teal;font-size: small;font-style: oblique;">Saved!</div>');

                	setTimeout(function () {
                		$(".save-status").each(function () {
                			$(this).hide();
                		});
	                	$("#add-lab").hide();
                	}, 2000);

                } else if (data.status === "error") {
                    $("#error-msg").text(data.msg);
                }
            });
    	});

    	$(".update-form").click(function (e) {
    		var section = $(this).attr("data-section");
    		var php_data = {};
    		console.log("update form ", section)
    		php_data.section = section;

    		if (section === "introduction") {
    			php_data.lab_name = $("#labName").val().trim();
    			php_data.objective = $("#learningObjective").val().trim();
    			php_data.discipline = $("#discipline").val().trim();
    			php_data.state = $("#state").val().trim();
    			php_data.university = $("#univName").val().trim();
    			php_data.target_group = $("#target_group").val().trim();

                console.log("total experiment is ", m)
    			for(var i=0; i <m ; i++) {
    				php_data["exp_name" + i] = $("#noex" +(i + 1)).val().trim();
    			}
    			console.log(php_data)

    		} else if (section === "virtualization") {
    			php_data.virtualintent = $("#virtualintent").val().trim();
    			php_data.feeloflab = $("#feeloflab").val().trim();
    			php_data.animationuse = $("#animationuse").val().trim();
    		} else if  (section === "documentation") {
    			php_data.manual = $("#manual").val().trim();
    			php_data.proceduredoc = $("#proceduredoc").val().trim();
    			php_data.resources = $("#resources").val().trim();
    			php_data.addhelp = $("#addhelp").val().trim();
    			php_data.quiz = $("#quiz").val().trim();

    		} else if  (section === "technology") {
    			php_data.webui = $("#webui").val().trim();
    			php_data.backend_tech = $("#backend_tech").val().trim();
    			php_data.misc_tech = $("#misc_tech").val().trim();

    		} else if (section === "outcome") {
    			php_data.manualOC = $("#manualOC").val().trim();
    			php_data.hwswOC = $("#hwswOC").val().trim();

    		} else if (section === "studentlearning") {
    			php_data.learning_component = $("#learning_component").val().trim();
    			php_data.stud_ability = $("#stud_ability").val().trim();

    		}
			send_ajax_request(php_data, this);
    	});

    	function send_ajax_request (php_data, save_btn, file_name) {
    		console.log("sending request to ro")
    		if (file_name === undefined) {
    			file_name = 'r0save.php';
    		}
    		console.log("sending request to ", file_name);

    		$.post(file_name, php_data, function (data, status) {
    			console.log(data, status)
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

    <!-- // Basic form layout section end -->
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
