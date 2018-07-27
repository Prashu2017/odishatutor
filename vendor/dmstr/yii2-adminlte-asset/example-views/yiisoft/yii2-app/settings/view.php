<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Settings */
?>
<div class="settings-view">
<?php
$this->title = "View Settings:".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

   <section class="content">
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <div class="col-md-1 col-xs-4 pull-right">
                        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary pull pull-right no-print']) ?>
                    </div>
                    <div class="col-md-1 col-xs-4 pull-right">
                        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                            'class' => 'btn btn-danger pull pull-right no-print',
                            'data' => [
                                'confirm' => 'Are you sure you want to delete this item?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    </div>
                    <div class="col-md-2 col-xs-4 pull-right">
                        <?= Html::tag('span', 'Print<i class="fa fa-print"> </i>', ['class' => 'btn btn-info no-print','onClick' => 'window.print()',]) ?>
                    </div>

                </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'logo',
            [
                'attribute'=>'Logo',
                'label'=>'Logo image',
                'value'=>Yii::$app->params['mediaUrl'] .'settings/'.$model->logo,
                'format' => ['image',['width'=>'120','height'=>'70']],
            ],
            'favicon',
            [
                'attribute'=>'Favicon',
                'label'=>'Favicon image',
                'value'=>Yii::$app->params['mediaUrl'] .'settings/'.$model->favicon,
                'format' => ['image',['width'=>'30','height'=>'30']],
            ],
            'banner_1',
            [
                'attribute'=>'Banner 1',
                'label'=>'Banner 1 image',
                'value'=>Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_1,
                'format' => ['image',['width'=>'130','height'=>'80']],
            ],
            'banner_2',
            [
                'attribute'=>'Banner 2',
                'label'=>'Banner 2 image',
                'value'=>Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_2,
                'format' => ['image',['width'=>'130','height'=>'80']],
            ],
            'banner_3',
            [
                'attribute'=>'Banner 3',
                'label'=>'Banner 3 image',
                'value'=>Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_3,
                'format' => ['image',['width'=>'130','height'=>'80']],
            ],
            'banner_4',
            [
                'attribute'=>'Banner 4',
                'label'=>'Banner 4 image',
                'value'=>Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_4,
                'format' => ['image',['width'=>'130','height'=>'80']],
            ],

            'copyright_text',
            'site_name',
            'smtp_host',
            'smtp_user',
            'smtp_pass',
            'smtp_port',
            'smtp_crypto',
            'default_email:email',
            'created_by',
            'updated_by',
            'created_at:datetime',
            'updated_at:datetime',
        ],
    ]) ?>

</div>
</div>
        </div>
    </div>
</section>    
</div>
<style type="text/css">
    @media print
{    
    .no-print, .no-print *
    {
        display: none !important;
    }
}
body > div.wrapper > header > nav > div > ul > li:nth-child(5){display: none;}
.box{overflow: scroll;}
</style>