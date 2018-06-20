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
                <div class="row">

                    <span id="error-msg" style="color:red;font-weight:bold;"></span>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card collapse-icon accordion-icon-rotate">
                                	<h2 style="padding: 20px;font-size: xx-large;color: coral;font-family: inherit;">Lab proposal</h2>

                                    <div id="headingCollapse1" class="card-header border-warning">
                                        <a data-toggle="collapse" href="#collapse1" aria-expanded="true" aria-controls="collapse1" class="card-title lead">Introduction</a>
                                    </div>
                                    <div id="collapse1" role="tabpanel" aria-labelledby="headingCollapse1" class="collapse show">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Name of Lab</label>
                                                            <input type="text" id="labName" class="form-control" placeholder="Name of Lab" name="fullname">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Learning Objective</label>
                                                            <input type="text" id="learningObjective" class="form-control" placeholder="Intention of Virtulization" name="fullname">
                                                        </div>

                                                        <div class="form-group">
                                                            <button type="button" id="add-lab" data-repeater-create="" class="btn btn-primary">
                                                              <i class="ft-plus"></i>Add Lab
                                                            </button>
                                                        </div>

                                                        <div id="hideAll">

                                                            <div class="form-group">
                                                                <label for="eventRegInput2">Name of Experiments (min:7 to max:11)</label>
                                                                <input type="text" id="noex1" class="experiment form-control" placeholder="Name of Experiments 1" name="title">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" id="noex2" class="experiment form-control" placeholder="Name of Experiments 2" name="title">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" id="noex3" class="experiment form-control" placeholder="Name of Experiments 3" name="title">
                                                            </div>

                                                            <div class="form-group">
                                                                <input type="text" id="noex4" class="experiment form-control" placeholder="Name of Experiments 4" name="title">
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" id="noex5" class="experiment form-control" placeholder="Name of Experiments 5" name="title">
                                                            </div>



                                                            <div class="form-group">
                                                                <input type="text" id="noex6" class="experiment form-control" placeholder="Name of Experiments 6" name="title">
                                                            </div>



                                                            <div class="form-group">
                                                                <input type="text" id="noex7" class="form-control" placeholder="Name of Experiments 7" name="title">
                                                            </div>





                                                            <div class="form-group">
                                                                <input type="text" id="noex8" class="form-control" placeholder="Name of Experiments 8" name="title">
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" id="noex9" class="form-control" placeholder="Name of Experiments 9" name="title">
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" id="noex10" class="form-control" placeholder="Name of Experiments 10" name="title">
                                                            </div>


                                                            <div class="form-group">
                                                                <input type="text" id="noex11" class="form-control" placeholder="Name of Experiments 11" name="title">
                                                            </div>

                                                            <div class="form-group">
                                                                <button type="button" id="add-exp" data-repeater-create="" class="btn btn-primary">
      <i class="ft-plus"></i>Add Experiments
    </button>
                                                            </div>




                                                            <div class="form-group">
                                                                <label for="projectinput5">List of Discipline</label>
                                                                <select id="discipline" name="interested" onchange="otherDiscpline()" class="form-control">
            <option value="none" selected="" disabled="">List of Discipline</option>


              <option value="ec">Electronics and Communications</option>
            <option value="cse">Computer Science and Engineering</option>
           <option value="ee">Electrical Engineering</option>



             <option value="me">Mechanical Engineering</option>
            <option value="ce">Chemical Engineering</option>
            <option value="bbe">Boitechnology and Boimedical Engineering</option>
            <option value="ce">Civil Engineering</option>
            <option value="ps">Physical Sciences</option>
            <option value="cs">Chemical Sciences</option>
              <option value="others">Others</option>


          </select>
                                                            </div>


                                                            <div id="otherDiscipline" class="form-group">
                                                                <label for="projectinput5">Other Discipline</label>
                                                                <select id="projectinput5" name="interested" class="form-control">
              <option value="none" selected="" disabled="">List of Discipline</option>
              <option value="ec">Electronics and Communications</option>
              <option value="cse">Computer Science and Engineering</option>
               <option value="ee">Electrical Engineering</option>
               <option value="me">Mechanical Engineering</option>
            <option value="ce">Chemical Engineering</option>
            <option value="bbe">Boitechnology and Boimedical Engineering</option>
            <option value="ce">Civil Engineering</option>
            <option value="ps">Physical Sciences</option>
            <option value="cs">Chemical Sciences</option>

          </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="projectinput5">Select State</label>
                                                                <select id="state" name="interested" class="form-control">
            <option value="none" selected="" disabled="">Select State</option>
<?php
 include '../core/connect.php';
   $query = "CALL selectstate()";

          if($check = mysql_query($query)){
          //echo "Done";
            while($value = mysql_fetch_assoc($check)){

   ?>
    <option><?php echo $value['state'];?></option>

<?php
      }
  }
?>
          </select>

                                                            </div>

                                                            <div class="form-group">
                                                                <label for="projectinput6">Select University</label>

                                                                <select id="univName" name="stateName" class="form-control">
            <option value="none" selected="" disabled="">University</option>

          </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="eventRegInput2">Target Group</label>
                                                                <input type="text" id="target_group" class="form-control" placeholder="Target Group" name="title">
                                                            </div>

                                                        </div>
                                                        <div class="form-button-round center">
                                                            <button type="button" class="btn btn-warning mr-1">
      <i class="ft-x"></i> Cancel
    </button>
                                                            <button type="button" data-section="introduction" class="btn btn-primary update-form">
      <i class="la la-check-square-o"></i> Save
    </button>
                                                        </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headingCollapse2" class="card-header border-warning">
                                        <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="card-title lead collapsed">Virtualization</a>
                                    </div>
                                    <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="collapse" aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Intention of Virtulization</label>
                                                            <input type="text" id="virtualintent" class="form-control" placeholder="Intention of Virtulization" name="fullname">
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="eventRegInput2">Use of Animation</label>
                                                            <input type="text" id="animationuse" class="form-control" placeholder="Use of Animation" name="title">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventRegInput2">Feel of Lab</label>
                                                            <input type="text" id="feeloflab" class="form-control" placeholder="Feel of Lab" name="title">
                                                        </div>
                                                        <div class="form-button-round center">
                                                            <button type="button" class="btn btn-warning mr-1">
  <i class="ft-x"></i> Cancel
</button>
                                                            <button type="button" data-section="virtualization" class="btn btn-primary update-form">
  <i class="la la-check-square-o"></i> Save
</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headingCollapse3" class="card-header border-warning">
                                        <a data-toggle="collapse" href="#collapse3" aria-expanded="false" aria-controls="collapse3" class="card-title lead collapsed">Technology Used</a>
                                    </div>
                                    <div id="collapse3" role="tabpanel" aria-labelledby="headingCollapse3" class="collapse" aria-expanded="false">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Web based UI/Software based UI</label>
                                                            <input type="text" id="webui" class="form-control" placeholder="Web based UI/Software based UI" name="fullname">
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="eventRegInput2">Backend Software (only FOSS) </label>
                                                            <input type="text" id="backend_tech" class="form-control" placeholder="Backend Software (only FOSS)" name="title">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventRegInput2">Miscellaneous Technology</label>
                                                            <input type="text" id="misc_tech" class="form-control" placeholder="Miscellaneous Technology" name="title">
                                                        </div>
                                                        <div class="form-button-round center">
                                                            <button type="button" class="btn btn-warning mr-1">
  <i class="ft-x"></i> Cancel
</button>
                                                            <button type="button" data-section="technology" class="btn btn-primary update-form">
  <i class="la la-check-square-o"></i> Save
</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headingCollapse4" class="card-header border-warning">
                                        <a data-toggle="collapse" href="#collapse4" aria-expanded="false" aria-controls="collapse4" class="card-title lead collapsed">Documentation</a>
                                    </div>
                                    <div id="collapse4" role="tabpanel" aria-labelledby="headingCollapse4" class="collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Manual</label>
                                                            <textarea type="text" id="manual" class="form-control" placeholder="Manual" name="fullname"> </textarea>
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="eventRegInput2">Procedure </label>
                                                            <textarea type="text" id="proceduredoc" class="form-control" placeholder="Procedure" name="title"> </textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventRegInput2">Related Resources</label>
                                                            <textarea type="text" id="resources" class="form-control" placeholder="Related Resources" name="title"> </textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="eventRegInput2">Additional Help</label>
                                                            <textarea type="text" id="addhelp" class="form-control" placeholder="Additional Help" name="title"> </textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="eventRegInput2">Quiz</label>
                                                            <textarea type="text" id="quiz" class="form-control" placeholder="Additional Help" name="title"> </textarea>
                                                        </div>


                                                        <div class="form-button-round center">
                                                            <button type="button" class="btn btn-warning mr-1">
  <i class="ft-x"></i> Cancel
</button>
                                                            <button type="button" data-section="documentation" class="btn btn-primary update-form">
  <i class="la la-check-square-o"></i> Save
</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="headingCollapse5" class="card-header border-warning">
                                        <a data-toggle="collapse" href="#collapse5" aria-expanded="false" aria-controls="collapse5" class="card-title lead collapsed">Expected Outcome</a>
                                    </div>
                                    <div id="collapse5" role="tabpanel" aria-labelledby="headingCollapse5" class="collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Outcome through Manual</label>
                                                            <input type="text" id="manualOC" class="form-control" placeholder="Outcome through manual" name="fullname">
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="eventRegInput2">Outcome through Simulator </label>
                                                            <input type="text" id="hwswOC" class="form-control" placeholder="Outcome through Simulator" name="title">
                                                        </div>


                                                        <div class="form-button-round center">
                                                            <button type="button" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> Cancel
                                  </button>
                                                            <button type="button" data-section="outcome" class="btn btn-primary update-form">
                                    <i class="la la-check-square-o"></i> Save
                                  </button>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                    <div id="headingCollapse6" class="card-header border-warning">
                                        <a data-toggle="collapse" href="#collapse6" aria-expanded="false" aria-controls="collapse6" class="card-title lead collapsed">Student Learning & Feedback</a>
                                    </div>
                                    <div id="collapse6" role="tabpanel" aria-labelledby="headingCollapse6" class="collapse" aria-expanded="false" style="height: 0px;">
                                        <div class="card-content">
                                            <div class="card-body">
                                                <form class="form">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="eventRegInput1">Learning Component</label>
                                                            <input type="text" id="learning_component" class="form-control" placeholder="Learning Component" name="fullname">
                                                        </div>
                                                        <div class="form-group">

                                                            <label for="eventRegInput2">Student ability to perform in real lab </label>
                                                            <input type="text" id="stud_ability" class="form-control" placeholder="Student ability to perform in real lab" name="title">
                                                        </div>


                                                        <div class="form-button-round center">
                                                            <button type="button" class="btn btn-warning mr-1">
  <i class="ft-x"></i> Cancel
</button>
                                                            <button type="button" data-section="studentlearning" class="btn btn-primary update-form">
  <i class="la la-check-square-o"></i> Save
</button>
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
                </div>


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
