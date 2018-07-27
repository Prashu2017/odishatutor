<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Treviewrating */

$this->title = 'Create Treviewrating';
$this->params['breadcrumbs'][] = ['label' => 'Treviewratings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="treviewrating-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
