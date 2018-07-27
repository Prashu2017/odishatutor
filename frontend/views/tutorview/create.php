<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tutorview */

$this->title = 'Create Tutorview';
$this->params['breadcrumbs'][] = ['label' => 'Tutorviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorview-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
