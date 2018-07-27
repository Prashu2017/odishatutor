<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AcademicLevel */

$this->title = 'Create Academic Level';
$this->params['breadcrumbs'][] = ['label' => 'Academic Levels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="academic-level-create">
	<section class="content">
	        <div class="row">
	            <div class="col-xs-12">
	              	<div class="box">
	                	<div class="box-header">
		                    <div class="box-title">
		                        <!-- 	<h3><?= Html::encode($this->title) ?></h3> -->
		                    </div>

				    <?= $this->render('_form', [
				        'model' => $model,
				    ]) ?>

					</div>
				</div>
			</div>
		</div>
	</section>
</div>