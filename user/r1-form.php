<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
  <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
  <meta name="author" content="PIXINVENT">
  <title>R1 Form</title>
  <link rel="apple-touch-icon" href="../app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="../app-assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700" rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/jsgrid/jsgrid.min.css">

    <link rel="stylesheet" type="text/css" href="../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/weather-icons/climacons.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/fonts/meteocons/style.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/morris.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/chartist.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/charts/chartist-plugin-tooltip.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/animate/animate.css">
  <!--
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/tables/jsgrid/jsgrid.min.css">

   -->
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
  <!--CKeditor-->
  <script src="../ckeditor/ckeditor.js"> </script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>


</head>


<body class="vertical-layout vertical-content-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

  <!-- fixed-top-->
  <?php include '../user/header.php'; ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"></div><?php include '../user/panel.php'; ?>
      <div class="content-body">
        <div class="col-xl-12 col-lg-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Pedagogy and Learning Objectives</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                <ul class="nav nav-tabs">
                  <?php
                  $qry="SELECT exp_id FROM experiment WHERE lab_id=100";
                    if($check = mysql_query($qry)){
                      $i=1;
                     while($value = mysql_fetch_assoc($check)){
                          ?>
                            <li class="nav-item">
                              <a class="<?php if($i==1) {echo 'nav-link active';} else { echo 'nav-link';} ?>" id='<?php echo $value['exp_id'][0];?>'; data-toggle="tab" aria-controls="<?php echo "tab-exp".$i;?>"
                              href="<?php echo "#tab-exp".$i;?>" aria-expanded="true">
                                <span class="badge badge-pill badge-glow badge-default badge-info float-right"></span><?php echo "Exp ".$i;?></a>
                            </li>

                          <?php
                          $i++;
                        }
                      
                    }
                    
                   ?>
                </ul>
                <div class="tab-content px-1 pt-1">
                  <?php
                  $qry="SELECT exp_id FROM experiment WHERE lab_id=100";
                    if($check = mysql_query($qry)){
                      $i=1;
                     while($value = mysql_fetch_assoc($check)){
                  ?>
                  <div aria-expanded="true" class="R1form <?php if($i==1) {echo 'tab-pane active';} else { echo 'tab-pane';} ?>" id="<?php echo "tab-exp".$i;?>" aria-expanded="true"
                            aria-labelledby="<?php echo "tab-exp".$i;?>">
                    <div class="col-lg-12 col-xl-12">
                      <div class="mb-2 mt-2">
                        <h5 class="mb-0 text-uppercase"></h5>
                      </div>
                      <div class="card collapse-icon accordion-icon-rotate">
                        <div class="card-header border-warning" id="<?php echo "headingCollapse1".$value["exp_id"][0];?>">
                          <a aria-controls="<?php echo "collapse1".$value["exp_id"][0];?>" aria-expanded="true" class="card-title lead" data-toggle="collapse" href="<?php echo "#collapse1".$value["exp_id"][0];?>">
                          <h4><b><u>1. Learning Objectives and Cognitive Level</u></b></h4></a>
                        </div>
                        <div aria-labelledby="<?php echo "headingCollapse1".$value["exp_id"][0];?>" class="collapse show" id="<?php echo "collapse1".$value["exp_id"][0];?>" role="tabpanel">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="form-group row">
                                <!-- tables starting -->
                                <div class="jsgrid" id="validation" style="position: relative; height: auto; width: 100%;">
                                  <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                    <table class="jsgrid-table">
                                      <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Sr No.</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Learning Objective</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Cognitive Level</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Action Verbs</th>
                                        <th class="addRow jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" data-exp-id="<?php echo $value["exp_id"][0];?>"><input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button add-new-row"  title="Add" type="button"></th>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="jsgrid-grid-body">
                                    <table class="jsgrid-table tbody">
                                      <tbody id="<?php echo "tbody".$value["exp_id"][0];?>"></tbody>
                                    </table>
                                  </div>
                                </div><!-- tables ending -->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card collapse-icon accordion-icon-rotate">
                        <div class="card-header border-warning" id="<?php echo "headingCollapse2".$value["exp_id"][0];?>">
                          <a aria-controls="<?php echo "collapse2".$value["exp_id"][0];?>" aria-expanded="false" class="card-title lead collapsed" data-toggle="collapse" href="<?php echo "#collapse2".$value["exp_id"][0];?>">
                          <h4><b><u>2. Instruction Strategies</u></b></h4></a>
                        </div>
                        <div aria-expanded="true" aria-labelledby="<?php echo "headingCollapse2".$value["exp_id"][0];?>" class="collapse" id="<?php echo "collapse2".$value["exp_id"][0];?>" role="tabpanel">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="labinput1">2.1 Method</label></h4>
                                <div class="col-md-9">
                                  <input class="form-control ins_method" name="labinput1" placeholder="Method" required="" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="labinput1">2.2 Assessment</label></h4>
                                <div class="col-md-9">
                                  <input class="ins_description form-control" name="labinput1" placeholder="Assessment" required="" type="text">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-md-3 label-control" for="labinput1">2.3 Instruction strategy</label></h4>
                                <div class="col-md-9">
                                  <input class="ins_strategy form-control" name="labinput1" placeholder="strategy" required="" type="text">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-header border-warning" id="<?php echo "headingCollapse3".$value["exp_id"][0];?>">
                          <a aria-controls="<?php echo "collapse3".$value["exp_id"][0];?>" aria-expanded="false" class="card-title lead collapsed" data-toggle="collapse" href="<?php echo "#collapse3".$value["exp_id"][0];?>">
                          <h4><b><u>3. Task and Assessment</u></b></h4></a>
                        </div>
                        <div aria-expanded="false" aria-labelledby="<?php echo "headingCollapse3".$value["exp_id"][0];?>" class="collapse" id="<?php echo "collapse3".$value["exp_id"][0];?>" role="tabpanel">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="form-group row">
                                <div class="jsgrid" id="validation" style="position: relative; height: auto; width: 100%;">
                                  <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                    <table class="jsgrid-table">
                                      <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Sr No.</th>
                                        <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Task</th>
                                        <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Assessment Questions</th>
                                      <th class="addRowTA jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" data-exp-id="<?php echo $value["exp_id"][0];?>"><input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button" title="Add" type="button"></th>
                                      </tr>
                                    </table>
                                  </div>
                                  <div class="jsgrid-grid-body">
                                    <table class="jsgrid-table tbodyTA">
                                      <tbody id="<?php echo "tbodyTA".$value["exp_id"][0];?>"></tbody>
                                    </table>
                                  </div>
                                </div><!-- tables ending -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="card-header border-warning" id="<?php echo "headingCollapse4".$value["exp_id"][0];?>">
                          <a aria-controls="<?php echo "collapse4".$value["exp_id"][0];?>" aria-expanded="false" class="card-title lead collapsed" data-toggle="collapse" href="<?php echo "#collapse4".$value["exp_id"][0];?>">
                          <h4><b><u>4. Suimulator Actions</u></b></h4></a>
                        </div>
                        <div aria-expanded="true" aria-labelledby="<?php echo "headingCollapse4".$value["exp_id"][0];?>" class="collapse" id="<?php echo "collapse4".$value["exp_id"][0];?>" role="tabpanel">
                          <div class="card-content">
                            <div class="card-body">
                              <div class="jsgrid" id="validation" style="position: relative; height: auto; width: 100%;">
                                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                                  <table class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                      <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">Sr No.</th>
                                      <th class="jsgrid-header-cell jsgrid-header-sortable" style="width: 150px;">What will Simulator do</th>
                                      <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">What will Student do</th>
                                      <th class="jsgrid-header-cell jsgrid-align-center jsgrid-header-sortable" style="width: 100px;">Purpose</th>
                                     <th class="addRowSA jsgrid-header-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" data-exp-id="<?php echo $value["exp_id"][0];?>"><input class="jsgrid-button jsgrid-mode-button jsgrid-insert-mode-button"  title="Add" type="button"></th>
                                    </tr>
                                  </table>
                                </div>
                                <div class="jsgrid-grid-body">
                                  <table class="jsgrid-table tbodySA">
                                    <tbody id="<?php echo "tbodySA".$value["exp_id"][0];?>"></tbody>
                                  </table>
                                </div>
                              </div><!-- tables ending -->
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                        <br>
                        <button class="btn btn-warning mr-1" type="button"><i class="ft-x"></i> Cancel</button> <!-- <button class="btn btn-primary" id="saveBtn" name="save" type="submit"><i class="la la-check-square-o"></i> Save</button>  -->
                        <button type="button" class="btn btn-primary save-r1" data-id='<?php echo $value['exp_id'][0];?>'>
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </div>
                  </div>

                  <?php
                  $i++;
                }
              }
           ?>
                </div>
              </div>
              <button type="button" id="submit-r1" class="btn btn-success" style="margin: 20px;">
            <i class="la la-check-square-o"></i> Submit all experiments
          </button>
            </div>
          </div>
        </div>
      </div><!-- Basic form layout section start -->
    </div>
  </div>
<script>
$(document).ready(function() {
    $("#submit-r1").click(function (e) {
         console.log("submit r1")
         var php_data = {};
         php_data.exp_ids = {};
         $('.experiment_link').each(function(index) {
            php_data.exp_ids[$(this).attr("id")] = $(this).val().trim();
        });

         send_ajax_request(php_data, this, 'r1submit.php');
     });

    $(".save-r1").click(function (e) {
        console.log("called.")
        var php_data = {};
        var id = $(this).attr("data-id");
        /*
            exp_id: "",
            learning_objectives: [
                {
                    "name": "",
                    "level": "",
                    "verb": "",
                }
            ]
            increase serial no of lab id here.

            instruction: {
                "method": "",
                "assessment": "",
            }

            task_assessment: [
                {
                    "task": "",
                    "question": "",
                }
            ]

            simulator_interactions: [
                {
                    "what_sm": "",
                    "what_student": "",
                    "purpose": "",
                }
            ]

        */


        var learning_objectives = [];
        $("#tbody" + id).children('tr').each(function () {
            var lo = {};
            var lo_temp_id = $(this).attr("id");
            lo.name = $("#learningObjective" + lo_temp_id).val().trim();
            lo.level = $("#cognitive_level" + lo_temp_id).val();
            lo.verb = $("#actionverbs" + lo_temp_id).val();
            learning_objectives.push(lo);
        });
        console.log(learning_objectives)

        var in_method = $("#tab-exp" + id).find(".ins_method").val().trim();
        var in_assessment = $("#tab-exp" + id).find(".ins_description").val().trim();
        var in_strategy = $("#tab-exp" + id).find(".ins_strategy").val().trim();

        var task_assessment = [];
        $("#tbodyTA" + id).children('tr').each(function () {
            var lo = {};
            var lo_temp_id = $(this).attr("id");
            lo.task = $("#task" + lo_temp_id).val().trim();
            lo.question = $("#assessmentQues" + lo_temp_id).val().trim();
            task_assessment.push(lo);
        });
        console.log(task_assessment)

        var simulator_interactions = [];
        $("#tbodySA" + id).children('tr').each(function () {
            var lo = {};
            var lo_temp_id = $(this).attr("id");
            lo.what_sm = $("#simulatordo" + lo_temp_id).val().trim();
            lo.what_student = $("#studentdo" + lo_temp_id).val().trim();
            lo.purpose = $("#purpose" + lo_temp_id).val().trim();
            simulator_interactions.push(lo);
        });
        console.log(simulator_interactions)


        var php_data = {};
        php_data.exp_id = id;
        php_data.learning_objectives = learning_objectives;
        php_data.instruction = {
          method: in_method,
          assessment: in_assessment,
          strategy: in_strategy,
        }
        php_data.task_assessment = task_assessment;
        php_data.simulator_interactions = simulator_interactions;

        send_ajax_request(php_data, this, 'r1save.php');
    });

    function send_ajax_request (php_data, save_btn, file_name) {
        if (file_name === undefined) {
            file_name = 'r1save.php';
        }
        console.log("sending request to ", file_name, php_data);

        $.post(file_name, php_data, function (data, status) {
            console.log(data, status);
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





    var rowIdSA = 0;
    $(".addRowSA").on("click", function() {
      // console.log("add rowSA ", this, "this", $(this))
        rowSA(this);
    });
    
    $(document).on('click', ".deleteButtonClassSA", function() {
        deleteSA(this);
    });

    function deleteSA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
            $(obj).parent().parent('tr').remove();
            rowID--;
        
    }

    function rowSA(add_btn) {
        rowIdSA++;
        var row = '<tr class="jsgrid-filter-row" id="' + rowIdSA + '"><td class="jsgrid-cell" style="width: 150px"; id="simulatordocolumn' + rowIdSA + '" >' + rowIdSA + '</td><td class="jsgrid-cell" style="width: 150px"; id="simulatordocolumn' + rowIdSA + '" ><input type="text" id="simulatordo' + rowIdSA + '"></td><td class="jsgrid-cell" style="width: 150px"; id="studentdocolumn' + rowIdSA + '" ><input type="text" id="studentdo' + rowIdSA + '"></td><td class="jsgrid-cell" style="width: 150px"; id="purposecolumn' + rowIdSA + '" ><input type="text" id="purpose' + rowIdSA + '"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" id="inputeditSA' + rowIdSA + '"><input class="jsgrid-button jsgrid-delete-button deleteButtonClassSA" type="button" title="Delete" id="deleteButtonSA' + rowIdSA + '"></td></tr>';
        var exp_id = $(add_btn).attr("data-exp-id");
        // console.log("append to ", '#tbodySA' + exp_id)
        $('#tbodySA' + exp_id).append(row);
    }

    var rowID = 0;
    $(".addRow").on("click", function() {
      // console.log("add row", this, "this", $(this))
        rowLO(this);
    });

    $(document).on('click', ".deleteButtonClass", function() {
        deleteLO(this);
    });

    function deleteLO(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
          $(obj).parent().parent('tr').remove();
            rowID--;
            for (var i = id + 1; i <= rowID + 1; ++i) {
                $("#srno" + i).text(i - 1);
            }
        
    }

    function rowLO(add_btn) {
        rowID++;
        var row = '<tr class="jsgrid-filter-row" id="' + rowID + '"><td class="jsgrid-cell" style="width: 150px" id="srno' + rowID + '" >' + rowID + '</td><td class="jsgrid-cell" style="width: 150px"; id="lOcolumn' + rowID + '" ><input type="text" id="learningObjective' + rowID + '"></td><td  id="cocolumn' + rowID + '" class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select id="cognitive_level' + rowID + '"><option value=""></option><option value="Create">Create</option><option value="Evaluate">Evaluate</option><option value="Analyse">Analyse</option><option value="Apply">Apply</option><option value="Understanding">Understanding</option><option value="Recall">Recall</option></select></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;" id="accolumn' + rowID + '"><select id="actionverbs' + rowID + '"><option value=""></option><option value="Design">Design</option><option value="Combine">Combine</option><option value="Devise">Devise</option><option value="Modify">Modify</option><option value="Plan">Plan</option><option value="Assess">Assess</option><option value="Infer">Infer</option><option value="State">State</option></select></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" id="inputedit' + rowID + '"><input class="jsgrid-button jsgrid-delete-button deleteButtonClass" type="button" title="Delete" id="deleteButton' + rowID + '"></td></tr>';
        var exp_id = $(add_btn).attr("data-exp-id");
        // console.log("append to ", '#tbody' + exp_id)
        $('#tbody' + exp_id).append(row);
    }
    var rowIdTA = 0;
    $(".addRowTA").click(function() {
      // console.log("add row TA ", this, "this", $(this))
        rowTA(this);
    });

    $(document).on('click', ".deleteButtonClassTA", function() {
        deleteTA(this);
    });

    function deleteTA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        
        $(obj).parent().parent('tr').remove();
        rowID--;
    }

    function rowTA(add_btn) {
        rowIdTA++;
        var row = '<tr class="jsgrid-filter-row" id="' + rowIdTA + '"><td class="jsgrid-cell" style="width: 150px"; id="taskcolumn' + rowIdTA + '" >' + rowIdTA + '</td><td class="jsgrid-cell" style="width: 150px"; id="taskcolumn' + rowIdTA + '" ><input type="text" id="task' + rowIdTA + '"></td><td class="jsgrid-cell" style="width: 150px"; id="AssessmentColumn' + rowIdTA + '" ><input type="text" id="assessmentQues' + rowIdTA + '"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" id="inputeditTA' + rowIdTA + '"><input class="jsgrid-button jsgrid-delete-button deleteButtonClassTA" type="button" title="Delete" id="deleteButtonTA' + rowIdTA + '"></td></tr>';
        var exp_id = $(add_btn).attr("data-exp-id");
        // console.log("append to ", '#tbodyTA' + exp_id)
        $('#tbodyTA' + exp_id).append(row);
    }
});
</script>

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
