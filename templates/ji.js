
// deleteRow function that deletes the row  

    function saveNewRowTA()
    {
    var learningObjective=$("#learningObjective"+row_Count);
    var cognitive_level=$("#cognitive_level"+row_Count) ;
    var actionverbs=$("#actionverbs"+row_Count) ;
    var CLArray=["Create","Evaluate","Analyse","Apply","Understanding","Recall"];
    var actionVerbs=["Design","Combine","Devise","Modify","Plan","Assess","Infer","State"];
     $('#lOin'+row_Count).html(learningObjective.val()); 
    cognitive_level.hide();
    actionverbs.hide();
    $('#COin'+row_Count).html(CLArray[cognitive_level.val()-1]); 
    $('#AVin'+row_Count).html(actionVerbs[actionverbs.val()]);  
  // Create----->Design,Combine,Devise,Modify,Plan
  // Evaluate--->Assess,Conclude,Contrast,Evaluate
  // Analyse---->Analyze,Infer,Examine,Dissect,Ascertain 
  // Apply------>Apply,Calculate,Solve,Predict
  // Understanding> Describe,Explain,Give Example of Select
  // Recall--->List,Identify,Define,State
    // alert(learningObjective+"  "+cognitive_level+"  "+actionverbs);
    // learningObjective.hide();
    // cognitive_level.hide();
    // actionverbs.hide();
  // 
  // 
  }
  function editFormTA()
  {       
          var id;
          var classList =  $(this).attr("class").split(' ');
          alert(classList);
          for (var i = 0; i < classList.length; i++) {
          var bar = /edit/;
          if (bar.test(classList[i])) {
          var index = classList[i].indexOf("t");  // Gets the first index where a space occours
          id = classList[i].substr(index+1,classList[i].length); // Gets the first part
          alert(id);
    }
      }
  }
  function insertRowTA()
  {
          row_Count++;
          var deleteClass='deleteTA'+row_Count; 
          var row_String='<tr role="row" id="'+row_Count+'" class="odd"><td class="sorting_1">'+row_Count+'</td><td class="jsgrid-cell" style="width: 150px;" id="lOin'+row_Count+'"><input type="text" id="learningObjective'+row_Count+'"  placeholder="Enter your Learning Objective"></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;" id="COin'+row_Count+'"><select id="cognitive_level'+row_Count+'"><option value="-1">Cognitive Level</option><option value="1">Create</option><option value="2">Evaluate</option><option value="3">Analyse</option><option value="4">Apply</option><option value="5">Understanding</option><option value="6">Recall</option></select></td><td class="jsgrid-cell jsgrid-align-center" style="width: 100px;" id="AVin'+row_Count+'"><select id="actionverbs'+row_Count+'"><option value="-1">Action Verbs</option><option value="0">Design</option><option value="1">Combine</option><option value="2">Devise</option><option value="3">Modify</option><option value="4">Plan</option><option value="5">Assess</option><option value="6">Infer</option><option value="7">State</option></select></td><td class="sorting_1"><input class="jsgrid-button addDelete saveRowClass  saveRowClassTA" id="saveRow'+row_Count+'"  type="button" title="Delete"></td></td><td class="jsgrid-cell jsgrid-control-field jsgrid-align-center" style="width: 50px;"><input id="deleteTANDA" class="jsgrid-button_TA deleteRowTA jsgrid-edit-button_TA rowCommonDeleteClassTA '+deleteClass+'"  type="button" title="Edit"><input class="jsgrid-button jsgrid-delete-button editinput editinputTA  edit'+row_Count+'" id="edit'+row_Count+'"  type="button" title="Edit"></td></tr>';
         if(row_Count==1)
        {  
       $("#container_of_column_task_TA").html(row_String);  
        }
        else{
      $("#container_of_column_task_TA").append(row_String);
        }
  }


  function deleteRowTA(){
          alert("vishalnechwani");
          var id;
          var classList =  $(".rowCommonDeleteClassTA").attr("class").split(' '); 
          for (var i = 0; i < classList.length; i++) {
          var bar = /delete/;
          if (bar.test(classList[i])) {
          var index = classList[i].indexOf("A");  // Gets the first index where a space occours
          id = classList[i].substr(index+1,classList[i].length); // Gets the first part
          alert(id);
          $('#'+id).remove(); 
          row_Count--;
          if(row_Count==0)
          {
        $("#container_of_column_task_TA").html(noDataToadd);  
          }
          return false;
      }
      }
  }
  