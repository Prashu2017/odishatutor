<?php



/* @var $this yii\web\View */

/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;

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

$model =  Settings::findOne(1);

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
<link rel="icon" href="http://www.odishatutor.com/uploads/settings/odishatutor_favicon%20_1529777061.ico" type="image/ico" sizes="16x16">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/jquery-ui.css" />
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<style type="text/css">
    .navbar{border:0px !important;}
    #home > div > nav > ul > li:nth-child(2) > a{border-radius: 0px !important;font-weight: bolder; color:#000 !important;}
    #home > div > nav > ul > li:nth-child(1) > a{border-radius: 0px !important;font-weight: bolder; color:#000 !important;}
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
    .form-control {width: 100%;height: 34px;padding: 6px 12px;background-color: #fff;    border: 0px solid #e5e5e5;font-weight: 100;-webkit-box-shadow:inset 0 0px 0px rgba(0,0,0,0.075);}
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
        .tuition-type {width: 100% !important; float: left;}
        .search-type {width: 100% !important;}
        .ripple-parent {width: 100% !important;}
        #mrcb { display: block;}
        #drcb {display: none;}
        .form-control {padding: 0px 3px !important;}
        .logo-home h1.logo-title {font-size: 21px;height: 44px;left: auto;top: -29px;right: 25px;width: 100%;}
        img.home-logo-image {margin: 0;}
        ul.agile_forms {  margin: 2% 4% !important; text-align: center; float: left;}
        .logo-home {height: 40px;}
        .logoCaption {font-size: 10px !important;}
        .be-modules {width: 100%;}
        .wthree_footer_grid_left1.wthree_footer_grid_right1 {float: right !important; width: 100%;}
        .page-views1 {color: #365f7f;font-size: 11px;}
        .home-tutors1 {color: #365f7f;font-size: 11px;}
        .tuition-jobs1 {color: #365f7f;font-size: 11px;}
        .be-modules { margin: 5px auto;padding: 4px 9px;}
        .ripple-parent {margin-top: 5px;}
        .journey-details .search-btn {padding: 6px 25px;min-height: 30px;}
        .navbar-header.navbar-left > p:nth-child(2) > img { margin: -1% 0% 3% 14%!important; width: 65% !important;}
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
.btn-default { color: #ffffff;background-color: #000;border-color: #000;}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
    .navbar-header.navbar-right.pull.pull-right.open > ul{width:35%;background:#E0A718;}
}
@media screen and (max-width: 640px) and (min-width: 360px) {
#modalFormId-1 > div > div > footer{display: none;}
    .wrap {min-height: 100%; height: auto;margin: 0 auto 0px !important; padding: 0 0 0px !important;}
    body > footer > div > p.pull-left, body > footer > div > p.pull-right{font-size: 11px !important}
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

                    <img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$model->logo ?>" height="40px" width="180px" style="margin: 0% 0% 2% -1%;width: 29%;" alt="<?= $model->site_name ?>" title="<?= $model->site_name ?>">
                </p>



            </div>

          

            <ul class="agile_forms">

                <?php 
                if (Yii::$app->user->isGuest) {

                ?>  
                <li><?= Html::a('Sign In', ['site/login'], ['class' => 'modal-form']);?></li>

                <li><?= Html::a('Sign Up', ['site/signup'], ['class' => 'modal-form']);?></li>

                <?php

                } 
                else 
                {

                    echo '<li>'. Html::beginForm(['/site/logout'], 'post'). Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',['class' => 'btn btn-default logout']) . Html::endForm() . '</li>';
                ?>
                <li>
                <?php
                if(!empty(Yii::$app->user->identity->id))
                {

                    $id = Yii::$app->user->identity->id;
                    $role = Yii::$app->user->identity->role;
                    if($role == '20'){
                        // $tutor = Tutor::findOne(['user_id' => $id]);
                        // if(!empty($tutor->created_at))
                        // {
                            echo Html::a('My dashboard', ['tutor/dashboard'],['class'=>'btn']);
                        // }
                    }elseif($role == '10'){

                        echo Html::a('My dashboard', ['student/dashboard'],['class'=>'btn']);
                    }
                }
                // else{
                //     echo "<pre>";
                //     print_r(Yii::$app->user);
                //     echo "</pre>";
                //     echo Html::a('Complete Profile', ['tutor/create']);
                // }
                ?>

                        

                </li>

                <?php

                }?>

                

            </ul>

           

            <!-- Collect the nav links, forms, and other content for toggling -->

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

                <nav class="link-effect-2" id="link-effect-2">

                    <ul class="nav navbar-nav">

                        <li class="active"><a href="/" class="effect-3">Home</a></li>

                        <li><a href="#about" class="effect-3 scroll">About Us</a></li>

                        <li><a href="#services" class="effect-3 scroll">Services</a></li>

                        <li><a href="http://www.odishatutor.com/quickrequest/create" >Quick Tutor Request</a></li>

                        <li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>

                        <li><a href="#mail" class="effect-3 scroll">Mail Us</a></li>

                    </ul>

                </nav>



            </div>

        </nav>  

        <div class="clearfix"> </div> 

    </div>

</div>

<div class="clearfix"> </div> 

<!-- <?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <?= Yii::$app->session->getFlash('success') ?>
    </div>
<?php endif; ?>


<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-error alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?> -->
<!-- banner -->

<div class="about-bottom">

    <div id="myCarousel" class="carousel slide">

      <!-- Indicators -->

      <ol class="carousel-indicators">

        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>

        <li data-target="#myCarousel" data-slide-to="1"></li>

        <li data-target="#myCarousel" data-slide-to="2"></li>

      </ol>

      <div class="carousel-inner">

        <div class="item active">

          <img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_1 ?>">

          <div class="container">

            <div class="carousel-caption">

                <h1> Find tutor near you </h1>

            </div>

          </div>

        </div>

        <div class="item">

          <img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_2 ?>">

          <div class="container">

            <div class="carousel-caption">

              

            </div>

          </div>

        </div>

        <div class="item">

          <img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$model->banner_3 ?>">

          <div class="container">

            <div class="carousel-caption">

              

            </div>

          </div>

        </div>

  </div>

      

      <!-- Controls -->

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">

        <i class="glyphicon glyphicon-chevron-left"></i>

      </a>

      <a class="right carousel-control" href="#myCarousel" data-slide="next">

        <i class="glyphicon glyphicon-chevron-right"></i>

      </a>  

    </div>

    

        <div class="col-sm-12 subscribe wow fadeInUp animated" style="visibility: visible;animation-name: fadeInUp;">

           <div id="" class="be-modules clearfix">

                <div id="" class="be-flights">

                    <!-- <form action="<?= Yii::$app->urlManager->createUrl($submitUrl) ?>" method="POST">  -->

                    	<?php $form = ActiveForm::begin(['id' => 'contact-form','method'=>'POST', 'action'=>Yii::$app->urlManager->createUrl($submitUrl),'options' => ['class' => 'form-horizontal']]); ?>  

                            <div class="journey-details clearfix">

                                <div class="tuition-type">

                                    <div id="" class="pax-details ddn-parent">

                                        <?= Html::textInput(Yii::$app->request->csrfParam,Yii::$app->request->csrfToken, ['class' => 'form-control','type'=>'hidden']) ?>

						                 <?php

						                $academicCategory=ArrayHelper::map(AcademicLevel::find()->asArray()->all(), 'id', 'name');

						                ?>



                						<?= Html::dropDownList('academic', null, $academicCategory, ['prompt'=>'-Academic Level-','class' => 'form-control','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['site/subject?id=']).'"+$(this).val(), function( data ) {$( "select#subject" ).html( data );

                 							 }); ']);

                

        									?>

                    						

                                    </div>

                                </div>

                                <div class="search-type">

                                    <div id="searchTypeDropdown" class="pax-details ddn-parent">

                                        <?php

                                        $dataPost=ArrayHelper::map(Subjects::find()->asArray()->all(), 'name', 'name');

                    					echo Html::dropDownList('subject', null, $dataPost, ['id'=>'subject','class'=>'form-control',]);



                        				?>

                                    </div>

                                </div>

                                <div class="search-type">

                                    <div class="pax-details ddn-parent">

                                     <?= Html::textInput('pincode', null, ['class'=>'form-control','placeholder'=>'pincode','style'=>['height'=>'34px']]); ?>

                                    </div>

                                </div>



                                <div class="ripple-parent">

                                    <input data-role="none" name="index" type="submit" value="Search" class="js_ripple search-btn">

                                </div>

                            </div>

						<?php ActiveForm::end() ?>

			            <div class="success-message"></div>

			            <div class="error-message"></div>

			        </div>

    			</div>

    		</div>

    	</div>

<!-- /.carousel -->

</div>



<div class="about-top" id="about">

        <h3 class="w3l-title">About Us</h3>

        <div class="w3layouts_header">

            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>

        </div>

        <div class="col-md-7 wthree-services-bottom-grids">

            <div class="wthree-services-left">

                <img src="images/ab1.jpg" alt="">

            </div>

            <div class="wthree-services-right">

                <img src="images/ab2.jpg" alt="">

            </div>

            <div class="clearfix"> </div>

        </div>

        <div class="col-md-5 wthree-about-grids">

            <h4>Welcome to Our University</h4>

            <a href="#" class="trend-w3l" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>

            <a href="#mail" class="trend-w3l scroll"><span>Get In Touch</span></a>

        </div>

        <div class="clearfix"> </div>

    

</div>

<!-- modal -->

<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        

            </div> 

            <div class="modal-body">

                <img src="images/g10.jpg" alt=""> 

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>

            </div> 

        </div>

    </div>

</div>

<!-- //modal --> 

<!-- //about -->

<!--stats-->

<div class="stats" id="stats">

    <div class="container">

        <div class="stats-info">

            <div class="col-md-3 col-xs-3 stats-grid slideanim">

                <i class="fa fa-users" aria-hidden="true"></i>

                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='12760' data-delay='.5' data-increment="1">12760</div>

                

                <h4 class="stats-info">FOREIGN FOLLOWERS</h4>

            </div>

            <div class="col-md-3 col-xs-3 stats-grid slideanim">

                <i class="fa fa-book" aria-hidden="true"></i>

                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='31000' data-delay='.5' data-increment="1">31000</div>

                

                <h4 class="stats-info">CLASSES COMPLETE</h4>

            </div>

            <div class="col-md-3 col-xs-3 stats-grid slideanim">

                <i class="fa fa-trophy" aria-hidden="true"></i>

                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?= $students ? $students : "0"; ?>' data-delay='.5' data-increment="10"><?= $students ? $students : "0"; ?></div>
            
                

                <h4 class="stats-info">STUDENTS ENROLLED</h4>

            </div>

            <div class="col-md-3 col-xs-3 stats-grid slideanim">

                    <i class="fa fa-user" aria-hidden="true"></i>

                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?= $active_teacher ? $active_teacher : "0"; ?>' data-delay='.5' data-increment="1"><?= $active_teacher ? $active_teacher : "0"; ?></div>

            

                <h4 class="stats-info">CERTIFIED TEACHERS</h4>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>

</div>

<!--//stats-->

<!-- services -->

<div class="services" id="services" >

    <div class="container">  

        <h3 class="w3l-title">Our Services</h3>

        <div class="w3layouts_header">

            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>

        </div>

        <div class="services-w3ls-row">

            <div class="col-xs-4 services-grid agileits-w3layouts">

                <span class="fa fa-graduation-cap" aria-hidden="true"></span>

                <h6>01</h6>

                <h5>Scholarship Facility</h5>

                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>

            </div>

            <div class="col-xs-4 services-grid agileits-w3layouts">

                <h6>02</h6>

                <h5>Skilled Lecturers</h5>

                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>

                <span class="fa fa-user-o grid-w3l-ser" aria-hidden="true"></span>

            </div>

            <div class="col-xs-4 services-grid agileits-w3layouts">

                <span class="fa fa-book" aria-hidden="true"></span>

                <h6>03</h6>

                <h5>Book Library & Store</h5>

                <p>Itaque earum rerum hic a sapiente delectus in auctor sapien. Itaque earum rerum hic a sapiente delectus in auctor sapien.</p>

            </div> 

            <div class="clearfix"> </div>

        </div>  

    </div>

</div>

<!-- //services -->

<!-- Gallery -->

<section class="portfolio-w3ls" id="gallery">

        <h3 class="w3l-title">Our Gallery</h3>

        <div class="w3layouts_header">

            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>

        </div>

            <?php

                foreach ($gallery as $value) {

                    ?>

                <div class="col-md-3 col-xs-3 gallery-grid gallery1">

                    <a href="images/g1.jpg" class="swipebox"><img src="<?= Yii::$app->params['mediaUrl'] .'gallery/'.$value->image ?>" class="img-responsive" alt="/">

                        <div class="textbox">

                        <h4><?= $value->caption ?></h4>

                            <p><i class="fa fa-picture-o" aria-hidden="true"></i></p>

                        </div>

                </a>

                </div>



                <?php       

                    }

                ?>

                

                

                <div class="clearfix"> </div>

</section>

<!-- //gallery -->

<!-- team -->

<!-- <div class="team-w3l" id="team">

    <div class="container">

        <h3 class="w3l-title">Our Skilled Lecturers</h3>

        <div class="w3layouts_header">

            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>

        </div>

        <div class="team-w3l-grid">

            <div class="col-md-4 col-xs-4 about-poleft t1">

                <div class="about_img"><img src="images/t1.jpg" alt="">

                  <h5>Victoria</h5>

                  <div class="about_opa">

                    <p>Professor</p>

                    <ul class="fb_icons2 text-center">

                        <li><a class="fa fa-facebook" href="#"></a></li>

                        <li><a class="fa fa-twitter" href="#"></a></li>

                        <li><a class="fa fa-google" href="#"></a></li>

                        <li><a class="fa fa-linkedin" href="#"></a></li>

                        <li><a class="fa fa-pinterest-p" href="#"></a></li>

                    </ul>

                  </div>

                </div>

            </div>

            <div class="col-md-4 col-xs-4 about-poleft t2">

                <div class="about_img"><img src="images/t2.jpg" alt="">

                  <h5>Darponia</h5>

                  <div class="about_opa">

                    <p>Senior Lecturers</p>

                    <ul class="fb_icons2 text-center">

                        <li><a class="fa fa-facebook" href="#"></a></li>

                        <li><a class="fa fa-twitter" href="#"></a></li>

                        <li><a class="fa fa-google" href="#"></a></li>

                        <li><a class="fa fa-linkedin" href="#"></a></li>

                        <li><a class="fa fa-pinterest-p" href="#"></a></li>

                    </ul>

                  </div>

                </div>

            </div>

            <div class="col-md-4 col-xs-4 about-poleft t3">

                <div class="about_img"><img src="images/t3.jpg" alt="">

                  <h5>Kylie</h5>

                  <div class="about_opa">

                    <p>Lecturers</p>

                    <ul class="fb_icons2 text-center">

                        <li><a class="fa fa-facebook" href="#"></a></li>

                        <li><a class="fa fa-twitter" href="#"></a></li>

                        <li><a class="fa fa-google" href="#"></a></li>

                        <li><a class="fa fa-linkedin" href="#"></a></li>

                        <li><a class="fa fa-pinterest-p" href="#"></a></li>

                    </ul>

                  </div>

                </div>

            </div>

            <div class="clearfix"></div>

        </div>

        <div class="team-w3l-grid grid-2-team">

            <div class="col-md-4 col-xs-4 about-poleft t1">

                <div class="about_img"><img src="images/t4.jpg" alt="">

                  <h5>Cameron</h5>

                  <div class="about_opa">

                    <p>Professor</p>

                    <ul class="fb_icons2 text-center">

                        <li><a class="fa fa-facebook" href="#"></a></li>

                        <li><a class="fa fa-twitter" href="#"></a></li>

                        <li><a class="fa fa-google" href="#"></a></li>

                        <li><a class="fa fa-linkedin" href="#"></a></li>

                        <li><a class="fa fa-pinterest-p" href="#"></a></li>

                    </ul>

                  </div>

                </div>

            </div>

            <div class="col-md-4 col-xs-4 about-poleft t2">

                <div class="about_img"><img src="images/t5.jpg" alt="">

                  <h5>Darponia</h5>

                  <div class="about_opa">

                    <p>Senior Lecturers</p>

                    <ul class="fb_icons2 text-center">

                        <li><a class="fa fa-facebook" href="#"></a></li>

                        <li><a class="fa fa-twitter" href="#"></a></li>

                        <li><a class="fa fa-google" href="#"></a></li>

                        <li><a class="fa fa-linkedin" href="#"></a></li>

                        <li><a class="fa fa-pinterest-p" href="#"></a></li>

                    </ul>

                  </div>

                </div>

            </div>

            <div class="col-md-4 col-xs-4 about-poleft t3">

                <div class="about_img"><img src="images/t6.jpg" alt="">

                  <h5>Austin</h5>

                  <div class="about_opa">

                    <p>Lecturers</p>

                    <ul class="fb_icons2 text-center">

                        <li><a class="fa fa-facebook" href="#"></a></li>

                        <li><a class="fa fa-twitter" href="#"></a></li>

                        <li><a class="fa fa-google" href="#"></a></li>

                        <li><a class="fa fa-linkedin" href="#"></a></li>

                        <li><a class="fa fa-pinterest-p" href="#"></a></li>

                    </ul>

                  </div>

                </div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>

</div> -->

<!-- //team -->

<!-- contact -->

<div id="mail" class="contact">

    <div class="container">

        <h3 class="w3l-title">Mail Us</h3>

        <div class="w3layouts_header">

            <p><i class="fa fa-graduation-cap" aria-hidden="true"></i></p>

        </div>

        <div class="agile_banner_bottom_grids">

            <div class="col-md-4 col-xs-4 w3_agile_contact_grid">

                <div class="agile_contact_grid_left">

                    <i class="fa fa-map-marker" aria-hidden="true"></i>

                </div>

                <div class="agile_contact_grid_right agilew3_contact">

                    <h4>Address</h4>

                    <p>435 City hall,</p>

                    <p>NewYork City SD092.</p>

                </div>

            </div>

            <div class="col-md-4 col-xs-4 w3_agile_contact_grid">

                <div class="agile_contact_grid_left agileits_w3layouts_left">

                    <i class="fa fa-mobile" aria-hidden="true"></i>

                </div>

                <div class="agile_contact_grid_right agileits_w3layouts_right">

                    <h4>Phone</h4>

                    <p><a href="tel:+91 9114662031">+91 9114662031</a></p>

                </div>

            </div>

            <div class="col-md-4 col-xs-4 w3_agile_contact_grid">

                <div class="agile_contact_grid_left agileits_w3layouts_left1">

                     <i class="fa fa-envelope-o" aria-hidden="true"></i>

                </div>

                <div class="agile_contact_grid_right agileits_w3layouts_right1">

                    <h4>Email</h4>

                    <p><a href="mailto:info@odishatutor.com">info@odishatutor.com</a>

                        <span><a href="mailto:care@odishatutor.com">care@odishatutor.com</a></span></p>

                </div>

                <div class="clearfix"> </div>

            </div>

            <div class="clearfix"> </div>

        </div>

        <div class="w3l-form">

            <h3 class="w3l-title">Get In Touch</h3>

            <div class="contact-grid1">

                <div class="contact-top1">

                    <?php

                   $mode =  new ContactForm();

                     $form = ActiveForm::begin(['id' => 'contact-form']); ?>



                <?= $form->field($mode, 'name')->textInput(['autofocus' => true]) ?>



                <?= $form->field($mode, 'email') ?>



                <?= $form->field($mode, 'subject') ?>



                <?= $form->field($mode, 'body')->textarea(['rows' => 6]) ?>



                <?= $form->field($mode, 'verifyCode')->widget(Captcha::className(), [

                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',

                ]) ?>



                <div class="form-group">

                    <?= Html::submitButton('Submit', ['name' => 'contact-button','type'=>'submit']) ?>

                </div>



            <?php ActiveForm::end(); ?>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- <div id="map"></div> -->

<!-- footer -->

<div class="footer">

    <div class="container">

        <div class="wthree_footer_grid_left">

            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">

                <h4>About Us</h4>

                <p>Donec viverra nunc eu neque porta, quis laoreet nisl gravida. Proin gravida, 

                    diam ut consectetur porttitor.</p>

            </div>

            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1">

                <h4>Navigation</h4>

                <ul>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#about" class="scroll">About Us</a></li>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#services" class="scroll">Services</a></li>

                    <!-- <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#team" class="scroll">Team</a></li> -->

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#gallery" class="scroll">Gallery</a></li>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#mail" class="scroll">Mail Us</a></li>

                </ul>

            </div>

            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 w3l-3">

                <h4>Others</h4>

                <ul>

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Media</a></li>

                    <!-- <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Mobile Apps</a></li> -->

                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Privacy Policy</a></li>

                </ul>

            </div>

            <div class="col-md-3 col-xs-3 wthree_footer_grid_left1 wthree_footer_grid_right1">

                <h4>Contact Us</h4>

                <ul>

                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@odishatutor.com">info@odishatutor.com</a></li>

                    <li><a href="tel:+91 9114662031">+91 9114662031</a></li>

                   

                </ul>

            </div>

            <div class="clearfix"> </div>

        </div>

    </div>

</div>

<div class="w3layouts_copy_right">

    <div class="container">

        <p> </p>

    </div>

</div>

<!-- //footer -->



<!-- js-scripts -->         

<!-- js-files -->
<!-- 
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/bootstrap.js"></script> --> <!-- Necessary-JavaScript-File-For-Bootstrap --> 

<!-- //js-files -->

<!-- Baneer-js -->





       <!-- smooth scrolling -->

<script src="js/SmoothScroll.min.js"></script>

<!-- //smooth scrolling -->

<!-- stats -->

<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //stats -->

<!-- moving-top scrolling -->

<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">

    jQuery(document).ready(function($) {

        $(".scroll").click(function(event){     

            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);

        });

    });

</script>

    <script type="text/javascript">

        $(document).ready(function() {

        /*

            var defaults = {

            containerID: 'toTop', // fading element id

            containerHoverID: 'toTopHover', // fading element hover id

            scrollSpeed: 1200,

            easingType: 'linear' 

            };

        */                              

        $().UItoTop({ easingType: 'easeOutQuart' });

        });

    </script>

    <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- //moving-top scrolling -->

<!-- gallery popup -->

<!-- <script src="js/jquery.swipebox.min.js"></script> 

<script type="text/javascript">

jQuery(function($) {

    $(".swipebox").swipebox();

});

</script> -->

<!-- gallery popup -->

<!--/script-->

    <<!-- script src="js/simplePlayer.js"></script>

            <script>

                $("document").ready(function() {

                    $("#video").simplePlayer();

                });

            </script> -->

<!-- //Baneer-js -->

<!-- Calendar -->

<script src="js/jquery-ui.js"></script>

    <script>

      $(function() {

        $( "#datepicker" ).datepicker();

     });

    </script>

<!-- //Calendar --> 



<!-- //js-scripts -->

</body>

</html>

