<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use kartik\widgets\TimePicker;
use kartik\widgets\SwitchInput;
use kartik\widgets\FileInput;
use dosamigos\multiselect\MultiSelect;
/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
$statArray = [
    0 => 'Female',
    1 => 'Male'
  
];
?>

<div class="student-form">

     <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>

   

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

     <?= $form->field($model, 'dob')->widget(DatePicker::classname(), [
                    'options' => [
                        'placeholder' => 'Date of birth',
                    ],
                    'type' => DatePicker::TYPE_INPUT,
                    'pluginOptions' => [
                        'format' => 'yyyy-mm-dd',
                        'autoclose' => true,
                    ],
                ]);
            ?>

    <?= $form->field($model, 'gender')->dropDownList($statArray) ?>

    <?php echo $form->field($model, 'image')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->url){
            echo '<div class="form-group"><label for="carimage-image" class="control-label col-sm-3">Logo Image</label><div class="col-sm-6">' . Html::img($model->url) . '</div></div>';
        }
    ?>

    <?php echo $form->field($model, 'class')->widget(MultiSelect::className(),[
        'id'=>"multiXX",
        // "options" => ['multiple'=>"multiple"], // for the actual multiselect
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

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success center-block' : 'btn btn-primary center-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
