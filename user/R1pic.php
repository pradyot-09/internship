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
     <link rel="stylesheet" type="text/css" href="../app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/plugins/file-uploaders/dropzone.css">


 
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



                <div class="row">

                    <span id="error-msg" style="color:red;font-weight:bold;"></span>
                    <div class="col-xl-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card collapse-icon accordion-icon-rotate">
                            
                                                    <div class="card-content collapse show">
                                                      <div class="card-body">
                                                     <!-- (form for drag start) -->
                                                        <form action="#" class="dropzone dropzone-area dz-clickable" id="dpz-btn-select-files" style="height:100px">
                                                          <div class="dz-message">Drop Files Here To Upload</div>
                                                        </form>
                                                     <!-- (form for drag end) -->
                                                     <!-- button Click me to select files -->
                                                        <button id="select-files" style="margin-left:40%;margin-top:10px" class="btn btn-primary mb-1 dz-clickable"><i class="ft-file"></i> Click me to select files</button>
                                                        

                                                      </div>
                                                    </div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!-- ROW OF LAB PROPOSAL END  -->


              </div>

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
        console.log(id, this);

        $('.experiment_link').each(function(index) {
            if ($(this).attr("id") === id) {
              link = $(this).val().trim();
            }
        });

        console.log("saving exp of id in r1 form ", id, link);
        var php_data = {};
        php_data.exp_id = id;
        php_data.link_to_source_code = link;

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
    $("#addRowSA").on("click", function() {
        rowSA();
    });
    $(document).on('click', ".save-buttonSA", function() {
        saveSA(this);
    });
    $(document).on('click', ".deleteButtonClassSA", function() {
        deleteSA(this);
    });
    $(document).on('click', ".editButtonClassSA", function() {
        editSA(this);
    });

    function saveSA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        var simulatordo = $("#simulatordo" + id).val();
        var studentdo = $("#studentdo" + id).val();
        var purpose = $("#purpose" + id).val();
        var characterLength = 40;
        if (simulatordo != "" && studentdo != "" && purpose != "") {
            // if(learningObjective.length > characterLength)
            // {
            //  var tempLO=learningObjective.substring(0,characterLength)+'...';
            // }else{
            // var tempLO=learningObjective;
            // }
            $('#simulatordocolumn' + id).html(simulatordo);
            $('#studentdocolumn' + id).html(studentdo);
            $('#purposecolumn' + id).html(purpose);
            var editDeleteButton = '<input class="jsgrid-button jsgrid-edit-button editButtonClassSA" id="editButtonSA' + id + '" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button deleteButtonClassSA" type="button" title="Delete" id="deleteButtonSA' + id + '">';
            $('#inputeditSA' + id).html(editDeleteButton);
        }
    }

    function deleteSA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        if ($("#checkboxSA" + id).prop("checked") == true) {
            $('#' + id).remove();
            rowID--;
        }
    }

    function editSA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        var saveButton = '<input class="jsgrid-button jsgrid-clear-filter-button save-buttonSA" id="saveSA' + id + '" type="button" title="Clear filter">';
        var temp = $("#inputeditSA" + id).children('input').length;
        if (temp <= 2 && temp >= 0) {
            $("#inputeditSA" + id).append(saveButton);
            var t = $('#simulatordocolumn' + id).text();
            var aq = $('#studentdocolumn' + id).text();
            var aq = $('#purposecolumn' + id).text();
            var inputtask = '<input type="text" id="simulatordo' + id + '" value="' + t + '">';
            var inputAq = '<input type="text" id="studentdo' + id + '" value="' + aq + '">';
            var inputpu = '<input type="text" id="purpose' + id + '" value="' + aq + '">';
            var t = $('#simulatordocolumn' + id).html(inputtask);
            var aq = $('#studentdocolumn' + id).html(inputAq);
            var aq = $('#purposecolumn' + id).html(inputpu);
        }
    }

    function rowSA() {
        rowIdSA++;
        var row = '<tr class="jsgrid-filter-row" id="' + rowIdSA + '"><td class="jsgrid-cell" style="width: 150px"; id="simulatordocolumn' + rowIdSA + '" >' + rowIdSA + '</td><td class="jsgrid-cell" style="width: 150px"; id="simulatordocolumn' + rowIdSA + '" ><input type="text" id="simulatordo' + rowIdSA + '"></td><td class="jsgrid-cell" style="width: 150px"; id="studentdocolumn' + rowIdSA + '" ><input type="text" id="studentdo' + rowIdSA + '"></td><td class="jsgrid-cell" style="width: 150px"; id="purposecolumn' + rowIdSA + '" ><input type="text" id="purpose' + rowIdSA + '"></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;""><input type="checkbox" readonly="" id="checkboxSA' + rowIdSA + '"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" id="inputeditSA' + rowIdSA + '"><input class="jsgrid-button jsgrid-clear-filter-button save-buttonSA" id="saveSA' + rowIdSA + '" type="button" title="Save"><input class="jsgrid-button jsgrid-delete-button deleteButtonClassSA" type="button" title="Delete" id="deleteButtonSA' + rowIdSA + '"></td></tr>';
        $('#tbodySA').append(row);
    }

    var rowID = 0;
    $("#addRow").on("click", function() {
        rowLO(this);
    });
    $(document).on('click', ".save-button", function() {
        saveLO(this);
    });
    $(document).on('click', ".deleteButtonClass", function() {
        deleteLO(this);
    });
    $(document).on('click', ".editButtonClass", function() {
        editLO(this);
    });

    function saveLO(obj) {
        var CLArray = ["Create", "Evaluate", "Analyse", "Apply", "Understanding", "Recall"];
        var actionVerbs = ["Design", "Combine", "Devise", "Modify", "Plan", "Assess", "Infer", "State"];
        var id = $(obj).parent().parent('tr').attr('id');
        var learningObjective = $("#learningObjective" + id).val();
        var cognitive_level = $("#cognitive_level" + id).val();
        var actionverbs = $("#actionverbs" + id).val();
        var characterLength = 40;
        if (learningObjective != "" && cognitive_level != 0 && actionverbs != 0) {
            // if(learningObjective.length > characterLength)
            // {
            //  var tempLO=learningObjective.substring(0,characterLength)+'...';
            // }else{
            // var tempLO=learningObjective;
            // }
            $('#accolumn' + id).html(actionVerbs[actionverbs]);
            $('#cocolumn' + id).html(CLArray[cognitive_level]);
            $('#lOcolumn' + id).html(learningObjective);
            var editDeleteButton = '<input class="jsgrid-button jsgrid-edit-button editButtonClass" id="editButtonn' + id + '" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button deleteButtonClass" type="button" title="Delete" id="deleteButton' + id + '">';
            $('#inputedit' + id).html(editDeleteButton);
        }
    }

    function deleteLO(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        if ($("#checkbox" + id).prop("checked") == true) {
            $('#' + id).remove();
            rowID--;
            for (var i = id + 1; i <= rowID + 1; ++i) {
                $("#srno" + i).text(i - 1);
            }
        }
    }

    function editLO(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        var saveButton = '<input class="jsgrid-button jsgrid-clear-filter-button save-button" id="save' + id + '" type="button" title="Clear filter">';
        var temp = $("#inputedit" + id).children('input').length;
        if (temp <= 2 && temp >= 0) {
            if ($("#inputedit" + id).children("save" + id).length == 0) {
                $("#inputedit" + id).append(saveButton);
                var lo = $('#lOcolumn' + id).text();
                var input = '<input type="text" id="learningObjective' + id + '" value="' + lo + '">';
                var selectac = '<select id="actionverbs' + id + '"><option value="0"></option><option value="1">United States</option><option value="2">Canada</option><option value="3">United Kingdom</option><option value="4">France</option><option value="5">Brazil</option><option value="6">China</option><option value="7">Russia</option></select>';
                var selectcl = '<select id="cognitive_level' + id + '"><option value="0"></option><option value="1">United States</option><option value="2">Canada</option><option value="3">United Kingdom</option><option value="4">France</option><option value="5">Brazil</option><option value="6">China</option><option value="7">Russia</option></select></td>';
                $('#accolumn' + id).html(selectac);
                $('#cocolumn' + id).html(selectcl);
                $('#lOcolumn' + id).html(input);
            }
        }
    }

    function rowLO() {
        rowID++;
        var row = '<tr class="jsgrid-filter-row" id="' + rowID + '"><td class="jsgrid-cell" style="width: 150px" id="srno' + rowID + '" >' + rowID + '</td><td class="jsgrid-cell" style="width: 150px"; id="lOcolumn' + rowID + '" ><input type="text" id="learningObjective' + rowID + '"></td><td  id="cocolumn' + rowID + '" class="jsgrid-cell jsgrid-align-center" style="width: 100px;"><select id="cognitive_level' + rowID + '"><option value="0"></option><option value="1">Create</option><option value="2">Evaluate</option><option value="3">Analyse</option><option value="4">Apply</option><option value="5">Understanding</option><option value="6">Recall</option></select></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;" id="accolumn' + rowID + '"><select id="actionverbs' + rowID + '"><option value="0"></option><option value="1">Design</option><option value="2">Combine</option><option value="3">Devise</option><option value="4">Modify</option><option value="5">Plan</option><option value="6">Assess</option><option value="7">Infer</option><option value="8">State</option></select></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;""><input type="checkbox" readonly="" id="checkbox' + rowID + '"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" id="inputedit' + rowID + '"><input class="jsgrid-button jsgrid-clear-filter-button save-button" id="save' + rowID + '" type="button" title="Clear filter"><input class="jsgrid-button jsgrid-delete-button deleteButtonClass" type="button" title="Delete" id="deleteButton' + rowID + '"></td></tr>';
        $('#tbody').append(row);
    }
    var rowIdTA = 0;
    $("#addRowTA").on("click", function() {
        rowTA();
    });
    $(document).on('click', ".save-buttonTA", function() {
        saveTA(this);
    });
    $(document).on('click', ".deleteButtonClassTA", function() {
        deleteTA(this);
    });
    $(document).on('click', ".editButtonClassTA", function() {
        editTA(this);
    });

    function saveTA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        var task = $("#task" + id).val();
        var assessmentQues = $("#assessmentQues" + id).val();
        var characterLength = 40;
        if (task != "" && assessmentQues != "") {
            // if(learningObjective.length > characterLength)
            // {
            //  var tempLO=learningObjective.substring(0,characterLength)+'...';
            // }else{
            // var tempLO=learningObjective;
            // }
            $('#AssessmentColumn' + id).html(assessmentQues);
            $('#taskcolumn' + id).html(task);
            var editDeleteButton = '<input class="jsgrid-button jsgrid-edit-button editButtonClassTA" id="editButtonTA' + id + '" type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button deleteButtonClassTA" type="button" title="Delete" id="deleteButtonTA' + id + '">';
            $('#inputeditTA' + id).html(editDeleteButton);
        }
    }

    function deleteTA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        if ($("#checkboxTA" + id).prop("checked") == true) {
            $('#' + id).remove();
            rowID--;
        }
    }

    function editTA(obj) {
        var id = $(obj).parent().parent('tr').attr('id');
        var saveButton = '<input class="jsgrid-button jsgrid-clear-filter-button save-buttonTA" id="saveTA' + id + '" type="button" title="Clear filter">';
        var temp = $("#inputeditTA" + id).children('input').length;
        if (temp <= 2 && temp >= 0) {
            $("#inputeditTA" + id).append(saveButton);
            var t = $('#taskcolumn' + id).text();
            var aq = $('#AssessmentColumn' + id).text();
            var inputtask = '<input type="text" id="task' + id + '" value="' + t + '">';
            var inputAq = '<input type="text" id="assessmentQues' + id + '" value="' + aq + '">';
            var t = $('#taskcolumn' + id).html(inputtask);
            var aq = $('#AssessmentColumn' + id).html(inputAq);
        }
    }

    function rowTA() {
        rowIdTA++;
        var row = '<tr class="jsgrid-filter-row" id="' + rowIdTA + '"><td class="jsgrid-cell" style="width: 150px"; id="taskcolumn' + rowIdTA + '" >' + rowIdTA + '</td><td class="jsgrid-cell" style="width: 150px"; id="taskcolumn' + rowIdTA + '" ><input type="text" id="task' + rowIdTA + '"></td><td class="jsgrid-cell" style="width: 150px"; id="AssessmentColumn' + rowIdTA + '" ><input type="text" id="assessmentQues' + rowIdTA + '"></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;""><input type="checkbox" readonly="" id="checkboxTA' + rowIdTA + '"></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;" id="inputeditTA' + rowIdTA + '"><input class="jsgrid-button jsgrid-clear-filter-button save-buttonTA" id="saveTA' + rowIdTA + '" type="button" title="Save"><input class="jsgrid-button jsgrid-delete-button deleteButtonClassTA" type="button" title="Delete" id="deleteButtonTA' + rowIdTA + '"></td></tr>';
        $('#tbodyTA').append(row);
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
