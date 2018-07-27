<?php

use yii\helpers\Html;
use yii\base\view;
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

$setting =  Settings::findOne(1);
$this->title = 'Create Student';

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
  ?>

<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="/../css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />

<style type="text/css">
    ul.agile_forms li a { background: #ffb71c; font-size: 0.9em;color: black;padding: 7px 7px 8px 8px;text-transform: uppercase;font-weight: bolder;letter-spacing: 1px;margin: 0px 0px 0px 2px;border-radius: 0px !important;}
    .btn-sm, .btn-group-sm > .btn { padding: 5px 10px; line-height: 1.5;border-radius: 0px !important;color: black;text-transform: uppercase;font-weight: bolder;
      }
    #login-form{ padding: 24px 18px 26px 49px;}
    #loginform-username,#loginform-password{border: 1px solid}
    #modalFormId-3 > div > div > footer > div{width: 100%;display: none}
    /*----------------------------search bar--------------------------*/
    .be-modules {background: rgb(222, 222, 222);border-radius: 3px;padding: 15px;min-height: 65px;width: 85%;font-size: 14px;margin: 40px auto;-webkit-transition: all .2s ease;-moz-transition: all .2s ease;-ms-transition: all .2s ease;-o-transition: all .2s ease;transition: all .2s ease;
    }
     #BE_flight_form_wrapper {position: relative;border-radius: 3px;}
    .main_banner .journey-details { width: 100%;}
    .journey-details .pax-details {background: #fff;box-sizing: border-box;color: #333;float: left;font-size: 1em;padding: 17.3px 5px; position: relative;cursor: pointer;text-align: center;border-right: 1px solid rgba(0, 0, 0, 0.1);
    }
    .be-flights .journey-details .pax-details {padding: 3px 5px 5px 5px;}
    .ripple-parent {overflow: hidden; position: relative; width: 12%; float: left;}
    .form-control-border {border: 1px solid #e5e5e5 !important;}
    .form-control {width: 100%;height: 34px;padding: 6px 12px;background-color: #fff;   font-weight: 100;-webkit-box-shadow:inset 0 0px 0px rgba(0,0,0,0.075);}
    .journey-details input {background-color: #fff !important;padding: 10px 5px;color: #38404a;padding: 12px 10px \9;text-overflow: ellipsis;width: 100%;font-size: 1em;border: 0;}
    .journey-details .search-btn {background-color: #ff6600 !important;border-radius: 0 3px 3px 0; color: #fff; margin-left: 0;padding: 10px 25px;min-height: 40px; color: #fff; font-size: 16px; letter-spacing: 2px; cursor: pointer; appearance: button; -moz-appearance: button; /* Firefox */ -webkit-appearance: button;
       /* Safari and Chrome */ font-weight: 100;  text-transform: uppercase;
        }
    #mrcb {display: none;}
    @media only screen and (max-width: 610px) {
        .page-views{font-size:30px !important;}
        .page-views1 {color: #365f7f;font-size: 20px !important;}
        .home-tutors {font-size: 30px !important}
        .tuition-jobs {font-size: 30px !important}
        .home-tutors1 {color: #365f7f;font-size: 20px !important;}
        .tuition-jobs1 {color: #365f7f;font-size: 20px !important;}
        .journey-details .pax-details {float: left;width: 100%;border-right: 1px solid #e5e5e5; padding: 15px; margin-top: 5px; border-radius: 3px;border-bottom: 1px solid rgba(0, 0, 0, 0.1);}
        .dropdown-menu1 {width: 300px !important;}
        .city-search {width: 59% !important;}
        .tuition-type {width: 40% !important; float: left;}
        .search-type {width: 100% !important;}
        .ripple-parent {width: 100% !important;}
        #mrcb { display: block;}
        #drcb {display: none;}
        .form-control {padding: 6px 3px;}
        .logo-home h1.logo-title {font-size: 21px;height: 44px;left: auto;top: -29px;right: 25px;width: 100%;}
        img.home-logo-image {margin: 0;}
        .logo-home {height: 40px;}
        .logoCaption {font-size: 10px !important;}
        .be-modules {width: 100%;}
        .page-views1 {color: #365f7f;font-size: 11px;}
        .home-tutors1 {color: #365f7f;font-size: 11px;}
        .tuition-jobs1 {color: #365f7f;font-size: 11px;}
        .be-modules { margin: 5px auto;padding: 4px 9px;}
        .ripple-parent {margin-top: 5px;}
        .journey-details .search-btn {padding: 6px 25px;min-height: 30px;}
        #modalFormId-3 > div > div > footer > div{width: 100%;display: none}
        }
    @media only screen and (max-width: 480px) {
        .main_banner .journey-details .pax-details {padding: 12px 8px;}
        #modalFormId-3 > div > div > footer > div{width: 100%;display: none}
        .ripple-parent {width: 100% !important;}
    }
    @media only screen and (max-width: 375px) {
        .logo-home h1.logo-title {font-size: 21px;height: 44px;left: auto;top: -29px;right: 8px;width: 100%;}
        .logoCaption {font-size: 9px !important;}
        #modalFormId-3 > div > div > footer > div{width: 100%;display: none}
    }
    @media only screen and (max-width: 320px) {.logo-sm p { margin: 8px;}}
    .city-search { width: 70%;}
    .tuition-type { width: 60%;}
    .search-type {width: 222%;}
    #modalFormId-3 > div > div > footer > div{width: 100%;display: none}
#modalFormId-1 > div > div > footer{display: none;}
#searchForm {position: absolute;top: 40%;}
.input-group .form-control:first-child, .input-group-addon:first-child, .input-group-btn:first-child>.btn, .input-group-btn:first-child>.dropdown-toggle, .input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle) {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.input-group {position: relative; display: table; border-collapse: separate;}
.input-group-addon:last-child {border-left: 0;}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
    .navbar-header.navbar-right.pull.pull-right.open > ul{width:35%;background:#E0A718;}
}
@media screen and (max-width: 640px) and (min-width: 360px) {
#modalFormId-1 > div > div > footer{display: none;}
    .wrap {min-height: 100%; height: auto;margin: 0 auto 0px !important; padding: 0 0 0px !important;}
    .agileits_w3layouts_banner_nav{width:100% !important;padding: 0em 0em !important;}
    ul.agile_forms {margin: 2% 0% !important;text-align: center;float: left;}
    .navbar-header.navbar-left{ margin-bottom: -4%; }
   .navbar-header.navbar-right.pull.pull-right.open > ul {width: 69% !important;background: #E0A718;}
    /*.subscribe input[type="text"]{width:114px;height:22px;margin:0;padding:0 0px;}*/
    .subscribe button.btn {height: 22px;/* margin: 0; */widht: auto;padding: 2px 4px;
    /* vertical-align: middle; */ background: #88c82f;border: 0;font-family:'Raleway', sans-serif;font-size: 15px;font-weight: 400;line-height:23px; color:#fff;}
    body > div.wrap>div>div.about-bottom>div.row>div>form{display: inline-flex;}
    /*.navbar-header.navbar-left > p:nth-child(2){margin-bottom: 10%}*/
    .navbar-header.navbar-left > p:nth-child(2) > img{margin: -6% 1% !important;}
    .form-control {width: 100%; height: 24px;padding: 6px 12px; background-color: #fff;border: 1px solid #CCE; font-weight: 100; -webkit-box-shadow: inset 0 0px 0px rgba(0,0,0,0.075);}
    #form-signup > div:nth-child(6) > button,#login-form > div:nth-child(6) > button{display: inline-block;padding: 3px 52px;margin-bottom: 10px;font-size: 11px;font-weight: normal;line-height: 1.42857143;text-align: center; white-space: nowrap;vertical-align: middle;-ms-touch-action: manipulation;touch-action: manipulation;cursor: pointer;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none; background-image: none;border: 1px solid transparent;border-radius: 0px !important; background: #ffb71c; color: #fff; font-size: 0.9em; padding: 3px 4em 3px 70px; letter-spacing: 1px;  margin: 0px 0px 0px 2px; border-radius: 0px !important;   }
    #modalFormId-1 > div > div > footer{display:none;}
    #login-form{padding: 15px !important;}
    #modalFormId-2 > div > div > div > div > div{padding: 12px !important}
    #signupform-role{padding: 0px 6px !important}
    /*.navbar-header.navbar-left > h1 > a{margin:-14% 0% 2% 26% !important; }*/
    #modalFormId-1 > div > div > div > div > div > h1{margin: 0 40%;font-family: 'Exo 2', sans-serif;font-size: 20px;}
    #form-signup > div:nth-child(6){margin-bottom: 15px}
    ul.agile_forms li a {background: #ffb71c; color: #fff; font-size: 0.9em; padding: 3px 4em 3px 70px;text-transform: uppercase; letter-spacing: 1px; margin: 0px 0px 0px 2px;border-radius: 0px !important}
@media screen and (max-width: 1280px) and (min-width: 800px){
    #modalFormId-1 > div > div > footer{display: none;}
    .o-container {max-width: 1276px !important;margin: 0 auto; }
    .c-header__header, .c-header__content {height: 400px !important;}
    .nav {padding-left: 41px !important;margin-bottom: 0;list-style: none;}
}
@media screen and (max-width: 1280px) and (min-width: 1024px){
    #modalFormId-1 > div > div > footer{display: none;}
    .o-container {max-width: 1276px !important;margin: 0 auto; }
    .c-header__header, .c-header__content {height: 400px !important;}
    .nav {padding-left: 41px !important;margin-bottom: 0;list-style: none;}
}
@media screen and (max-width: 1024px) and (min-width: 768px) {
    #modalFormId-1 > div > div > footer{display: none;}
    .navbar-header.navbar-left > p:nth-child(2){ margin-bottom: 10% }
    .navbar-header.navbar-left > p:nth-child(2) > img{margin: -6% -2% !important;}
    .navbar-header.navbar-left > h1 > a{margin: -19% 0% 0% 43% !important;}
    .nav {padding-left: 41px !important;margin-bottom: 0;list-style: none;}
}

@media (min-width: 1024px){
    #modalFormId-1 > div > div > footer{display: none;}
    .form-inline .form-group {display: inline-flex; margin-bottom: 0;vertical-align: middle; }
    body >div.wrap>div>div.about-bottom>div.row>div>form{display: inline-flex;}
    /*.subscribe input[type="text"] {width: 303px; height: 50px; margin: 2px 10px; }*/
    body > div.about-bottom > div.row > div.col-sm-12.subscribe.wow.fadeInUp.animated > div > div > div.wrap > div > div > div:nth-child(3) > div > input{ height: 34px;}
    .c-header__header, .c-header__content {height: 400px !important;}
    #myCarousel > div > div.item.active > img{width:100%;}
    #bs-example-navbar-collapse-1{margin-top: .3em;padding-left: 9em !important;}
    .navbar-header.navbar-left > h1 > a {margin: -18% 0% 0% 45% !important;}
    .navbar-header.navbar-right.pull.pull-right.open > ul {width: 21% !important;     background: #E0A718; }
    .navbar-header.navbar-left > p:nth-child(2){ margin-bottom: 10% }
    .navbar-header.navbar-left > p:nth-child(2) > img{margin: -6% -2% !important;}
}

@media screen and (max-width: 1440px) and (min-width: 900px){
    #modalFormId-1 > div > div > footer{display: none;}
   .wrap {min-height: 100%; height: auto;/* margin:0 auto -60px; *//*padding: 0 0 60px;*/ }
    .o-container {max-width: 1440px !important;margin: 0 auto; }
    .navbar-header.navbar-right.pull.pull-right.open > ul {width: 25% !important;background: #E0A718 !important; }
    div.o-container > div > div{height:551px;margin-top: -23%; }
    .c-header__avatar {margin-top: -35.8rem !important;text-align: right;position:relative; }
    .c-header__avatar,.c-header__top {top:4vh !important;position:relative !important;}
}

@media screen and (max-width: 1366px) and (min-width: 1024px) {
    #modalFormId-1 > div > div > footer{display: none;}
    .wrap { min-height: 100%; height: auto;/* margin: 0 auto -60px; *//* padding: 0 0 60px; */}
   .navbar-header.navbar-right.pull.pull-right.open>ul{width: 25%;background:#E0A718;}
    div.o-container > div > div{height:551px; margin-top: -23%; }
    .c-header__avatar {margin-top: -35.8rem !important;text-align: right;position: relative; }
    .c-header__avatar, .c-header__top{top: 4vh !important;position:relative !important;}
    .c-header__header, .c-header__content { height: 551px !important;}
    /*div.o-container > div > header > div{height: 69% !important}*/
    .c-header__inner-header, .c-header__inner-content {position: relative;height: 63%;display: -webkit-flex;display: -ms-flexbox;display: flex;-webkit-flex-direction: column;-ms-flex-direction: column;flex-direction: column;-webkit-justify-content: center;-ms-flex-pack: center;justify-content: center;}
}

</style>



<body>

<!-- banner -->

<div class="main_section_agile" id="home">

    <div class="agileits_w3layouts_banner_nav">

        <nav class="navbar navbar-default">

            <div class="navbar-header navbar-left">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    <span class="sr-only">Toggle navigation</span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                    <span class="icon-bar"></span>

                </button>

                <p>

                    <img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$setting->logo ?>" height="40px" width="180px" style="margin: 0% 0% 2% -1%;width: 29%;" alt="<?= $setting->site_name ?>" title="<?= $setting->site_name ?>">
                </p>



            </div>

          

            <ul class="agile_forms">
                <li> <?= Html::a('My dashboard', ['student/dashboard']); ?> </li>
                <?php 

                if (Yii::$app->user->isGuest) 
                {?> 
                    <li><?= Html::a('Sign In', ['site/login'], ['class' => 'modal-form']);?></li>
                    <li><?= Html::a('Sign Up', ['site/signup'], ['class' => 'modal-form']);?></li>
                 <?php
                }else{
                       echo '<li>'. Html::beginForm(['/site/logout'], 'post'). Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')', ['class' => 'btn btn-link btn btn-default btn-sm logout']) . Html::endForm() . '</li>';
                
                }
                ?>

                

            </ul>

           

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

                <nav class="link-effect-2" id="link-effect-2">

                    <ul class="nav navbar-nav">

                        <li class="active"><a href="/" class="effect-3">Home</a></li>

                        <!-- <li><a href="#about" class="effect-3 scroll">About Us</a></li>

                        <li><a href="#services" class="effect-3 scroll">Services</a></li>

                        <li><a href="#team" class="effect-3 scroll">Team</a></li>

                        <li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>

                        <li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>
 -->
                    </ul>

                </nav>



            </div>

        </nav>  

        <div class="clearfix"> </div> 

    </div>

</div>

<div class="clearfix"> </div> 

<div class="container">
    <div class="student-create">
    	<div class="panel panel-primary">
            <div class="panel-heading">Complete Profile</div>
                <div class="panel-body">
                    <div class="col-sm-12" >
                   <?= $this->render('_form', [
                        'model' => $model,
                    ]) ?>
                </div>
                </div>
            </div>

    		</div>
    	</div>
    </div>

<style type="text/css">
        .open > .dropdown-menu{
        height: 347%;
        overflow: scroll;
        display: block
    }
    .wrap {
    min-height: 100%;
    height: auto;
    margin: 0 auto -60px;
    padding: 0px 0px 0px 0px !important;
}
.wrap > .container {
    padding: 70px 15px 126px 0px !important;
}
</style>

