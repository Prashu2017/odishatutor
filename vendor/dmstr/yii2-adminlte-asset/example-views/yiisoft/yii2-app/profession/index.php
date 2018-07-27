<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProfessionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Professions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-index">
    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header pull-right">
                         <?= Html::a('Create Profession', ['create'], ['class' => 'btn btn-success']) ?>
                </div>

                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        // 'id',
                        'parent_id',
                        'name',
                        'groups',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
                </div>
            </div>
        </div>
    </section>

</div>
