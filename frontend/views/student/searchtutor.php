<?php
use yii\helpers\Html;
use yii\bootstrap\Alert;
use yii\widgets\Breadcrumbs;
use frontend\models\Tutor;
use frontend\models\TutorSearch;

use yii\base\Model;
use yii\data\ActiveDataProvider;

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
    <section class="content-header">
        <?php if (isset($this->blocks['content-header'])) { ?>
            <h1><?= $this->blocks['content-header'] ?></h1>
        <?php } else { echo "Search Tutor"; } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?php
        $tutors = Tutor::find()->all();
		foreach ($tutors as $tutor) {
        // add conditions that should always apply here
        ?>
       <div class="result-user">
        
            <div class="result-inner">
                <div class="result-photo">
                    <span class="online-status"></span>
                    <a class="link_bare" href="https://www.hometutors.in/harjinder" title="{Harjinder Singh}" target="_blank">
                        <img src="http://www.odishatutor.com/uploads/tutor/<?= $tutor['image'] ?>" onerror="this.src='media/pics/no_photo.gif';">
                    </a>
                </div>
                <div class="user-details">
                <!--<p class="users-name"><a href="https://www.hometutors.in/harjinder" title="harjinder">harjinder</a></p>--> 
                    <div class="user-info">         
                     <a href="https://www.hometutors.in/harjinder" target="_blank">
                        <span class="tname"><?= $tutor['firstname'] ?></span>
                    </a>, <span class="tname2">(<?= $tutor['gender'] ?>, <?= $tutor['age'] ?>)</span> 
                    <span class="tname2"><b>Tutor Id</b>: <?= $tutor['id'] ?></span> 
                    <div class="class-span"><strong>Tutor for</strong> : <?= $tutor['subjects'] ?></div> 
                    <div clas="info2">
                        <strong>Location</strong> : 
                        <span class="tname2"> - Jallandhar</span>
                    </div>
                    <div class="info2"><strong>Education</strong> : </div>
                    <div class="tname2"><strong>Teaching Exp.</strong> : <?= $tutor['experience'] ?> years</div>                      
                    <div class="tname2"><strong>Call</strong> : <strong><?= $tutor['phone'] ?></strong></div>   
                    <!--<span class="info last-online"><label>Last online :</label> More than a month ago</span>-->
                    <div>
                    <span id="btn"><a class="button5" href="https://www.hometutors.in/request-tutor.php" title="Get a call back within one hour" target="_blank">Send Message</a></span> 
                    </div>
               
                    </div>  
                </div>
            </div>
        </div>
    <?php

    }
}
    ?>
    </section>
</div>

    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>

<style type="text/css">
    .wrap{
        display: none;
    }
    .result-user {
    margin: 2px 0px 10px;
    border: 1px solid #e3e3e3;
    border-radius: 5px;
    -webkit-box-shadow: 1px 2px 2px rgb(238, 238, 238);
    box-shadow: 0px 0px 24px #000000;
    background: #fff;
}
.result-user .result-inner {
    padding: 10px;
    overflow: hidden;
    clear: both;
}
.result-photo {
    float: left;
    width: 20%;
}
.result-photo a {
    display: block;
}
.result-photo a img {
    display: block;
    margin: 2px auto;
    width: 100%;
    max-width: 100px;
}
.user-details {
    float: left;
    width: 80%;
    line-height: 25px;
}
 .user-info {
    padding: 0px 10px;
}
.button5 {
    background-color: #DC143C;
    border: none;
    color: white;
    float: left;
    padding: 2px 15px;
    border-radius: 4px;
    text-align: center;
    text-decoration: none !important;
    display: inline-block;
    font-size: 14px;
    margin-top: 5px;
}
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>