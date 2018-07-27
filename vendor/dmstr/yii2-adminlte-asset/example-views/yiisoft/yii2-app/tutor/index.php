<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\TutorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tutor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'firstname',
            'lastname',
            'phone',
            // 'dob',
            // 'age',
            // 'gender',
            // 'image',
            // 'subjects',
            // 'expertise_subject',
            // 'experience',
            // 'professional',
            // 'geographically_present',
            // 'available_for',
            // 'pricing',
            // 'language',
            // 'expertise_course',
            // 'digital_pen',
            // 'describe_you',
            // 'country_id',
            // 'state_id',
            // 'city_id',
            // 'pincode',
            // 'street_address',
            // 'website',
            // 'previous_work_place',
            // 'created_by',
            // 'cerated_at',
            // 'updated_by',
            // 'updated_at',
            // 'exam',
            // 'university',
            // 'year',
            // 'percentage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
