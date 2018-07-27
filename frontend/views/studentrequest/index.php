<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentrequestSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studentrequests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentrequest-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Studentrequest', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'student_id',
            'tutor_id',
            'name',
            'email:email',
            //'mobile',
            //'subject',
            //'message',
            //'time_prefence',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
