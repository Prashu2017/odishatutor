<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\QuickrequestSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quickrequest-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'mobile') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'board') ?>

    <?php // echo $form->field($model, 'class') ?>

    <?php // echo $form->field($model, 'subject') ?>

    <?php // echo $form->field($model, 'studyplace') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'locality') ?>

    <?php // echo $form->field($model, 'pincode') ?>

    <?php // echo $form->field($model, 'message') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
