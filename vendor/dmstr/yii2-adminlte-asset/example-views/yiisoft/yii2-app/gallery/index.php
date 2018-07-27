<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\GallerySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galleries';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gallery-index">

    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header pull-right">
                         <?= Html::a('Create'.$this->title, ['create'], ['class' => 'btn btn-success']) ?>
                </div>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'caption',
                        'status',
                        'image',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                 </div>
            </div>
        </div>
    </section>

</div>
