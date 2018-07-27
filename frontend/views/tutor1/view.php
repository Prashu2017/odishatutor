<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Tutor */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-view">

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
            'firstname',
            'lastname',
            'phone',
            'dob',
            'age',
            'gender',
            'image',
            'subjects',
            'expertise_subject',
            'experience',
            'professional',
            'geographically_present',
            'available_for',
            'pricing',
            'language',
            'expertise_course',
            'digital_pen',
            'describe_you',
            'country_id',
            'state_id',
            'city_id',
            'pincode',
            'street_address',
            'website',
            'previous_work_place',
        ],
    ]) ?>

</div>
