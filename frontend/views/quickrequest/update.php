<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Quickrequest */

$this->title = 'Update Quickrequest:'.$model->name;
$this->params['breadcrumbs'][] = ['label' => 'Quickrequests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="quickrequest-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
