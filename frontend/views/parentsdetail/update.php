<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Parentsdetail */

$this->title = 'Update Parentsdetail: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Parentsdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="parentsdetail-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
