<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\TutorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'firstname') ?>

    <?= $form->field($model, 'lastname') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'dob') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'image') ?>

    <?php // echo $form->field($model, 'subjects') ?>

    <?php // echo $form->field($model, 'expertise_subject') ?>

    <?php // echo $form->field($model, 'experience') ?>

    <?php // echo $form->field($model, 'professional') ?>

    <?php // echo $form->field($model, 'geographically_present') ?>

    <?php // echo $form->field($model, 'available_for') ?>

    <?php // echo $form->field($model, 'pricing') ?>

    <?php // echo $form->field($model, 'language') ?>

    <?php // echo $form->field($model, 'expertise_course') ?>

    <?php // echo $form->field($model, 'digital_pen') ?>

    <?php // echo $form->field($model, 'describe_you') ?>

    <?php // echo $form->field($model, 'country_id') ?>

    <?php // echo $form->field($model, 'state_id') ?>

    <?php // echo $form->field($model, 'city_id') ?>

    <?php // echo $form->field($model, 'pincode') ?>

    <?php // echo $form->field($model, 'street_address') ?>

    <?php // echo $form->field($model, 'website') ?>

    <?php // echo $form->field($model, 'previous_work_place') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'cerated_at') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'exam') ?>

    <?php // echo $form->field($model, 'university') ?>

    <?php // echo $form->field($model, 'year') ?>

    <?php // echo $form->field($model, 'percentage') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
