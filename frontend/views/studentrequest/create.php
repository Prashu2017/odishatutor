<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Studentrequest */

$this->title = 'Create Studentrequest';
$this->params['breadcrumbs'][] = ['label' => 'Studentrequests', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentrequest-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
