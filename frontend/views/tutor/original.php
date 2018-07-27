<?php

use yii\helpers\Html;
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

?>

<div class="tutor-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>
    <div class="box">
        <div class="box-header with-border warning">
            <h3 class="box-title"> <i class="fa fa-info">&nbsp;</i>Personal Profile</h3>
        </div>
        <div class="box-body">
            <div class="col-sm-12" > 
                <?= $form->field($model, 'firstname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'lastname')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'dob')->widget(DatePicker::classname(), [
                    'options' => [
                        'placeholder' => 'Date of birth',
                        'id' => 'dob',
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
    <div class="clearfix"></div>
    <div class="box">
        <div class="box-header with-border warning">
            <h3 class="box-title"> <i class="fa fa-info">&nbsp;</i>Educational Profile</h3>
        </div>
        <div class="box-body">
            <div class='row form-add-w3ls first'>
                <div class='col-md-12 col-sm-12 col-xs-12 col-lg-12 '>
                    <div class='col-md-3 col-sm-3 col-xs-3 col-lg-3 '>
                    <h4>Exam Passed:</h4>
                        <p><input type='text' name='exam[]' placeholder='Matric..'></p>
                    </div>
                    <div class='col-md-3 col-sm-3 col-xs-3 col-lg-3 '>
                    <h4>University: </h4>
                        <p><input type='text' name='university[]' placeholder='Patna University..' ></p>
                    </div>  
                    <div class='col-md-2 col-sm-2 col-xs-2 col-lg-2 form-left-w3l'>
                    <h4>Passing Year:</h4>
                        <p><input type='number' min='1970' max=2018 name='year[]' placeholder='2005'></p>
                    </div>
                    <div class='col-md-2 col-sm-2 col-xs-2 col-lg-2'>
                    <h4>Percentage:</h4>
                        <p> <input type='text' name='percentage[]' ></p>
                    </div>
                    <div class='col-md-2 col-sm-2 col-xs-2 col-lg-2 add'>
                        <a href='' class='add_field_button'>Add More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="box">
        <div class="box-header with-border warning">
            <h3 class="box-title"> <i class="fa fa-info">&nbsp;</i>Professional Profile</h3>
        </div>
        <div class="box-body">
            <div class='col-md-12 col-sm-12 col-xs-12 col-lg-12 '>
            <?= $form->field($model, 'website')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'previous_work_place')->textInput(['maxlength' => true]) ?>
                    
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?= $form->field($model, 'subjects')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expertise_subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'experience')->textInput() ?>

    <?= $form->field($model, 'professional')->textInput(['maxlength' => true]) ?> 

    <!-- <?//= Html::dropDownList('professional', $model->getHierarchy());?> -->

    <!-- <?//=  $form->field($model, 'professional')->dropDownList($model->getHierarchy(), ['prompt' => 'Chose what you are', 'class'=>'form-control required']);?> -->

    <?= $form->field($model, 'geographically_present')->checkboxList(['Online' => 'Online', 'Offline' => 'Offline', 'Both Online/Online' => 'Both Online/Online']); ?>

    <?= $form->field($model, 'available_for')->checkboxList(['Private Teaching (One Student)' => 'Private Teaching (One Student)', 'Home Teaching (Teacher to student home)' => 'Home Teaching (Teacher to student home)', 'Both Private/Home Teaching' => 'Both Private/Home Teaching']); ?>

    <?= $form->field($model, 'pricing')->widget(CKEditor::className(), [
            'options' => ['rows' => 2],
            'preset' => 'basic'
        ]) ?>
    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'expertise_course')->widget(MultiSelect::className(),[
        'id'=>"multiXX",
        "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => $model->ExpertiseCourse, // data as array
        'value' => [ 0, 2], // if preselected
        'name' => 'expertise_course', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 2
            ], 
    ]); 
    ?>

    <!-- <?//= $form->field($model, 'digital_pen')->textInput() ?> -->

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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Save Profile' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
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
</script>



<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\multiselect\MultiSelect;
/* @var $this yii\web\View */
/* @var $model frontend\models\Tutor */
/* @var $form ActiveForm */
?>
<div class="tutor-_form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'dob') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'subjects') ?>
        <?= $form->field($model, 'expertise_subject') ?>
        <?= $form->field($model, 'experience') ?>
        <?= $form->field($model, 'professional') ?>
      
        <?= $form->field($model, 'geographically_present')->checkboxList(['Online' => 'Online', 'Offline' => 'Offline', 'Both Online/Online' => 'Both Online/Online']); ?>
       
        <?= $form->field($model, 'available_for')->checkboxList(['At Students Home' => 'At Students Home', 'At Tutor\'s Home' => 'At Tutor\'s Home', 'At Institute' => 'At Institute', 'Online Tuition' => 'Online Tuition']); ?>

        <?= $form->field($model, 'pricing') ?>
        <?= $form->field($model, 'language') ?>
        <?php echo $form->field($model, 'expertise_course')->widget(MultiSelect::className(),[
        'id'=>"multiXX",
        "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => $model->ExpertiseCourse, // data as array
        'value' => [ 0, 2], // if preselected
        'name' => 'expertise_course', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 2
            ], 
    ]); 
    ?>
        <?= $form->field($model, 'digital_pen') ?>
        <?= $form->field($model, 'describe_you') ?>
        <?= $form->field($model, 'country_id') ?>
        <?= $form->field($model, 'state_id') ?>
        <?= $form->field($model, 'city_id') ?>
        <?= $form->field($model, 'pincode') ?>
        <?= $form->field($model, 'street_address') ?>
        <?= $form->field($model, 'website') ?>
        <?= $form->field($model, 'previous_work_place') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'age') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tutor-_form -->
   