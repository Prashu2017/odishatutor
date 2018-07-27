<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">
    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header pull-right">
                    <?= Html::a('Create Course', ['create'], ['class' => 'btn btn-success']) ?>
                </div>

                    <?= GridView::widget([
                            'dataProvider' => $dataProvider,
                            'filterModel' => $searchModel,
                            'columns' => [
                                ['class' => 'yii\grid\SerialColumn'],

                               //'id',
                                'name',

                                ['class' => 'yii\grid\ActionColumn'],
                            ],
                        ]); ?>

                </div>
            </div>
        </div>
    </section>
</div>
