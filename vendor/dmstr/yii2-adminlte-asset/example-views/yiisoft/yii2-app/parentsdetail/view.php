<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Parentsdetail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Parentsdetails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentsdetail-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'first_name',
            'last_name',
            'email_id:email',
            'mobile_no',
            'country_id',
            'pincode',
            'state_id',
            'city_id',
            'street_address',
            'created_at',
        ],
    ]) ?>

</div>
