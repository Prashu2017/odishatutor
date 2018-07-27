<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Profession */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profession-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>

   <!-- <?//= $form->field($model, 'parent_id')->textInput() ?> -->

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'groups')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success center-block' : 'btn btn-primary center-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
