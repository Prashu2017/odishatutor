<?php

use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Subjects */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subjects-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']) ?>

    <?= $form->field($model, 'academic_level_id')->dropDownList($model->academicList)?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <div class="col-xs-1">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
        <div class="col-xs-1">
            <?= Html::resetButton('Reset',['class'=>'btn btn-warning']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
