<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ParentsdetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Parentsdetails';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentsdetail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Parentsdetail', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'first_name',
            'last_name',
            'email_id:email',
            //'mobile_no',
            //'country_id',
            //'pincode',
            //'state_id',
            //'city_id',
            //'street_address',
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
