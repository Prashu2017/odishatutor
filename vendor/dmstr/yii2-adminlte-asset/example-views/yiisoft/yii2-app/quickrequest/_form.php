<?php

use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\bootstrap\ActiveForm;
use dosamigos\multiselect\MultiSelect;

/* @var $this yii\web\View */
/* @var $model frontend\models\Quickrequest */
/* @var $form yii\bootstrap\ActiveForm*/
$list = array('Online' => 'Online',
              'At My Home' => 'At My Home',
              'Tutor\'s Place' => 'Tutor\'s Place'
             );
?>

<div class="quickrequest-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true, 'class'=>'form-control']) ?>

    <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'board')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'class')->widget(MultiSelect::className(),[
        'id'=>"multiXX",
        // "options" => ['multiple'=>"multiple"], // for the actual multiselect
        'data' => $model->ExpertiseCourse, // data as array
        'value' => [ 0, 2], // if preselected
        'class'=>'form-control',
        'name' => 'expertise_course', // name for the form
        "clientOptions" => 
            [
                "includeSelectAllOption" => true,
                'numberDisplayed' => 2
            ], 
    ]); 
    ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

   

    <!-- </?php//= $form->field($model, 'studyplace')->dropDownList($list); ?> -->
    <!-- </?= $form->field($model, 'studyplace[]')->checkBoxList($list); ?> -->
    <?= $form->field($model, 'studyplace')->radioList($list) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'locality')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pincode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'message')->textArea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Send Quick Request', ['class' => 'btn btn-success center-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
