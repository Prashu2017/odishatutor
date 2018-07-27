<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>

    <?php echo $form->field($model, 'logo')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->logo){
            echo '<div class="form-group"><label for="carimage-image" class="control-label col-sm-3">Logo Image</label><div class="col-sm-6">' . Html::img($model->logo) . '</div></div>';
        }
    ?>

    <?php echo $form->field($model, 'favicon')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->favicon){
            echo '<div class="form-group"><label for="carimage-image" class="control-label col-sm-3">Favicon Image</label><div class="col-sm-6">' . Html::img($model->favicon) . '</div></div>';
        }
    ?>

    <?php echo $form->field($model, 'banner_1')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->banner){
            echo '<div class="form-group"><label for="banner-image" class="control-label col-sm-3">Banner 1</label><div class="col-sm-6">' . Html::img($model->banner) . '</div></div>';
        }
    ?>
    
    <?php echo $form->field($model, 'banner_2')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->bannertwo){
            echo '<div class="form-group"><label for="banner-image" class="control-label col-sm-3">Banner 2</label><div class="col-sm-6">' . Html::img($model->bannertwo) . '</div></div>';
        }
    ?>
    
    <?php echo $form->field($model, 'banner_3')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->bannerthree){
            echo '<div class="form-group"><label for="banner-image" class="control-label col-sm-3">Banner 3</label><div class="col-sm-6">' . Html::img($model->bannerthree) . '</div></div>';
        }
    ?>

    <?php echo $form->field($model, 'banner_4')->widget(FileInput::classname(), [
    'options' => ['accept' => 'image/*'],
    ]);
    ?>
    
    <?php 
        if($model->bannerfour){
            echo '<div class="form-group"><label for="banner-image" class="control-label col-sm-3">Banner 4</label><div class="col-sm-6">' . Html::img($model->bannerfour) . '</div></div>';
        }
    ?>



    <?= $form->field($model, 'copyright_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smtp_host')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smtp_user')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smtp_pass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smtp_port')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'smtp_crypto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_email')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
