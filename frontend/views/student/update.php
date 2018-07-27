<?php
use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\widgets\Breadcrumbs;
use yii\widgets\DetailView;
/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    dmstr\web\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@vendor/almasaeed2010/adminlte/dist');
    ?>
   
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://www.odishatutor.com/uploads/settings/odishatutor_favicon%20_1529777061.ico" type="image/ico" sizes="20x16">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
    <?php if(!empty($msg)){echo Alert::widget(['options' => ['class' => 'alert-warning', ],'body' => $msg,
    ]);} ?>
    <div class="wrapper">

        <?= $this->render(
            'header.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>

        <?= $this->render(
            'left.php',
            ['directoryAsset' => $directoryAsset]
        )
        ?>

      


<div class="content-wrapper">
   

    <section class="content">

   
<div class="student-update">

     <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <div class="box-title">
                            <!--    <h3><?= Html::encode($this->title) ?></h3> -->
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
    </section>
</div>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>