<?php

use yii\helpers\Html;
use yii\helpers\BaseHtml;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model backend\models\AcademicLevel */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="academic-level-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal']) ?>

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
