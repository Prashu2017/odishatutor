<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SettingsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'logo') ?>

    <?= $form->field($model, 'favicon') ?>

    <?= $form->field($model, 'copyright_text') ?>

    <?= $form->field($model, 'site_name') ?>

    <?php // echo $form->field($model, 'smtp_host') ?>

    <?php // echo $form->field($model, 'smtp_user') ?>

    <?php // echo $form->field($model, 'smtp_pass') ?>

    <?php // echo $form->field($model, 'smtp_port') ?>

    <?php // echo $form->field($model, 'smtp_crypto') ?>

    <?php // echo $form->field($model, 'default_email') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
