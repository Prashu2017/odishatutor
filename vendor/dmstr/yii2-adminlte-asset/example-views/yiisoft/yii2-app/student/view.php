<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Parentsdetail */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Students', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-view">
    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="col-xs-1 pull-right">
                            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary pull pull-right']) ?>
                        </div>
                        <div class="col-xs-1 pull-right">
                            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger pull pull-right',
                                'data' => [
                                    'confirm' => 'Are you sure you want to delete this item?',
                                    'method' => 'post',
                                ],
                            ]) ?>
                        </div>

                    </div>

                    <?= DetailView::widget([
                        'model' => $model,
                        'attributes' => [
                            'id',
                            'user_id',
                            'first_name',
                            'last_name',
                            // 'email_id:email',
                            // 'mobile_no',
                            // 'country_id',
                            // 'pincode',
                            // 'state_id',
                            // 'city_id',
                            // 'street_address',
                            // 'created_at:date',
                        ],
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
</div>
