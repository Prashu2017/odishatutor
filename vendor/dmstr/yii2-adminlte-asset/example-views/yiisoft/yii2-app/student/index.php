<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\StudentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="parentsdetail-index">

    <section class="content">   
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header pull-right">
                         <?= Html::a('Create Student', ['create'], ['class' => 'btn btn-success']) ?>
                </div>

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
		</div>
	</div>
</section>
</div>
