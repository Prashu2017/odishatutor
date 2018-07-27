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
        <?php } else { echo "Update Tutor"; } ?>

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
         <section class="content">
        <div class="row">
            <div class="col-xs-12">
              	<div class="box">
                	

				    <?= $this->render('_form', [
				        'model' => $model,
				    ]) ?>

					</div>
				</div>
			</div>
		
	</section>
    </section>
</div>
<?php } ?>
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
#w1 > div > div:nth-child(1) > div.panel-body > div > div:nth-child(8) > div > img{
	width: 20%;
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



<style type="text/css">
    #w0 > div.form-group.field-tutor-expertise_course.required > div.btn-group.open > ul{
        height:1000%;
        overflow: scroll !important;
    }
    #w0 > div:nth-child(2) > div.box-body > div > div:nth-child(8) > div > img{
    	width:15%;
    }
    #w0 > div > div:nth-child(1) > div.panel-body > div > div:nth-child(8) > div > img{width: 100px }
</style>
<script type="text/javascript">
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".first"); //Fields wrapper
        // var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $('.add_field_button').click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields)
            { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 first">  <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3"><h4>Exam Passed: </h4><p><input type="text" name="exam[]" ></p></div><div class="col-md-3 col-sm-3 col-xs-3 col-lg-3"><h4> University: </h4> <p><input type="text" name="university[]"></p>    </div>  <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"><h4>Year of passing: </h4> <p><input type="number" min="1970" max=2018 name="year[]" placeholder="2005"></p>   </div>  <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"><h4>Percentage: </h4><p> <input type="text" name="percentage[]"></p></div><div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 add"><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".schedule"); //Fields wrapper
        // var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $('.add_schedule_button').click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields)
            { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 first">  <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"><h4>Day: </h4><p><select id="schedule-day" class="form-control" name="Schedule[day]" aria-required="true" aria-invalid="false"><option value="Sunday">Sunday</option><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option></select></p></div><div class="col-md-2 col-sm-2 col-xs-2 col-lg-2"><h4> Available: </h4> <p><select id="schedule-avalable" class="form-control" name="avalable[]" aria-required="true" aria-invalid="false"><option value="Yes">Yes</option><option value="No">No</option></select></p>    </div>  <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3"><h4>From : </h4> <p><div class="form-group field-schedule-from_time required has-success"><label class="control-label col-sm-3" for="schedule-from_time"></label><div class="col-sm-6"><div class="bootstrap-timepicker input-group"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">12</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">AM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><input type="time" id="schedule-from_time" class="Time1 form-control" name="from_time[]" placeholder="In time" aria-required="true" aria-invalid="false"><span class="input-group-addon picker"><i class="glyphicon glyphicon-time"></i></span></div><div class="help-block help-block-error "></div></div></div></p>   </div>  <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3"><h4>To: </h4><p> <div class="bootstrap-timepicker input-group"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">12</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">AM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><input type="time" id="schedule-upto_time" class="Time1 form-control" name="upto_time[]" placeholder="In time" aria-required="true" data-krajee-timepicker="timepicker_6cf75597" aria-invalid="false"><span class="input-group-addon picker"><i class="glyphicon glyphicon-time"></i></span></div></p></div><div class="col-md-2 col-sm-2 col-xs-2 col-lg-2 add"><a href="#" class="remove_field">Remove</a></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })
    });
    </script>