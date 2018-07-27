<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Profession */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Professions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profession-view">

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
                        'parent_id',
                        'name',
                        'groups',
                    ],
                ]) ?>
                </div>
            </div>
        </div>
    </section>

</div>
