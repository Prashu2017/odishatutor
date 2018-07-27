<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Settings */
?>
<div class="settings-create">
<?php
$this->title = 'Create Settings';
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"> <i class="fa fa-archive">&nbsp;</i> <?= $this->title ?></h3>
        </div>
        <div class="box-body">
            <div class="col-sm-12">
                <?= $this->render('_form', ['model' => $model,]) ?>
            </div>
        </div>
    </div>
</div>
