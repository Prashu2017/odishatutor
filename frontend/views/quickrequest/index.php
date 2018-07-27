<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\QuickrequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Quickrequests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quickrequest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Quickrequest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'mobile',
            'email:email',
            'board',
            //'class',
            //'subject',
            //'studyplace',
            //'city',
            //'locality',
            //'pincode',
            //'message',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
