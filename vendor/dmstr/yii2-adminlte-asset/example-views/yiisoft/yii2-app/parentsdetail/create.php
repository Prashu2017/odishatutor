<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Parentsdetail */

$this->title = 'Create Parentsdetail';
$this->params['breadcrumbs'][] = ['label' => 'Parentsdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentsdetail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
