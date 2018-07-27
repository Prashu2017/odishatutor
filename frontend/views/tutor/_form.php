<?php

use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use kartik\widgets\TimePicker;
use kartik\widgets\FileInput;
use dosamigos\multiselect\MultiSelect;
use kartik\widgets\SwitchInput;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model frontend\models\Tutor */
/* @var $form yii\bootstrap\ActiveForm */
$days = ['Sunday'=> 'Sunday', 'Monday' => 'Monday','Tuesday'=>'Tuesday', 'Wednesday' => 'Wednesday', 'Thursday'=>'Thursday', 'Friday'=> 'Friday','Saturday' => 'Saturday'];
?>

<script type="text/javascript">
      $('.day-right1 input[type="text"]').datetimepicker({
   datepicker:false,
   format:'H:i',
   step:5
  });
  var n=1;
  function addRow2(btn,c) {
   //var n=document.getElementsByClassName('day-row').length+1;
   var txtbox = '<div id="tre'+n+'"><div class="day-row"><select class="selectadd" name="day['+n+']"><option value="Monday">Monday</option> <option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option><option value="Sunday">Sunday</option></select><div class="day-right1"><input type="text" name="starttime['+n+']" class="day" id="datetimepicker3"><span> -</span><input type="text" class="day" name="endtime['+n+']"></div><span class="cross" onclick=del1("'+n+'");>X</span></div></div>';
   $('#'+c).append(txtbox);
   $('.day-right1 input[type="text"]').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
  });
  n++;
  }
  var m=1;
  function addRow3(btn,c) {
   //var n=document.getElementsByClassName('day-row').length+1;
   var divid=$("#"+c+" div:last-child").attr('id');
   var cid=$("#"+c).attr("data-id");
   if(typeof divid !== "undefined"){
   m=divid.replace('bex','');
   m++;
        }
      var txtbox = '<div id="bex'+m+'"><input type="hidden" name="course_id['+m+'][]" value="'+cid+'"><div class="day-row"><select class="selectadd" name="day['+m+'][]"><option value="Monday">Monday</option> <option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option><option value="Sunday">Sunday</option></select><div class="day-right1"><input type="text" name="starttime['+m+'][]" class="day" id="datetimepicker3"><span> -</span><input type="text" class="day" name="endtime['+m+'][]"></div><span class="cross" onclick=del11("'+m+'");>X</span></div></div>';
                 $('#'+c).append(txtbox);
                 $('.day-right1 input[type="text"]').datetimepicker({
                    datepicker:false,
                    format:'H:i',
                    step:5
                });
                m++;
                }
          var me=[];
    var ne=[];
    $('#course_detail_edit #tbl-edit tr td:nth-child(3) select').each(function() {
                  var ns=$(this).attr('data-id');
        me[ns]=$('#ddLevel'+ns).magicSuggest({
            placeholder: 'Select...',
             selectionPosition: 'bottom',
        });
        ne[ns]=$('#ddSubject'+ns).magicSuggest({
            placeholder: 'Select...',
             selectionPosition: 'bottom',
        });
    });
  function del1(val)
    {
        $("#tre"+val).remove();
    }
    function del11(val)
    {
        $("#bex"+val).remove();
    }
  $(document).ready(function(){

  $("#course_detail_add").hide();
  $("#course_detail_edit").hide();
  $(".btn_addr_save").show();
    $('.btn_offer_save').show();
    $(".btn_addr_cancel").show();
    $(".save-addr-view").hide();
    $(".btn-edit-addr").show();
    $(".save-offer-view").hide();
    $(".btn-edit-offer").show();


  $(".save_course_btn").hide();
  $(".cnl_save_course_btn").hide();
  $(".upd_course_btn").hide();
  $(".cnl_upd_course_btn").hide();


    /* for show hide address buttons */
   $(".sh-add-frm").on("click",".btn-edit-addr" , function(){

        $(".edit-addr-view").hide();
        $(".btn-edit-addr").hide();
        $(".save-addr-view").show();
        $(".btn_addr_save").show();
    });
    /* for show hide offer*/
    $(".offer-toggle-forms").on("click",".btn-edit-offer", function(){
      $(".edit-offer-view").hide();
      $(".btn-edit-offer").hide();
      $(".save-offer-view").show();
      $(".btn_offer_save").show();
  });

  /*to update address*/
  $(".sh-add-frm").on("click",".btn_addr_save", function(){
    $(this).addClass('save_btn_ldr');
    var centre_addr_id = $(this).attr('id');
    if(!centre_addr_id){
      alert('Centre does not exists ');
       $(".btn_addr_save").removeClass('save_btn_ldr');
    }else{
      var form_data = $("form#group-tution-address").serialize();
          $.ajax({
             url: "ajax_group_tution.php",
             method: "POST",
             data: form_data ,
             success: function(data) {
               $(".btn_addr_save").removeClass('save_btn_ldr');
              $( ".save-addr-view" ).replaceWith(data);
              $(".save-addr-view").hide();
               $(".btn-edit-addr").show();
               //alert("Address updated successfully");
             },
           });
         }
  });

  $(".offer-toggle-forms").on("click",".btn_offer_save", function(){
    $(this).addClass('save_btn_ldr');
      var centreId = $(this).attr('centreId');
      var tutor_id = $(this).attr('id');
      var offers = $('#offers'+tutor_id).val();
      if(!centreId){
        alert('Centre does not exists ');
        $(".btn_offer_save").removeClass('save_btn_ldr');
      }else{
        $.ajax({
       url: "ajax_group_tution.php",
       method: "POST",
       data: { centreId : centreId,tutor_id : tutor_id , offers : offers, btn_upd_offers : "btn_upd_offers" },
       success: function(data) {
         $(".btn_offer_save").removeClass('save_btn_ldr');
         $( ".save-offer-view" ).replaceWith(data);
           $(".save-offer-view").hide();
         $(".btn-edit-offer").show();
         //alert("Offers updated successfully");
       },
     });
   }
    });


    /*to show hide new course button*/
    $(".btn_courses_add").on("click" , function(){
      $("#course_detail_view").hide();
      $("#course_detail_edit").hide();
      $("#course_detail_add").show();
      $(".btn_courses_add").hide();
      $(".btn_courses_edit").hide();
      $(".save_course_btn").show();
      $(".cnl_save_course_btn").show();
    });
    $(".cnl_save_course_btn").on("click" , function(){
      $(".save_course_btn").hide();
      $(".cnl_save_course_btn").hide();
      $(".btn_courses_add").show();
      $(".btn_courses_edit").show();
      $("#course_detail_add").hide();
      $("#course_detail_view").show();
    });

    //datepicker for course timings
  /*
    $('#datetimepicker1, #datetimepicker2, #datetimepicker3 , #datetimepicker4, #datetimepicker5, #datetimepicker6, #datetimepicker7, #datetimepicker8, #datetimepicker9, #datetimepicker10, #datetimepicker11, #datetimepicker12, #datetimepicker13, #datetimepicker14').datetimepicker({
        datepicker:false,
        format:'H:i',
        step:5
    });
  */
  $("#CourseFinderTutor").on('click','#one, #two',function(e){
    $(".select-day").hide();
       $( this ).next(".select-day").show();
       e.stopPropagation();
  });


    $("#CourseFinderTutor").on("click",".select-day, .day",function(e){
        e.stopPropagation();
    });

    $(document).click(function(){
        $(".select-day").hide();
    });


    var ms = $('#magicsuggest').magicSuggest({
      placeholder: 'Select...',
   selectionPosition: 'bottom',
    });

    var ms2 = $('#magicsuggest_subjects').magicSuggest({
      placeholder: 'Select...',
   selectionPosition: 'bottom',
    });

    ms.setData(["Level"]);
    ms2.setData(["Subject"]);

    $(".type_select").on('change', function() {
      var id=$(this).parent().parent().parent().attr('id');
      var dataid=$(this).attr('data-id');
      var type_id = this.value;
      $.ajax({           // ajax call to fetch levels
           url: "ajax_group_tution.php",
           method: "POST",
           data: { type_id : type_id, select_level_from_type : "select_level_from_type" },
         success: function(data) {
           var output_data = $.parseJSON(data);
           if(id=='tbl-edit'){
             me[dataid].clear();
                me[dataid].setData(output_data);
           }else{
             ms.clear();
             ms.setData(output_data);
           }
         }
       });

       $.ajax({        // ajax call to fetch subjects
            url: "ajax_group_tution.php",
            method: "POST",
            data: { type_id : type_id, select_subject_from_type : "select_subject_from_type" },
          success: function(data_subj) {
              var output_data_subj = $.parseJSON(data_subj);
              if(id=='tbl-edit'){
                ne[dataid].clear();
                    ne[dataid].setData(output_data_subj);
              }else{
                ms2.clear();
                ms2.setData(output_data_subj);
              }


          }
        });
  });

  // to update course data
  $(".upd_course_btn").on("click" , function(e){
    var centre_addr_id = $(this).attr('id');
    if(!centre_addr_id){
      alert('Centre does not exists ');
    }else{
    var form_data = $("form#course_edit_form").serialize();
        $.ajax({
           url: "ajax_group_tution.php",
           method: "POST",
           data: form_data ,
           success: function(data) {
             $("#course_detail_view").html(data);
             $("#course_detail_view").toggle();
             $("#course_detail_edit").toggle();
             $(".upd_course_btn").hide();
             $(".cnl_upd_course_btn").hide();
             $(".btn_courses_add").show();
             $(".btn_courses_edit").show();
             var cid=$("#CourseFinderTutor").find("input[name='centre_id']").val();
             $.get("ajax_centre_file_edit.php?cid="+cid, function(data){
                     $("#course_detail_edit").html(data);
                 });
           },
         });
       }
  e.preventDefault();
  });


  $(".save_course_btn").on("click",function(e){
    var centre_addr_id = $(this).attr('id');
    if(!centre_addr_id){
      alert('Centre does not exists ');
    }else{
    var form_data = $("form#course_add_form").serialize();
        $.ajax({
           url: "ajax_group_tution.php",
           method: "POST",
           data: form_data ,
           success: function(data) {
             $("#course_detail_view").html(data);
             $("#course_detail_view").toggle();
             $("#course_detail_add").toggle();
             $(".save_course_btn").hide();
             $(".cnl_save_course_btn").hide();
             $(".btn_courses_add").show();
             $(".btn_courses_edit").show();
             var cid=$(".get_cid").find("input[name='centre_id']").val();
             $.get("ajax_centre_file_edit.php?cid="+cid, function(data){
                     $("#course_detail_edit").html(data);
                 });
           },
         });
       }
  e.preventDefault();
  });

  $('#magicsuggest').magicSuggest({
        allowFreeEntries: true,
        maxSelection: 3
  });

  /* to update lower details */

  $(".lower_group_form_upd").on("click",function(e){

      var centre_addr_id = $(this).attr('id');
      if(!centre_addr_id){
        alert('Centre does not exists ');
      }else{
    var form_data = $("form#lower_group_tution_form").serialize();
        $.ajax({
           url: "ajax_group_tution.php",
           method: "POST",
           data: form_data ,
           success: function(data) {
             alert(data);
           },
         });
       }
  e.preventDefault();
  });
  $(".btn_group_tution_msg").on("click",function(e){
    var centre_addr_id = $(this).attr('id');
    if(!centre_addr_id){
      alert('Centre does not exists ');
    }else{
    var form_data = $("form#group_tution_message_form").serialize();
        $.ajax({
           url: "ajax_group_tution.php",
           method: "POST",
           data: form_data ,
           success: function(data) {
             $('.btn_group_tution_msg').val("Edit");
             alert(data);
           },
         });
       }
  e.preventDefault();
  });

    /* to show hide edit course button */
    $(".btn_courses_edit").on("click" , function(){
      $("#course_detail_view").hide();
      $("#course_detail_add").hide();
      $("#course_detail_edit").show();
      $(".btn_courses_edit").hide();
      $(".btn_courses_add").hide();
      $(".upd_course_btn").show();
      $(".cnl_upd_course_btn").show();
    });

    $(".cnl_upd_course_btn").on("click" , function(){
      $(".upd_course_btn").hide();
      $(".cnl_upd_course_btn").hide();
      $(".btn_courses_add").show();
      $(".btn_courses_edit").show();
      $("#course_detail_edit").hide();
      $("#course_detail_view").show();
    });


    $("#imguploadeditpro").on("change",function(e){
      document.getElementById("imageUploadEditPro").submit();
    });
    $("#videofilechange").on("change",function(e){
      document.getElementById("videoUpload").submit();
    });

/*$(".btn_group_accnt_setup").on("click",function(){
  alert();
      $.ajax({
         url: "form_handler_centre.php",
         method: "POST",
         data: { btn_group_accnt_setup : 'btn_group_accnt_setup' },
         success: function(data) {
           window.location.reload();
         },
       });
});*/

/* to show more images*/
$(".btn-show-more-img").on("click",function(e){
    e.preventDefault();
  var start_limit = parseInt($(this).attr("num_loaded"));
  $.ajax({
     url: "form_handler_centre.php",
     method: "POST",
     data: { action_show_more_img:'action_show_more_img',start_limit:start_limit },
     success: function(data) {
        var data_array =  $.parseJSON(data);
       if(data_array.msg == 'last_record'){
         $( "div.append_more_img" ).append(data_array.data);
       $('.div-img-btn').hide();
       }else{
       $( "div.append_more_img" ).append(data_array.data);
       $('.btn-show-more-img').attr('num_loaded',start_limit+3);
     }
     },
   });
});

/* to show more videos*/
$(".btn-show-more-vid").on("click",function(e){
    e.preventDefault();
  var start_limit = parseInt($(this).attr("num_loaded"));
  $.ajax({
     url: "form_handler_centre.php",
     method: "POST",
     data: { action_show_more_vid:'action_show_more_vid',start_limit:start_limit },
     success: function(data) {
        var data_array =  $.parseJSON(data);
       if(data_array.msg == 'last_record'){
         $( "div.append_more_vid" ).append(data_array.data);
       $('.div-vid-btn').hide();
       }else{
       $( "div.append_more_vid" ).append(data_array.data);
       $('.btn-show-more-vid').attr('num_loaded',start_limit+3);
     }
     },
   });
});


  });
function delCourse(id){
  var self=id;
  var id=$(id).attr("data-id");
    $.ajax({
      url: "ajax_delete_course.php",
      method: "POST",
      data: { id:id},
      success: function(data) {
        if(data=="1"){
          $(self).parent().parent().remove();
          $("#tr_"+id).remove();
        }else {
          alert("Please try again!");
        }
      }
    });
}

</script>
<div class="tutor-form">
<?php  
// use common\models\Schedule;
// $schedule = new Schedule();
// echo "<pre>";
// print_r($schedule);
// print_r($model);
// echo "</pre>";
// exit;

?>
    <div class="clearfix" style="margin: 15px"></div>

    <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="panel-group">
        <div class="panel panel-primary">
          <div class="panel-heading">
              <h3 class="panel-title"> <i class="fa fa-user">&nbsp;</i>Personal Profile</h3>
          </div>
          <div class="panel-body">
              <div class="col-sm-12" > 
                  <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                  <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                  <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                  <?= $form->field($model, 'dob')->widget(DatePicker::classname(), [
                      'options' => [
                          'placeholder' => 'Date of birth',
                          'id' => 'dob',
                          'data-role'=>'date',
                      ],
                      'type' => DatePicker::TYPE_INPUT,
                      'pluginOptions' => [
                          'format' => 'yyyy-mm-dd',
                          'autoclose' => true,
                      ],
                  ]);
              ?>

                  <?= $form->field($model, 'age')->textInput(['maxlength' => true, 'id'=> 'age']) ?>

                  <?= $form->field($model, 'gender')->widget(SwitchInput::className(),
                 [ 
                  'name' => 'status_12',
                  'type' => SwitchInput::RADIO,
                  'items' => [
                              ['label' => 'Male', 'value' => 'Male'],
                              ['label' => 'Female', 'value' => 'Female'],
                              //['label' => 'High', 'value' => 3],
                          ],
                  'pluginOptions' => ['size' => 'mini'],
                  'labelOptions' => ['style' => 'font-size: 12px'],
                  ]);
      ?>

                  <?php echo $form->field($model, 'image')->widget(FileInput::classname(), [
                       'options' => ['accept' => 'image/*'],
                      ]);
                  
                       if($model->url){
                           echo '<div class="form-group"><label for="busimage-image" class="control-label col-sm-3">Tutor Image</label><div class="col-sm-6">' . Html::img($model->url) . '</div></div>';
                       }
                  ?>

              </div>
          </div>
      </div>
    
    <div class="clearfix" style="margin: 15px"></div>

    <div class="panel panel-primary">
          <div class="panel-heading">
              <h3 class="panel-title"> <i class="fa fa-address-book-o">&nbsp;</i>Professional Profile</h3>
          </div>
          <div class="panel-body">
            <div class='col-md-12 col-sm-12 col-xs-12 col-lg-12 '>
            <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'previous_work_place')->textInput(['maxlength' => true]) ?>
                    
            </div>

    <?= $form->field($model, 'experience')->textInput() ?>

    <?= $form->field($model, 'professional')->textInput(['maxlength' => true]) ?> 

    

    <?= $form->field($model, 'geographically_present')->checkboxList(['Online' => 'Online', 'Offline' => 'Offline', 'Both Online/Online' => 'Both Online/Online']); ?>

    <?= $form->field($model, 'available_for')->checkboxList(['At Students Home' => 'At Students Home', 'At Tutor\'s Home' => 'At Tutor\'s Home', 'At Institute' => 'At Institute', 'Online Tuition' => 'Online Tuition']); ?>



    
   
    <?= $form->field($model, 'pricing')->widget(CKEditor::className(), [
            'options' => ['rows' => 2],
            'preset' => 'basic'
        ]) ?>
    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'expertise_course')->widget(MultiSelect::className(),[
        'id'=>"multiXX",
        "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => $model->ExpertiseCourse, // data as array
        'class'=> 'form-control',
        'value' => [ 0, 2], // if preselected
        'name' => 'expertise_course', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 2
            ], 
    ]); 
    ?>
    


    <?= $form->field($model, 'subjects')->widget(MultiSelect::className(),[
        'id'=>"multiXXx",
        "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => $model->ExpertiseSubject, // data as array
        'value' => [ 0, 2], // if preselected
        'name' => 'subjects', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 2
            ], 
    ]); 
    ?>

  <?= $form->field($model, 'expertise_subject')->widget(MultiSelect::className(),[
        'id'=>"multixXX",
        // "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => $model->ExpertiseSubject, // data as array
        'value' => [ 0, 2], // if preselected
        'name' => 'expertise_subject', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 2
            ], 
    ]); 
    ?>

    <?= $form->field($model, 'digital_pen')->widget(SwitchInput::className(),
               [ 
                'name' => 'status_12',
                'type' => SwitchInput::RADIO,
                'items' => [
                            ['label' => 'Yes', 'value' => 1],
                            ['label' => 'No', 'value' => 0],
                            //['label' => 'High', 'value' => 3],
                        ],
                'pluginOptions' => ['size' => 'mini'],
                'labelOptions' => ['style' => 'font-size: 12px'],
                ]);
    ?>


    <?= $form->field($model, 'describe_you')->widget(CKEditor::className(), [
            'options' => ['rows' => 2],
            'preset' => 'basic'
        ]) ?>
    <?= $form->field($model, 'street_address')->textInput(['maxlength' => true]) ?>

    <div class="form-group field-tutor-country_id required">
        <label for="tutor-country-id" class="control-label col-sm-3">Country: </label><br>
        <div class="col-sm-6">
        <?= Html::activeDropDownList($model, "country_id",$model->countryList, [ 'onchange' => '$.get( "' . Yii::$app->urlManager->createUrl('/site/states') . '", {country_id : $(this).val()}, function( data ) {
             $("#state_id").html(data);
            });
        ', "class"=>"form-control"]
        )?>
        </div>
    </div>
    <div class="form-group field-tutor-state_id required">
        <label for="tutor-state-id" class="control-label col-sm-3">State: </label><br>
        <div class="col-sm-6">
        <?= Html::activeDropDownList($model, 'state_id',$model->stateList,["id"=>"state_id", 'onchange' => '$.get( "' . Yii::$app->urlManager->createUrl('/site/cities') . '", {state_id : $(this).val()}, function( data ) {
                                 $("#city_id").html(data);
                                });
                            ' , "class"=>"form-control"])?>
        </div>
    </div>
     <div class="form-group field-tutor-state_id required">
        <label for="tutor-state-id" class="control-label col-sm-3">State: </label><br>
        <div class="col-sm-6">
            <?= Html::activeDropDownList($model, 'city_id',$model->cityList,["id"=>"city_id", "class"=>"form-control"])?>
        </div>
    </div>



    <?= $form->field($model, 'pincode')->textInput(['maxlength' => true]) ?>


   

    <!-- <?//= $form->field($model, 'exam')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'university')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'year')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'percentage')->textInput(['maxlength' => true]) ?> -->

    

</div>
    <div class="form-group">
          <center><?= Html::submitButton($model->isNewRecord ? 'Save Profile' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success save' : 'btn btn-primary save']) ?>
          </center>
      </div>
    </div>
  </div>


    <?php ActiveForm::end(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var calculateAge = function(time){
        var months = Math.round(time/(24*60*60*1000*30));
        // alert(months);
        var years = parseInt(months / 12);
        // alert(years);
        months = months % 12;
        return years +" yrs and " + months + " months";
      };

      $('#dob').change(function(){
           var birthDate = new Date($(this).val()).getTime();
           var presentDate = new Date().getTime();
           // alert(birthDate);
           // alert(presentDate);
           var age = presentDate - birthDate;
           $('#age').val(calculateAge(age));
      });
    });

     // $(function () {
     //     function calculate() {
     //         var hours = parseInt($(".Time2").val().split(':')[0], 10) - parseInt($(".Time1").val().split(':')[0], 10);
     //         $(".Hours").val(hours);
     //     }
     //     $(".Time1,.Time2").change(calculate);
     //     calculate();
     // });
</script>


