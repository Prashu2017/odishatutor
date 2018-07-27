<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-index">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <p>
                <?= Html::a("Create". $this->title , ['create'], ['class' => 'btn btn-success pull pull-right']) ?>
                </p>
            </div>
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'id',
                        'logo',
                        'favicon',
                        'copyright_text',
                        'site_name',
                        // 'smtp_host',
                        // 'smtp_user',
                        // 'smtp_pass',
                        // 'smtp_port',
                        // 'smtp_crypto',
                        // 'default_email:email',
                        // 'created_by',
                        // 'updated_by',
                        // 'created_at',
                        // 'updated_at',

                        ['class' => 'yii\grid\ActionColumn'],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
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
#w0{overflow: scroll;}
</style>