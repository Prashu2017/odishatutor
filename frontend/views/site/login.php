<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login" >
    <center style="padding: 15px"><h2><?= Html::encode($this->title) ?></h2>

    <p>Please fill out the following fields to login:</p></center>
        <div class="col-md-12 col-xs-12 col-md-12 col-sm-12" style="background: #fff">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset'],['class' => 'modal-form']) ?>.
                </div>

                <div class="form-group">
                   <center> <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?></center>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    
</div>
