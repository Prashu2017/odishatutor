<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Treviewrating */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="treviewrating-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tutor_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'review')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ratings')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
