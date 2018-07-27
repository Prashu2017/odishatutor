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
    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header pull-right">
                         <?= Html::a('Create New Request', ['create'], ['class' => 'btn btn-success']) ?>
                </div>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        'name',
                        'mobile',
                        'email:email',
                        'board',
                        'class',
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
            </div>
        </div>
    </section>
</div>
