<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
$status = [
    1 => 'Active',
    0 => 'Inactive'
];
/* @var $this yii\web\View */
/* @var $model backend\models\Gallery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gallery-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'caption')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($status) ?> 

    <?php echo $form->field($model, 'image')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->url){
            echo '<div class="form-group"><label for="carimage-image" class="control-label col-sm-3">Image Preview</label><div class="col-sm-6">' . Html::img($model->url) . '</div></div>';
        }
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success center-block' : 'btn btn-primary center-block']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
