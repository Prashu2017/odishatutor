<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Tutor */
/* @var $form ActiveForm */
?>
<div class="tutor-_form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'id') ?>
        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'dob') ?>
        <?= $form->field($model, 'age') ?>
        <?= $form->field($model, 'gender') ?>
        <?= $form->field($model, 'image') ?>
        <?= $form->field($model, 'subjects') ?>
        <?= $form->field($model, 'expertise_subject') ?>
        <?= $form->field($model, 'experience') ?>
        <?= $form->field($model, 'professional') ?>
        <?= $form->field($model, 'geographically_present') ?>
        <?= $form->field($model, 'available_for') ?>
        <?= $form->field($model, 'pricing') ?>
        <?= $form->field($model, 'language') ?>
        <?= $form->field($model, 'expertise_course') ?>
        <?= $form->field($model, 'digital_pen') ?>
        <?= $form->field($model, 'describe_you') ?>
        <?= $form->field($model, 'country_id') ?>
        <?= $form->field($model, 'state_id') ?>
        <?= $form->field($model, 'city_id') ?>
        <?= $form->field($model, 'pincode') ?>
        <?= $form->field($model, 'street_address') ?>
        <?= $form->field($model, 'website') ?>
        <?= $form->field($model, 'previous_work_place') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- tutor-_form -->
