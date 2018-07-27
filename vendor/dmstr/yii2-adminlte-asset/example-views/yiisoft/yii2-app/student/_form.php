<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
use kartik\widgets\TimePicker;
use kartik\widgets\SwitchInput;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model common\models\Student */
/* @var $form yii\widgets\ActiveForm */
$statArray = [
    0 => 'Female',
    1 => 'Male'
  
];
?>

<div class="student-form">

     <?php $form = ActiveForm::begin(['layout' => 'horizontal']) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

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

    <?= $form->field($model, 'class')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
