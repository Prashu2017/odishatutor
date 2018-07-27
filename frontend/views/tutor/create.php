<?php

use yii\helpers\Html;
use yii\base\view;
/* @var $this yii\web\View */
/* @var $model frontend\models\Tutor */
$this->title = 'Create Tutor';
// $this->params['breadcrumbs'][] = ['label' => 'Tutors', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\db\ActiveRecord;
use yii\helpers\Url;
use yii\bootstrap\Modal;
use yii\captcha\Captcha;
use frontend\models\ContactForm;
use frontend\models\TutorSearch;
use yii\bootstrap\Carousel;
use backend\models\Settings;
use backend\models\Gallery;
use backend\models\Tutor;
use common\models\User;
use common\models\Subjects;
use common\models\AcademicLevel;
use frontend\controllers\SiteController;
use yii\bootstrap\Alert;
use yii\widgets\Breadcrumbs;
$setting =  Settings::findOne(1);

$tutor = null;
$active_teacher = User::find()
        ->where(['status' => User::STATUS_ACTIVE])
        ->andWhere(['role' => User::ROLE_TEACHER])
        ->count();

$students = User::find()
        ->where(['status' => User::STATUS_ACTIVE])
        ->andWhere(['role' => User::ROLE_STUDENT])
        ->count();   
$gallery = Gallery::find()
        ->where(['status' => Gallery::STATUS_ACTIVE])
        ->all();     
$academicLevel = AcademicLevel::find()->all();

$submitUrl = 'site/findtutor';

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
        <link rel="stylesheet" type="text/css" href="http://yiiwheels.2amigos.us/css/bootstrap.min.css">
        
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
        <?= Alert::widget() ?>
        
        <div class="student-view">
            <section class="content">   
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            
                            <div class="col-sm-12" >
                                <?php echo \yii\base\View::render('_form', array('model'=>$model)); ?>
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
<!-- <link rel="stylesheet" type="text/css" href="http://yiiwheels.2amigos.us/assets/c7544bad/css/bootstrap-multiselect.css"> -->
<!-- <script id="mobile-datepicker" src="https://rawgithub.com/arschmitz/jquery-mobile-datepicker-wrapper/v0.1.1/jquery.mobile.datepicker.js"></script> -->
<!-- <link rel="stylesheet" href="https://rawgithub.com/arschmitz/jquery-mobile-datepicker-wrapper/v0.1.1/jquery.mobile.datepicker.css" /> -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <script type="text/javascript">
        $(document).ready(function() {
        var max_fields      = 10; //maximum input boxes allowed
        var wrapper         = $(".first"); //Fields wrapper
        var wrappper = $(".schedule");
        // var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $('.add_field_button').click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields)
            { //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 first">  <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3"><h4>Exam Passed: </h4><p><input type="text" name="Tutor[exam][]"  class="form-control"></p></div><div class="col-md-3 col-sm-3 col-xs-12 col-lg-3"><h4> University: </h4> <p><input type="text" name="Tutor[university][]" class="form-control"></p>    </div>  <div class="col-md-2 col-sm-2 col-xs-12 col-lg-2"><h4>Year of passing: </h4> <p><input type="number" min="1970" max=2018 name="Tutor[year][]" placeholder="2005" class="form-control" ></p>   </div>  <div class="col-md-2 col-sm-2 col-xs-12 col-lg-2"><h4>Percentage: </h4><p> <input type="text" name="Tutor[percentage][]" class="form-control"></p></div><div class="col-md-2 col-sm-2 col-xs-12 col-lg-2 add"><a href="#" class="remove_field btn btn-warning btn-xs">Remove</a></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })


        var x = 1; //initlal text box count
        $('.add_schedule_button').click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields)
            { //max input box allowed
                x++; //text box increment
                $(wrappper).append('<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 schedule">  <div class="col-md-3 col-sm-3 col-xs-12 col-lg-3"><h4>Day: </h4><p><select id="schedule-day" class="form-control" name="Tutor[day][]" aria-required="true" aria-invalid="false"><option value="Sunday">Sunday</option><option value="Monday">Monday</option><option value="Tuesday">Tuesday</option><option value="Wednesday">Wednesday</option><option value="Thursday">Thursday</option><option value="Friday">Friday</option><option value="Saturday">Saturday</option></select></p></div><div class="col-md-3 col-sm-3 col-xs-12 col-lg-3"><h4> Available: </h4> <p><select id="schedule-avalable" class="form-control" name="Tutor[avalable][]" aria-required="true"><option value="Yes">Yes</option><option value="No">No</option></select></p>    </div>  <div class="col-md-2 col-sm-2 col-xs-12 col-lg-2"><h4>From: </h4> <p><div class="bootstrap-timepicker input-group"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">01</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">AM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><input type="time" id="schedule-from_time1" class="Time1 form-control" name="Tutor[from_time[]]" placeholder="In time" aria-required="true" data-krajee-timepicker="timepicker_6cf75597"><span class="input-group-addon picker"><i class="glyphicon glyphicon-time"></i></span></div></p>   </div>  <div class="col-md-2 col-sm-2 col-xs-12 col-lg-2"><h4>To: </h4><p> <div class="bootstrap-timepicker input-group"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a href="#" data-action="incrementHour"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="incrementMinute"><i class="glyphicon glyphicon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td class="meridian-column"><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-up"></i></a></td></tr><tr><td><span class="bootstrap-timepicker-hour">01</span></td> <td class="separator">:</td><td><span class="bootstrap-timepicker-minute">00</span></td> <td class="separator">&nbsp;</td><td><span class="bootstrap-timepicker-meridian">AM</span></td></tr><tr><td><a href="#" data-action="decrementHour"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator"></td><td><a href="#" data-action="decrementMinute"><i class="glyphicon glyphicon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a href="#" data-action="toggleMeridian"><i class="glyphicon glyphicon-chevron-down"></i></a></td></tr></tbody></table></div><input type="time" id="schedule-upto_time" class="Time1 form-control" name="Tutor[upto_time][]" placeholder="In time" aria-required="true" data-krajee-timepicker="timepicker_6cf75597"><span class="input-group-addon picker"><i class="glyphicon glyphicon-time"></i></span></div></p></div><div class="col-md-2 col-sm-2 col-xs-12 col-lg-2 add"><a href="#" class="remove_schedule_field btn btn-warning btn-xs">Remove</a></div></div>'); //add input box
            }
        });
        
        $(wrappper).on("click",".remove_schedule_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').parent('div').remove(); x--;
        })

        $("input[type='date']").on("blur keyup", function(e){
            var $this = $(this),
            value = $this.val();

            //Does the input have "-", if so it is from the webkit datepicker, fix it
            if(value.indexOf("-") !== -1){
                var cleanDateArray = value.split('-');
                value = cleanDateArray[2] + "/" + cleanDateArray[1] + "/" + cleanDateArray[0];
            }

            //Set the hidden value to validate on, trigger the blur and keyup event for validation as you type
            $("#hiddenDateField").val(value).trigger("blur").trigger("keyup");
        });


        

    });
    $('#schedule-from_time1').timepicker({
            showInputs: false
        });
    </script>
</div>
<style type="text/css">
    /* #w0 > div.form-group.field-tutor-expertise_course.required > div.btn-group.open > ul{
        height: 1000%;
        overflow: scroll;
    }
    #w0 > div:nth-child(6) > div > div > div > div.col-md-3.col-sm-8.col-xs-12.col-lg-3 > div > label,
    #w0 > div > div:nth-child(5) > div.panel-body > div > div:nth-child(1) > div:nth-child(1) > div > label, #w0 > div > div:nth-child(5) > div.panel-body > div > div:nth-child(1) > div:nth-child(2) > div > label, #w0 > div > div:nth-child(5) > div.panel-body > div > div:nth-child(1) > div.col-md-3.col-sm-8.col-xs-12.col-lg-3 > div > label, #w0 > div > div:nth-child(5) > div.panel-body > div > div:nth-child(1) > div.col-md-3.col-sm-12.col-xs-12.col-lg-3 > div > label,#w0 > div > div:nth-child(3) > div.panel-body > div > div:nth-child(1) > div:nth-child(1) > div > label,#w0 > div > div:nth-child(3) > div.panel-body > div > div > div:nth-child(2) > div > label,#w0 > div > div:nth-child(3) > div.panel-body > div > div > div.col-md-2.col-sm-2.col-xs-12.col-lg-2.form-left-w3l > div > label,#w0 > div > div:nth-child(3) > div.panel-body > div > div > div:nth-child(4) > div > label{
        display: none;
    }
    .save{
        margin-top:15px !important;
    }
    #w0 > div > div:nth-child(1) > div.panel-body > div > div.form-group.field-tutor-image.has-success > div > div.file-input > div.input-group.file-caption-main > div.input-group-btn > button.btn.btn-default.btn-secondary.fileinput-upload.fileinput-upload-button{
        display: none !important;
    }
    .form-control{width:100% !important;}
    @media (min-width: 768px){
            .col-sm-6 {
            width: 70% !important;
        }
    }*/
</style>