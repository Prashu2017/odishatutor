<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Settings;
/* @var $this yii\web\View */
/* @var $model frontend\models\Tutor */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Tutors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
$setting = Settings::findOne(1);
?>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 

<style type="text/css">
li{list-style: none}
li{list-style-type:  none}
.btn-default {
        color: #ffff;
        background-color: #000;
        border-color: #000;
    }
@media only screen and (max-width: 768px) {
    /* For mobile phones: */
    .navbar-header.navbar-right.pull.pull-right.open > ul{
        width: 35%;
       background: #E0A718;
    }
}
@media screen and (max-width: 640px) and (min-width: 360px) {
    .wrap {
        min-height: 100%;
        height: auto;
        margin: 0 auto 0px !important;
        padding: 0 0 0px !important;
    }
   .navbar-header.navbar-right.pull.pull-right.open > ul {
         width: 69% !important;
       background: #E0A718;
    }
    .navbar-header.navbar-left > p:nth-child(2){
        margin-bottom: 10%
    }
    .navbar-header.navbar-left > p:nth-child(2) > img{
            margin: -6% -2% !important;
    }
    .navbar-header.navbar-left > h1 > a{
            margin: -15% 0% 0% 23% !important;
    }
}
@media screen and (max-width: 1280px) and (min-width: 800px){
    /*.o-container {
        max-width: 1276px !important;
        margin: 0 auto;
    }*/
    /*.c-header__header, .c-header__content {
        height: 400px !important;
    }*/

    .c-avatar__img {
    width: 232px;
    height: 203px;
    margin: 161px 0px 0px 37px;
    border-radius: 0px !important;
}
}
@media screen and (max-width: 1024px) and (min-width: 768px) {
   .navbar-header.navbar-left > p:nth-child(2){
        margin-bottom: 10%
    }
    .navbar-header.navbar-left > p:nth-child(2) > img{
            margin: -6% -2% !important;
    }
    .navbar-header.navbar-left > h1 > a{
            margin: -19% 0% 0% 43% !important;
    }
}
@media (min-width: 1024px){
    /*.c-header__header, .c-header__content {
        height: 400px !important;
    }*/
    .navbar-header.navbar-left > h1 > a {
        margin: -18% 0% 0% 45% !important;
    }
    .navbar-header.navbar-right.pull.pull-right.open > ul {
         width: 21% !important;
       background: #E0A718;
    }

    .navbar-header.navbar-left > p:nth-child(2){
        margin-bottom: 10%
    }
    .navbar-header.navbar-left > p:nth-child(2) > img{
            margin: -6% -2% !important;
    }
}
@media screen and (max-width: 1440px) and (min-width: 900px) 
{
    .wrap {
        min-height: 100%;
        height: auto;
        /* margin: 0 auto -60px; */
        /* padding: 0 0 60px; */
    }
    /*.o-container {
        max-width: 1440px !important;
        margin: 0 auto;
    }
       */
   .navbar-header.navbar-right.pull.pull-right.open > ul {
         width: 25% !important;
       background: #E0A718 !important;
    }
    /*div.o-container > div > div{
        height:551px;
        margin-top: -23%;       
    }*/
    .c-header__avatar {
        margin-top: -35.8rem !important;
        text-align: right;
        position: relative;
    }
    .c-header__avatar, .c-header__top {
    top: 4vh !important;
    position: relative !important;
    }
}
@media screen and (max-width: 1366px) and (min-width: 1024px) {
    .wrap {
        min-height: 100%;
        height: auto;
        /* margin: 0 auto -60px; */
        /* padding: 0 0 60px; */
    }
   
   .navbar-header.navbar-right.pull.pull-right.open > ul {
         width: 25%;
       background: #E0A718;
    }
    /*div.o-container > div > div{
        height:551px;
        margin-top: -23%;       
    }*/
    .c-header__avatar {
        margin-top: -35.8rem !important;
        text-align: right;
        position: relative;
    }
    .c-header__avatar, .c-header__top {
    top: 4vh !important;
    position: relative !important;
}

    /*.c-header__header, .c-header__content {
        height: 551px !important;
    }*/

    /*div.o-container > div > header > div{
        height: 69% !important
    }*/

    .c-header__inner-header, .c-header__inner-content {
    position: relative;
    height: 63%;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    }
}

.c-avatar__img {
    width: 232px;
    height: 203px;
    margin: 161px 0px 0px 37px;
    border-radius: 0px !important;
}
</style> 
<div class="main_section_agile" id="home" style="height: 65px">
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
                    <img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$setting->logo ?>" height="40px" width="180px" style="margin: 0% 0% 2% -1%;width: 15%;" alt="<?= $setting->site_name ?>" title="<?= $setting->site_name ?>">
                </p>

            </div>
                <!-- <div class="clearfix"></div> -->
            
           <!--  <div class="w3layouts_header_right">
                <form action="#" method="post">
                    <input name="Search here" type="search" placeholder="Search" required="">
                    <input type="submit" value="">
                </form>
            </div> -->
            <!--  
            <ul class="agile_forms">
                <?php 
                //if (Yii::$app->user->isGuest) 
              //  {
                   ?> <li><?//= Html::a('Sign In', ['site/login'], ['class' => 'modal-form']);?></li>
                        <li><?//= Html::a('Sign Up', ['site/signup'], ['class' => 'modal-form']);?></li>
                        <?php
               // } 
               // else 
               // {
                //    echo '<li>'
           // . Html::beginForm(['/site/logout'], 'post')
           // . Html::submitButton(
          //      'Logout (' . $user = $model->firstname ? $model->firstname : Yii::$app->user->identity->username .')',
          //      ['class' => 'btn btn-link logout']
          //  )
           // . Html::endForm()
          //  . '</li>';
          //          echo '<li>'.Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) .'</li>';
           //     }
                ?>
                
            </ul> -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <!-- <li class="active"><a href="index.html" class="effect-3">Home</a></li>
                        <li><a href="#about" class="effect-3 scroll">About Us</a></li>
                        <li><a href="#services" class="effect-3 scroll">Services</a></li>
                        <li><a href="#team" class="effect-3 scroll">Team</a></li>
                        <li><a href="#gallery" class="effect-3 scroll">Gallery</a></li>
                        <li><a href="#mail" class="effect-3 scroll">Mail Us</a></li> -->
                    </ul>
                </nav>

            </div>
       <!--  </nav>   -->
        <div class="navbar-header navbar-right pull pull-right" style="float: right !important;
    width: 25%; margin: -4px -226px 0px 0px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <img src="<?= $model->url?>" class="user-image" style="width:6%" style="width: 25px;
    height: 25px; float: right; border-radius: 50%;" alt="User Image">
                      <span class="hidden-xs"><?= $model->firstname ?></span>
                    </a>
                    <ul class="dropdown-menu"  style="margin: -62px -64px 0 0;">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="<?= $model->url ?>" class="img-circle" alt="User Image" style="width: 27%;margin: 0% 0% 0% 39%;">

                        <p style="margin: 1% 0% 4% 34%;color:#FFFF0A;"><?= $model->firstname ?> - <?= $model->professional ?></p>
                        <p style="margin: -9% 0% 1% 12%;color:#000000;"><small><?php 
                                $timestamp = Yii::$app->user->identity->created_at;
                                $datetimeFormat = 'M,d Y H:i:s a';
                                $date = new \DateTime();
                                $date->setTimestamp($timestamp);
                                echo"Member since ". $date->format($datetimeFormat);
                                ?></small></p>
                      </li>
                      <!-- Menu Body -->
                     <!--  <li class="user-body">
                        <div class="row">
                          <div class="col-xs-4 text-center">
                            <a href="#">Followers</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Sales</a>
                          </div>
                          <div class="col-xs-4 text-center">
                            <a href="#">Friends</a>
                          </div>
                        </div>
                      </li> -->
                      <!-- Menu Footer-->
                      <li class="user-footer" style="padding: 2% 4%;">
                        <div class="pull-left">
                         <?= Html::a('Update Profile', ['update', 'id' => $model->id], ['class' => 'btn btn-default btn-flat']);?>
                          
                        </div>
                        <div class="pull-right">
                        <?= Html::a('Sign Out', ['site/logout'], ['class' => 'btn btn-default btn-flat']);?>
                        </div>
                      </li>
                    </ul>
              </div>
    </div>
    <!--     margin: 7%;
    background: #002147;
    border: none;
    color: lightyellow; -->
</div>
<div class="clearfix"> </div> 
        <div class="c-preloader  js-preloader">
            <div class="c-preloader__spinner  t-preloader__spinner"></div>
        </div>

        <div class="c-main-container  js-main-container">
            
            <section class="o-section o-section--header  t-section  t-section--header">
                <div class="c-header">

                    <div class="o-section__header-bg  t-section__header"></div>
                    <div class="o-section__content-bg  t-section__content"></div>

                    <div class="o-container">
                        <div class="o-section__container">

                            <header class="o-section__header  c-header__header  t-section__header">
                                <div class="c-header__inner-header">

                                    <div class="c-header__avatar">
                                        <div class="a-header  c-avatar">
                                            <img class="c-avatar__img" src="<?= $model->url; ?>" alt="" height="">
                                        </div><!-- /c-avatar -->
                                    </div><!-- /c-header-avatar -->

                                </div><!-- /c-header__inner-header -->
                            </header><!-- /o-section__header -->

                            <div class="o-section__content  c-header__content  t-section__content">
                                <div class="c-header__inner-content">

                                    <div class="c-header__top">

                                        <div class="c-header__brand">

                                            <div class="c-brand">
                                                <h1 class="c-brand__title  t-title">
                                                    <span class="c-brand__sizer">
                                                        <span class="a-header  c-brand__first-word  t-title__first-word">
                                                            <?= $firstname =  $model->firstname ? $model->firstname :"Please update your Profile"?>
                                                        <!-- </span>
                                                        <span class="a-header  c-brand__second-word  t-title__second-word"> -->
                                                            <?= $lastname =  $model->lastname ? $model->lastname :"Please update your Profile"?>
                                                        </span>
                                                    </span>
                                                </h1>
                                                <h2 class="a-header  c-brand__sub-title  t-sub-title">
                                                    <span class="c-brand__sizer">
                                                        <?= $professional =  $model->professional ? $model->professional :"Please update your Profile"?>
                                                    </span>
                                                </h2>
                                            </div><!-- /c-brand -->

                                        </div><!-- /c-header__brand -->

                                        <ul class="c-header__social-buttons  c-social-buttons">
                                            <li class="a-header">
                                                <a href="https://www.facebook.com/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fa  fa-lg  fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="a-header">
                                                <a href="https://dribbble.com/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fa  fa-lg  fa-dribbble"></i>
                                                </a>
                                            </li>
                                            <li class="a-header">
                                                <a href="https://twitter.com/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fa  fa-lg  fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul><!-- /c-header__social-buttons -->

                                    </div><!-- /c-header__top -->

                                    <div class="c-header__contact">

                                        <hr class="a-header  c-header__contact-divider" />

                                        <div class="o-grid">

                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <h4>Location</h4>
                                                        <address>
                                                            <a><?= $city_id =  $address['city'] ? $address['city'] :"Please update your Profile"?>,<?= $state =  $address['state'] ? $address['state'] :"Please update your Profile"?>, <?= $country_id =  $address['country'] ? $address['country']:"Please update your Profile"?>
                                                                </a>
                                                        </address>
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->

                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <h4>Phone</h4>
                                                        <p><a href="tel:<?= $phone =  $model->phone ? $model->phone :"Please update your Profile"?>"> <?= $phone =  $model->phone ? $model->phone :"Please update your Profile"?></a>
                                                        </p>
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->

                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <a href="#" target="_blank" class="t-link-container">
                                                            <h4>Web</h4>
                                                            <p>
                                                                <a href="https://<?= $website =  $model->website ? $model->website :"Please update your Profile"?>" target="_blank"><?= $website =  $model->website ? $model->website :"Please update your Profile"?>
                                                                </a>
                                                            </p>
                                                        </a><!-- /o-link-container -->
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->

                                            <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                                <div class="a-header  o-content">
                                                    <div class="o-content__body">
                                                        <a href="#" target="_blank" class="t-link-container">
                                                            <h4>Email</h4>
                                                            <p><a href="mailto:<?= $email =  Yii::$app->user->identity->email ? Yii::$app->user->identity->email :"Please update your Profile"?>"> <?= $email =  Yii::$app->user->identity->email ? Yii::$app->user->identity->email :"Please update your Profile"?></a>
                                                                 
                                                            </p>
                                                        </a><!-- /o-link-container -->
                                                    </div>
                                                </div><!-- /o-content -->
                                            </div><!-- /o-grid__col -->

                                        </div><!-- /o-grid -->
                                    </div><!-- /c-header__contact -->

                                </div><!-- /c-header__inner-content -->
                            </div><!-- /o-section__content -->

                        </div><!-- /o-section__container -->

                    </div><!-- /o-container -->

                </div><!-- /c-header -->
            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ############ INTRO ############# -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Intro
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    What I am all about.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  ">
                            
                            <div class="o-content">
                                <div class="c-intro">
                                    <div class="o-content__body">
                                        <p>
                                            <?= $intro = $model->describe_you ? $model->describe_you :"Please Update info" ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ########## EXPERTISE ########### -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Expertise
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Batman would be jealous.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  ">
                            
                            <div class="o-grid">

                                <div class="o-grid__col-sm-6">
                                    <div class="o-media  o-media--block  o-content">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                                01
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3>Advanced CSS</h3>
                                            <p>
                                                Cras ornare tristique elit lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.
                                            </p>
                                        </div>
                                    </div><!-- /o-media o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-media  o-media--block  o-content">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                                02
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3>Front-end Design</h3>
                                            <p>
                                                Sed adipiscing ornare risus. Morbi est est, blandit sit amet, sagittis vel, euismod vel, velit. Pellentesque egestas sem. Suspendisse commodo ullamcorper magna. Ut aliquam sollicitudin leo.
                                            </p>
                                        </div>
                                    </div><!-- /o-media o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-media  o-media--block  o-content">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                                03
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3>Ruby on Rails</h3>
                                            <p>
                                                Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Vivamus vestibulum nulla cras ornare tristique elit nec ante.
                                            </p>
                                        </div>
                                    </div><!-- /o-media o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-media  o-media--block  o-content">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                                04
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3>Object-oriented PHP</h3>
                                            <p>
                                                Morbi in sem quis dui placerat ornare. Ut aliquam sollicitudin leo. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras ante. Vivamus vestibulum nulla nec ante.
                                            </p>
                                        </div>
                                    </div><!-- /o-media o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-media  o-media--block  o-content">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                                05
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3>WordPress</h3>
                                            <p>
                                                Phasellus ultrices nulla quis nibh. Fusce lobortis lorem. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, sodales sit amet, nisi.
                                            </p>
                                        </div>
                                    </div><!-- /o-media o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-media  o-media--block  o-content">
                                        <div class="o-media__figure">
                                            <div class="c-number  t-primary-color">
                                                06
                                            </div>
                                        </div>
                                        <div class="o-media__body  o-content__body">
                                            <h3>JavaScript / jQuery</h3>
                                            <p>
                                                Cras ornare tristique elit lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id.
                                            </p>
                                        </div>
                                    </div><!-- /o-media o-content -->
                                </div><!-- /o-grid__col -->

                            </div><!-- /o-grid -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ############ SKILLS ############ -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Skills
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Progress bars, anyone?
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  ">
                            
                            <div class="o-grid">

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    80<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>Photoshop</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="80"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    75<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>Illustrator</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="75"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    70<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>Git</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="70"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    65<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>After Effects</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="65"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    90<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>Sketch</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="90"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    50<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>CSS3 Animation</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="50"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    85<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>PageSpeed Insights</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="85"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <div class="o-content">
                                        <div class="o-media  o-media--block">
                                            <div class="o-media__figure">
                                                <div class="c-number  t-primary-color">
                                                    95<small>%</small>
                                                </div>
                                            </div>
                                            <div class="o-media__body">
                                                <h3>SEO</h3>
                                            </div>
                                        </div>
                                        <div class="c-progress-bar  o-content__body  t-border-color-bg  u-mt-text">
                                            <div class="a-progress-bar  c-progress-bar__filler  t-primary-bg" data-percent="95"></div>
                                        </div>
                                    </div>
                                </div><!-- /o-grid__col -->

                            </div><!-- /o-grid -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ########## EXPERIENCE ########## -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Experience
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Yes. I&#39;ve been around.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  u-pb-0">
                            
                            <div class="a-experience-timeline  c-timeline  t-border-color">

                                <div class="c-timeline__item">
                                    <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                    <div class="o-content">
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-5">
                                                <div class="c-work__timeframe">
                                                    2015 &ndash; Present
                                                </div>
                                                <h3 class="c-work__heading">
                                                    Unicorn Incubator Inc.
                                                </h3>
                                                <h4 class="c-work__title">
                                                    Senior Interface Designer
                                                </h4>
                                                <div class="c-work__location">
                                                    Portland, OR
                                                </div>
                                            </div>
                                            <div class="o-grid__col-md-7">
                                                <p>
                                                    Consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aaliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.
                                                </p>
                                            </div>
                                        </div><!-- /o-grid -->
                                    </div><!-- /o-content -->
                                </div><!-- /c-timeline__item -->

                                <div class="c-timeline__item">
                                    <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                    <div class="o-content">
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-5">
                                                <div class="c-work__timeframe">
                                                    2013 &ndash; 2015
                                                </div>
                                                <h3 class="c-work__heading">
                                                    California Design Bureau
                                                </h3>
                                                <h4 class="c-work__title">
                                                    Creative Director
                                                </h4>
                                                <div class="c-work__location">
                                                    Cupertino, CA
                                                </div>
                                            </div>
                                            <div class="o-grid__col-md-7">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aaliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis.
                                                </p>
                                            </div>
                                        </div><!-- /o-grid -->
                                    </div><!-- /o-content -->
                                </div><!-- /c-timeline__item -->

                                <div class="c-timeline__item">
                                    <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                    <div class="o-content">
                                        <div class="o-grid">
                                            <div class="o-grid__col-md-5">
                                                <div class="c-work__timeframe">
                                                    2010 &ndash; 2013
                                                </div>
                                                <h3 class="c-work__heading">
                                                    Dreamland Creative
                                                </h3>
                                                <h4 class="c-work__title">
                                                    Front-end Designer
                                                </h4>
                                                <div class="c-work__location">
                                                    New York, NY
                                                </div>
                                            </div>
                                            <div class="o-grid__col-md-7">
                                                <p>
                                                    Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Phasellus hendrerit. Pellentesque aaliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.
                                                </p>
                                            </div>
                                        </div><!-- /o-grid -->
                                    </div><!-- /o-content -->
                                </div><!-- /c-timeline__item -->

                            </div><!-- /c-timeline -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ########### EDUCATION ########## -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Education
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Lazy isn&#39;t in my vocabulary.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  u-pt-0">
                            
                            <div class="o-content">
                                <div class="a-education-timeline  c-timeline  t-border-color  o-section__full-top-space">
                                    <div class="c-timeline__end  t-border-color"></div>

                                    <div class="c-timeline__item">
                                        <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                        <div class="o-content">
                                            <div class="o-grid">
                                                <div class="o-grid__col-md-5">
                                                    <div class="c-work__timeframe">
                                                        2008 &ndash; 2010
                                                    </div>
                                                    <h3 class="c-work__heading">
                                                        Webster Tech University
                                                    </h3>
                                                    <h4 class="c-work__title">
                                                        Master of Computer Science
                                                    </h4>
                                                    <div class="c-work__location">
                                                        Miami, FL
                                                    </div>
                                                </div>
                                                <div class="o-grid__col-md-7">
                                                    <p>
                                                        Consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aaliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh.
                                                    </p>
                                                </div>
                                            </div><!-- /o-grid -->
                                        </div><!-- /o-content -->
                                    </div><!-- /c-timeline__item -->

                                    <div class="c-timeline__item">
                                        <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                        <div class="o-content">
                                            <div class="o-grid">
                                                <div class="o-grid__col-md-5">
                                                    <div class="c-work__timeframe">
                                                        2003 &ndash; 2008
                                                    </div>
                                                    <h3 class="c-work__heading">
                                                        Ninsei University
                                                    </h3>
                                                    <h4 class="c-work__title">
                                                        Bachelor of Computer Science
                                                    </h4>
                                                    <div class="c-work__location">
                                                        Tokyo, Japan
                                                    </div>
                                                </div>
                                                <div class="o-grid__col-md-7">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aaliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero.
                                                    </p>
                                                </div>
                                            </div><!-- /o-grid -->
                                        </div><!-- /o-content -->
                                    </div><!-- /c-timeline__item -->

                                    <div class="c-timeline__item">
                                        <div class="c-timeline__point  t-timeline__point  t-primary-bg"></div>
                                        <div class="o-content">
                                            <div class="o-grid">
                                                <div class="o-grid__col-md-5">
                                                    <div class="c-work__timeframe">
                                                        2000 &ndash; 2003
                                                    </div>
                                                    <h3 class="c-work__heading">
                                                        Academy of Fine Arts
                                                    </h3>
                                                    <h4 class="c-work__title">
                                                        Master of Arts
                                                    </h4>
                                                    <div class="c-work__location">
                                                        Berlin, Germany
                                                    </div>
                                                </div>
                                                <div class="o-grid__col-md-7">
                                                    <p>
                                                        Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Phasellus hendrerit. Pellentesque aaliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales.
                                                    </p>
                                                </div>
                                            </div><!-- /o-grid -->
                                        </div><!-- /o-content -->
                                    </div><!-- /c-timeline__item -->

                                </div><!-- /c-timeline -->
                            </div><!-- /o-content -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ########### PROFILES ########### -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Profiles
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Busy as usual.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  ">
                            
                            <div class="o-grid">

                                <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <a href="http://themeforest.net/user/ruventhemes/portfolio" target="_blank" class="t-link-container">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                                    <div class="c-profile__icon">
                                                        <i class="fa  fa-lg  fa-envira"></i>
                                                    </div>
                                                </div>
                                                <div class="o-media__body  o-content__body">
                                                    <h3 class="t-link-container__item">
                                                        Themeforest
                                                    </h3>
                                                    <p>
                                                        An overview of the themes and templates that I sell.
                                                    </p>
                                                </div>
                                            </div><!-- /o-media -->
                                        </a><!-- /t-link-container -->
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <a href="https://github.com/hatra-e/" target="_blank" class="t-link-container">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                                    <div class="c-profile__icon">
                                                        <i class="fa  fa-lg  fa-github-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="o-media__body  o-content__body">
                                                    <h3 class="t-link-container__item">
                                                        GitHub
                                                    </h3>
                                                    <p>
                                                        All my open source projects for you analyze.
                                                    </p>
                                                </div>
                                            </div><!-- /o-media -->
                                        </a><!-- /t-link-container -->
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <a href="http://wordpress.com/" target="_blank" class="t-link-container">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                                    <div class="c-profile__icon">
                                                        <i class="fa  fa-lg  fa-medium"></i>
                                                    </div>
                                                </div>
                                                <div class="o-media__body  o-content__body">
                                                    <h3 class="t-link-container__item">
                                                        Medium
                                                    </h3>
                                                    <p>
                                                        Yes. I'm also a blogger and here you find my writings.
                                                    </p>
                                                </div>
                                            </div><!-- /o-media -->
                                        </a><!-- /t-link-container -->
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <a href="https://dribbble.com/" target="_blank" class="t-link-container">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                                    <div class="c-profile__icon">
                                                        <i class="fa  fa-lg  fa-dribbble"></i>
                                                    </div>
                                                </div>
                                                <div class="o-media__body  o-content__body">
                                                    <h3 class="t-link-container__item">
                                                        Dribbble
                                                    </h3>
                                                    <p>
                                                        Whenever a design is finalized, it lands right here.
                                                    </p>
                                                </div>
                                            </div><!-- /o-media -->
                                        </a><!-- /t-link-container -->
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <a href="https://www.flickr.com/" target="_blank" class="t-link-container">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                                    <div class="c-profile__icon">
                                                        <i class="fa  fa-lg  fa-flickr"></i>
                                                    </div>
                                                </div>
                                                <div class="o-media__body  o-content__body">
                                                    <h3 class="t-link-container__item">
                                                        Flickr
                                                    </h3>
                                                    <p>
                                                        A selection of photos I shot throughout the years.
                                                    </p>
                                                </div>
                                            </div><!-- /o-media -->
                                        </a><!-- /t-link-container -->
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-xl-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <a href="http://www.deviantart.com/" target="_blank" class="t-link-container">
                                            <div class="o-media  o-media--block">
                                                <div class="o-media__figure">
                                                    <div class="c-profile__icon">
                                                        <i class="fa  fa-lg  fa-deviantart"></i>
                                                    </div>
                                                </div>
                                                <div class="o-media__body  o-content__body">
                                                    <h3 class="t-link-container__item">
                                                        DeviantArt
                                                    </h3>
                                                    <p>
                                                        A place for my sketches and drawings.
                                                    </p>
                                                </div>
                                            </div><!-- /o-media -->
                                        </a><!-- /t-link-container -->
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                            </div><!-- /o-grid -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ############ HEADER ############ -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Awards
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Happy times!
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  ">
                            
                            <div class="o-grid">

                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>Unicorn Developer Award 2016</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>Website of the Year Award 2015</h3>
                                            <p>
                                                Praesent dapibus dolor sit amet, justo eget porttitor mauris sit amet. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-md-4  o-grid__col-sm-6">
                                    <div class="o-content">
                                        <hr class="c-deco-line  t-primary-color-line" />
                                        <div class="o-content__body">
                                            <h3>1st Place at CSShacker Conference</h3>
                                            <p>
                                                Lorem ipsum dolor sit amet, justo eget porttitor mauris sit amet felis. Neque id cursus faucibus.
                                            </p>
                                        </div>
                                    </div><!-- /o-content -->
                                </div><!-- /o-grid__col -->

                            </div><!-- /o-grid -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ########### PORTFOLIO ########## -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Portfolio
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Here it gets interesting.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  o-section__full-bottom-space">
                            
                            <div class="o-grid  o-grid--gallery">

                                <div class="o-grid__col-sm-6">
                                    <a class="c-image-overlay  t-image-overlay  js-lightbox" href="assets/images/portfolio/1_full.jpg" data-lightbox-hidpi="" title="Musée du Louvre" data-lightbox-gallery="portfolio">
                                        <img src="assets/images/portfolio/1_thumb.jpg" alt="">
                                        <div class="c-image-overlay__content">
                                            <h3>
                                                Musée du Louvre
                                            </h3>
                                            <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                            <p>
                                                Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <a class="c-image-overlay  t-image-overlay  js-lightbox" href="assets/images/portfolio/2_full.jpg" data-lightbox-hidpi="" title="Tunnel Effect" data-lightbox-gallery="portfolio">
                                        <img src="assets/images/portfolio/2_thumb.jpg" alt="">
                                        <div class="c-image-overlay__content">
                                            <h3>
                                                Tunnel Effect
                                            </h3>
                                            <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                            <p>
                                                Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <a class="c-image-overlay  t-image-overlay  js-lightbox" href="assets/images/portfolio/3_full.jpg" data-lightbox-hidpi="" title="New York, New York" data-lightbox-gallery="portfolio">
                                        <img src="assets/images/portfolio/3_thumb.jpg" alt="">
                                        <div class="c-image-overlay__content">
                                            <h3>
                                                New York, New York
                                            </h3>
                                            <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                            <p>
                                                Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <a class="c-image-overlay  t-image-overlay  js-lightbox" href="assets/images/portfolio/4_full.jpg" data-lightbox-hidpi="" title="Sky High" data-lightbox-gallery="portfolio">
                                        <img src="assets/images/portfolio/4_thumb.jpg" alt="">
                                        <div class="c-image-overlay__content">
                                            <h3>
                                                Sky High
                                            </h3>
                                            <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                            <p>
                                                Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <a class="c-image-overlay  t-image-overlay  js-lightbox" href="assets/images/portfolio/5_full.jpg" data-lightbox-hidpi="" title="The Eiffel Tower" data-lightbox-gallery="portfolio">
                                        <img src="assets/images/portfolio/5_thumb.jpg" alt="">
                                        <div class="c-image-overlay__content">
                                            <h3>
                                                The Eiffel Tower
                                            </h3>
                                            <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                            <p>
                                                Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- /o-grid__col -->

                                <div class="o-grid__col-sm-6">
                                    <a class="c-image-overlay  t-image-overlay  js-lightbox" href="assets/images/portfolio/6_full.jpg" data-lightbox-hidpi="" title="Reaching the Clouds" data-lightbox-gallery="portfolio">
                                        <img src="assets/images/portfolio/6_thumb.jpg" alt="">
                                        <div class="c-image-overlay__content">
                                            <h3>
                                                Reaching the Clouds
                                            </h3>
                                            <hr class="c-image-overlay__deco-line  t-image-overlay__deco-line" />
                                            <p>
                                                Fusce lacinia arcu et nulla. Nulla vitae mauris non felis mollis faucibus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            </p>
                                        </div>
                                    </a>
                                </div><!-- /o-grid__col -->

                            </div><!-- /o-grid -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ############ CLIENTS ########### -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  ">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <!-- <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Clients
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Happy people.
                                </div>
                            </div>
                        </header>

                        <div class="o-section__content  t-section__content  ">
                            
                            <ul class="c-clients  o-content">
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/bbc.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/disney.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/github.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/google.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/html5.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/kickstarter.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/youtube.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="http://example.com/" target="_blank">
                                        <img src="assets/images/clients/vimeo.png" alt="">
                                    </a>
                                </li>
                            </ul>

                        </div>

                    </div> --><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->



            <!-- ################################ -->
            <!-- ############ FOOTER ############ -->
            <!-- ################################ -->
            
            <section class="o-section  t-section  o-section--footer">

                <div class="o-section__header-bg  t-section__header"></div>
                <div class="o-section__content-bg  t-section__content"></div>

                <div class="o-container">
                    <div class="o-section__container">

                        <header class="o-section__header  t-section__header">
                            <div class="o-content">
                                <h2 class="o-section__heading">
                                    Contact
                                </h2>
                                <div class="o-content__body  o-section__description">
                                    Call me, maybe.
                                </div>
                            </div>
                        </header><!-- /o-section__header -->

                        <div class="o-section__content  t-section__content  ">
                            
                                <div class="c-footer__contact">
                                    <div class="o-grid">

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-content__body">
                                                <h4>Location</h4>
                                                <address>
                                                    Portland, OR
                                                </address>
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-content__body">
                                                <h4>Phone</h4>
                                                <p>
                                                    534.456.886
                                                </p>
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-content__body">
                                                <a href="#" target="_blank" class="t-link-container">
                                                    <h4>Web</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            ruventhemes.com
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                    <div class="o-grid__col-md-3  o-grid__col-sm-6">
                                        <div class="o-content">
                                            <div class="o-content__body">
                                                <a href="#" target="_blank" class="t-link-container">
                                                    <h4>Email</h4>
                                                    <p>
                                                        <span class="t-link-container__item--blended">
                                                            hello@example.com
                                                        </span>
                                                    </p>
                                                </a><!-- /o-link-container -->
                                            </div>
                                        </div><!-- /o-content -->
                                    </div><!-- /o-grid__col -->

                                </div><!-- /o-grid -->
                                </div><!-- /c-footer__contact -->

                                <hr class="c-footer__contact-divider" />

                                <div class="o-content">
                                    <div class="c-footer__bottom">
                                        <!-- <div class="c-footer__brand">

                                            <div class="c-brand">
                                                <div class="o-content__body">
                                                    <h1 class="c-brand__title  t-title">
                                                        <span class="c-brand__sizer  c-brand__sizer--sm">
                                                            <span class="a-footer  c-brand__first-word  t-title__first-word">
                                                                Desmond
                                                            </span>
                                                            <span class="a-footer  c-brand__second-word  t-title__second-word">
                                                                Rambowski
                                                            </span>
                                                        </span>
                                                    </h1>
                                                </div>
                                            </div>

                                        </div><!-- /c-footer__brand -->

                                        <ul class="c-footer__social-buttons  c-social-buttons  o-content__body">
                                            <li class="a-footer">
                                                <a href="https://www.facebook.com/RuvenThemes/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fa  fa-lg  fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="a-footer">
                                                <a href="https://dribbble.com/" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fa  fa-lg  fa-dribbble"></i>
                                                </a>
                                            </li>
                                            <li class="a-footer">
                                                <a href="https://twitter.com/_Ruven" target="_blank" class="c-social-button  t-social-button">
                                                    <i class="fa  fa-lg  fa-twitter"></i>
                                                </a>
                                            </li>
                                        </ul><!-- /c-footer__social-buttons -->

                                    </div><!-- /c-footer__bottom -->
                                </div><!-- /o-content -->

                        </div><!-- /o-section__content -->

                    </div><!-- /o-section__container -->
                </div><!-- /o-container -->

            </section><!-- /o-section -->
            


        </div><!-- /c-main-container -->
<script type="text/javascript">
    function cssStyle() 
    {
    if ($.cookie('sma_style') == 'light') {
        $('link[href="'+site.assets+'styles/blue.css"]').attr('disabled', 'disabled');
        $('link[href="'+site.assets+'styles/blue.css"]').remove();
        $('<link>')
        .appendTo('head')
        .attr({type: 'text/css', rel: 'stylesheet'})
        .attr('href', site.assets+'styles/light.css');
    }
    else if ($.cookie('sma_style') == 'blue') {
        $('link[href="'+site.assets+'styles/light.css"]').attr('disabled', 'disabled');
        $('link[href="'+site.assets+'styles/light.css"]').remove();
        $('<link>')
        .appendTo('head')
        .attr({type: 'text/css', rel: 'stylesheet'})
        .attr('href', ''+site.assets+'styles/blue.css');
    }
    else {
        $('link[href="'+site.assets+'styles/light.css"]').attr('disabled', 'disabled');
        $('link[href="'+site.assets+'styles/blue.css"]').attr('disabled', 'disabled');
        $('link[href="'+site.assets+'styles/light.css"]').remove();
        $('link[href="'+site.assets+'styles/blue.css"]').remove();
    }
}
</script>

        <!-- FontAwesome -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="assets/css/AdminLTE.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
        <!-- Nivo Lightbox-->
        <link rel="stylesheet" href="assets/plugins/nivo-lightbox/nivo-lightbox.css" />
        <link rel="stylesheet" href="assets/plugins/nivo-lightbox/themes/default/default.css" />

        <!-- Main CSS -->
        <link rel="stylesheet" href="/assets/css/main.css">
        
        <!-- Themes -->
        <link rel="stylesheet" href="assets/css/themes.light.css">
        <style type="text/css">
            /*
 @Author: Company Name
 @URL: http://companyname.com
 This file contains the styling for the actual theme, this
 is the file you need to edit to change the look of the
 theme.
 However we used Less script to make things easy to maintain, this is the compressed ourput, we recommend to edit the less files and then recombile the files and add the result here, if you don't like to use less you can edit this file here.
 
 This files contents are outlined below.
 01.    Theme Reset Style
 02.    Global Elements
 03.    Menu
 04.    Social
 05.    Article
 06.    Posts
 07.    Responsive
 08.    Widgets
 09.    Flexslider
 10.    Grid
*/

/* =============================================
            Theme Reset Style
============================================= */
@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:300,400,600,700,800);
* {
    margin: 0px;
    padding: 0px;
}
html,
body {
    position: relative;
    overflow-x: hidden;
}
body {
    color: #484848;
    background: #fff;
    overflow-x: hidden;
    font:400 14px/20px 'Open Sans', Arial, Helvetica, sans-serif;
}
body h1,
body h2,
body h3,
body h4,
body h5,
body h6 {
    color: #484848;
    margin: 0 0 8px;
    font-weight: 400;
    line-height: 1.5;
    font-style: normal;
    text-transform:uppercase;
    font-family: 'Montserrat', Arial, Helvetica, sans-serif;
}
h1 { font-size: 48px;}
h2 { font-size: 36px;}
h3 { font-size: 24px;}
h4 { font-size: 18px;}
h5 { font-size: 16px;}
h6 { font-size: 14px;}
h1 a,
h2 a,
h3 a,
h4 a,
h5 a,
h6 a { color: #484848;}
p a {}
p a:hover {text-decoration:underline;}
p {
    letter-spacing: normal;
    line-height: 20px;
    margin: 0 0 20px;
}
a {text-decoration: none;}
a:hover, a:focus, a:active {
    outline: none;
    text-decoration: none;
}
ul { margin: 0; }
figure {
    margin-bottom: 6px;
    position: relative;
}
img {
    height: auto;
    max-width: 100%;
}
strong { color: #414141; }
iframe {
    border: none;
    float: left;
    width: 100%;
}
.wp-caption,
.wp-caption-text,
.gallery-caption,
.bypostauthor {}
.wp-caption.alignleft,
.wp-caption.alignnone { width: 100%; }
button { border: none; }
textarea,
select,
.tg-select select,
.form-control,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input {
    color: #484848;
    outline: none;
    height: 50px;
    background:#fff;
    font-size: 14px;
    border-radius: 0;
    box-shadow: none;
    line-height: 20px;
    padding: 15px 20px;
    display: inline-block;
    vertical-align: middle;
    border: 1px solid #ddd;
    text-transform: capitalize;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-group{ margin:0 0 20px;}
.form-control::-moz-placeholder{
    text-transform: capitalize;
    color: #999;
}
.form-control:focus::-moz-placeholder,
input:focus,
.select select:focus,
.form-control:focus{
    color: #484848;
    border-color: #000;
    box-shadow:none !important;
}
/*======================
         Select         
======================*/
.tg-select{
    color:999;
    width: 100%;
    float:left;
    position: relative;
    text-transform:capitalize;
}
.tg-select:after{
    content: '\f107';
    top: 50%;
    right: 15px;
    z-index: 2;
    width: 13px;
    color:#484848;
    display: block;
    font-size: 18px;
    margin-top: -5px;
    line-height: 10px;
    position: absolute;
    text-align: center;
    font-family: 'FontAwesome';
}
.tg-select select {
    width: 100%;
    z-index: 1;
    color:#999;
    height:50px;
    padding:15px;
    line-height:20px;
    position: relative;
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    text-transform:capitalize;
}
.tg-select select option:first-child{color:#999;}
.tg-select select option{color:#484848;}
/*======================
        CheckBox        
======================*/
.tg-radio,
.tg-radio label,
.tg-checkbox,
.tg-checkbox label{
    width: 100%;
    float: left;
    margin:0;
    position: relative;
}
.tg-radio label,
.tg-checkbox label{
    cursor:pointer;
    display:block;
    padding:0 0 0 20px;
}
.tg-radio input[type=radio],
.tg-checkbox input[type=checkbox] { display:none; }
.tg-checkbox input[type=checkbox] + label:before {
    top: 2px;
    left: 0;
    content: '';
    width: 12px;
    height: 12px;
    color: #c1c1c1;
    background: #fff;
    font-size: 9px;
    line-height: 10px;
    border-radius: 3px;
    position: absolute;
    text-align: center;
    font-family:'FontAwesome';
    border: 1px solid #c1c1c1;
    -webkit-box-shadow:inset 0 0 3px 0 #ccc;
    box-shadow:inset 0 0 3px 0 #ccc;
}
.tg-checkbox input[type=checkbox]:checked + label:before {content:'\f00c';}
.tg-radio input[type=radio] + label:before{
    top: 3px;
    left: 5px;
    content:'';
    width: 12px;
    height: 12px;
    border-radius: 50%;
    position: absolute;
    border: 2px solid #999;
}
.tg-radio input[type=radio] + label:after{
    top: 7px;
    left: 9px;
    content:'';
    width: 4px;
    height: 4px;
    opacity: 0;
    background: #000;
    border-radius: 50%;
    position: absolute;
    visibility: hidden;
}
.tg-radio input[type=radio]:checked + label{ color:#484848; }
.tg-radio input[type=radio]:checked + label:after{
    opacity: 1;
    visibility: visible;
}
.tg-radio input[type=radio]:checked + label:before{border-color: #000;}
/*=======================
    IOS Style CheckBox
=======================*/
.tg-iosstylcheckbox{
    width:24px;
    float:right;
    margin: 3px 0;
    position:relative;
}
.tg-iosstylcheckbox input[type=checkbox],
.tg-iosstylcheckbox input[type=checkbox]:active {display:none;}
.tg-iosstylcheckbox label {
    margin:0;
    width: 100%;
    height: 14px;
    display: block;
    overflow:hidden;
    cursor: pointer;
    position: relative;
    border: 1px solid #999;
    -webkit-border-radius: 7px;
    -moz-border-radius: 7px;
    border-radius: 7px;
}
.tg-iosstylcheckbox label:before {
    top: -1px;
    left: -1px;
    z-index: 1;
    height: 14px;
    width: 14px;
    content: '';
    display: block;
    position: absolute;
    background: #f6f6f6;
    border: 1px solid #999;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
}
.tg-iosstylcheckbox input[type=checkbox]:checked + label:before {
    left: calc(100% - 13px);
    border-color: transparent;
}
label {
    color:#484848;
    display: block;
    margin-bottom: 6px;
    text-transform: capitalize;
    font:400 14px/17px 'Montserrat', Arial, Helvetica, sans-serif;
}
form p {
    float: left;
    position: relative;
    width: 100%;
}
form p span i {
    color: #474747;
    left: 16px;
    position: absolute;
    top: 13px;
}
option { padding: 5px 15px; }
li {
    line-height: 28px;
    list-style: disc inside none;
}
ul ul { margin-left: 20px; }
ol {
    float: none;
    list-style: decimal;
    padding-left: 15px;
}
ol ol { margin-left: 20px; }
ol li {
    list-style: decimal;
    width: 100%;
}
table {
    background-color: transparent;
    max-width: 100%;
}
th { text-align: left; }
table {
    margin-bottom: 15px;
    width: 100%;
}
table > thead > tr > th,
table > tbody > tr > th,
table > tfoot > tr > th,
table > thead > tr > td,
table > tbody > tr > td,
table > tfoot > tr > td {
    border-top: 1px solid #d2d2d2;
    border: 1px solid #d2d2d2;
    line-height: 2.5;
    padding-left: 3px;
    text-align: center;
    vertical-align: top;
}
table thead tr th {
    border-top: 1px solid #d2d2d2;
    text-align: center;
    text-transform: capitalize;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td { border-top: 1px solid #d2d2d2; }
table > thead > tr > th {
    border-bottom: 2px solid #d2d2d2;
    vertical-align: bottom;
}
table > caption + thead > tr:first-child > th,
table > colgroup + thead > tr:first-child > th,
table > thead:first-child > tr:first-child > th,
table > caption + thead > tr:first-child > td,
table > colgroup + thead > tr:first-child > td,
table > thead:first-child > tr:first-child > td { border-bottom: 0; }
table > tbody + tbody { border-top: 2px solid #d2d2d2; }
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td { padding: 10px 20px; }
p ins { color: #999; }
dl dd { margin-left: 20px; }
address { font-style: italic; }
/*==============================================
            Global Elements                     
==============================================*/
.tg-haslayout{
    width:100%;
    float:left;
}
.tg-main-section{padding: 80px 0;}
.tg-location-map{
    width: 100%;
    float: left;
    height: 500px;
}
.tg-btn-sm{
    padding: 0 20px;
    line-height: 30px;
}
.tg-btn{
    color: #fff;
    padding: 0 50px;
    background: #fff;
    position:relative;
    text-align:center;
    display: inline-block;
    vertical-align: middle;
    border: 2px solid #ddd;
    text-transform: uppercase;
    font:14px/46px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-btn:hover{color: #fff !important;}
.tg-btn-lg{ width: 100%;}
.tg-socialicons{
    overflow: hidden;
    list-style: none;
    text-align:center;
    line-height: 30px;
}
.tg-socialicons li{
    float: left;
    padding: 0 4px;
    line-height: inherit;
    list-style-type: none;
}
.tg-socialicons li a{
    width:30px;
    height:30px;
    color: #fff;
    display:block;
    background:#000;
    overflow:hidden;
    border-radius: 50%;
}
.tg-socialicons li.tg-facebook a{background:#3b5998;}
.tg-socialicons li.tg-twitter a{background:#55acee;}
.tg-socialicons li.tg-linkedin a{background:#007bb5;}
.tg-socialicons li.tg-googleplus a{background:#dd4b39;}
.tg-socialicons li.tg-rss a{background:#ff6600;}
.tg-socialicons li a i{
    display:block;
    font-size:13px;
    text-align:center;
    line-height:inherit;
}
.tg-socialicons li a:hover{}
.tg-verticalmiddle{
    margin: 0 -1px;
    float: none !important;
    display: inline-block;
    vertical-align: middle;
}
.tg-description {
    width: 100%;
    float: left;
}
.tg-bglight{ background:#f7f7f7;}
.tg-bgdark{ background:#373542;}
.tg-stars span,
.tg-stars{
    width:75px;
    height: 12px;
    float: left;
    line-height:12px;
    position:relative;
}
.tg-stars span:after,
.tg-stars:before {
    top: 0;
    left: 0;
    font-size: 12px;
    line-height: 12px;
    position: absolute;
    letter-spacing: 4px;
    font-family: 'FontAwesome';
    content: '\f005 \f005 \f005 \f005 \f005';
}
.tg-stars:before{
    color: #999;
    content: '\f006 \f006 \f006 \f006 \f006';
}
.tg-stars span {
    width:78%;
    overflow: hidden;
}
.tg-stars span:after{color: #fdb900 !important;}
.row.no-gutters{
    margin-right: 0;
    margin-left: 0;
}
.no-gutters > [class^="col-"],
.no-gutters > [class*="col-"],
.row.no-gutters > [class^="col-"],
.row.no-gutters > [class*="col-"]{
    padding-right: 0;
    padding-left: 0;
}
.tg-sectionhead{
    width: 100%;
    float: left;
    padding: 0 0 40px;
    text-align: center;
}
.tg-sectionhead h2{
    margin: 0;
    padding: 20px 0;
    font-size: 40px;
    line-height: 46px;
    position: relative;
    display: inline-block;
    vertical-align: middle;
    text-transform: capitalize;
}
.tg-sectionhead h2 span{display: block;}
.tg-sectionhead h2:before,
.tg-sectionhead h2:after,
.tg-sectionhead h2 span:before,
.tg-sectionhead h2 span:after{
    width: 3px;
    height: 20px;
    content: '';
    position: absolute;
    -webkit-transform: skewX(-15deg);
    -moz-transform: skewX(-15deg);
    -ms-transform: skewX(-15deg);
    -o-transform: skewX(-15deg);
    transform: skewX(-15deg);
}
.tg-sectionhead h2:before,
.tg-sectionhead h2:after{
    top: 0;
    left: 15px;
}
.tg-sectionhead h2 span:before,
.tg-sectionhead h2 span:after{
    left: 0;
    bottom: 0;
}
.tg-sectionhead h2:after{ left: 25px }
.tg-sectionhead h2 span:after{left: 10px;}
.tg-sectionhead .tg-description{padding: 40px 0 0;}
.tg-sectionhead .tg-description p{margin: 0;}
.tg-usericon{
    color:#fff;
    width:22px;
    float: left;
    font-size:12px;
    background:#000;
    overflow: hidden;
    line-height:22px;
    border-radius:3px;
    position:relative;
    text-align: center;
    text-transform:capitalize;
}
.tg-usericon + .tg-usericon{margin: 0 0 0 6px;}
.tg-usericonholder{
    width: 84px;
    display: block;
    font-style: normal;
}
.tg-iconvarified .tg-usericonholder{width: 77px;}
.tg-iconfeatured{background: #f58634;}
.tg-iconvarified{background: #77ab38;}
.tg-usericon i,
.tg-usericon span{
    line-height: 22px;
    display: inline-block;
    vertical-align: middle;
}
.tg-usericon i{
    width: 22px;
    text-align: center;
}
.tg-usericon span{padding: 0 8px 0 0;}
.tg-usericon:focus,
.tg-usericon:hover{color: #fff;}
.tg-usericon.tg-iconfeatured:hover{width: 84px;}
.tg-usericon.tg-iconvarified:hover{width: 77px;}
.tg-btnroundprev,
.tg-btnroundnext{
    width: 50px;
    height: 50px;
    display: block;
    background: #fff;
    overflow: hidden;
    font-size: 20px;
    line-height: 48px;
    border-radius: 50%;
    border: 1px solid #999;
}
.tg-btnroundprev i,
.tg-btnroundnext i,
.tg-btnroundprev i:before,
.tg-btnroundnext i:before{
    display: block;
    line-height: inherit;
}
.tg-btnroundprev:hover i,
.tg-btnroundnext:hover i{color: #fff;}
.tooltip{
    color: #fff;
    width: 210px;
    height: 21px;
    font-size: 10px;
    line-height: 21px;
    padding: 0 !important;
    text-transform: uppercase;
}
.tooltip.right {margin-left: -14px;}
.tooltip.top {margin-top: -30px;}
.tooltip .tooltip-inner{
    margin: 0;
    padding: 0;
    max-width: 100%;
    border-radius:0;
    width: 100% !important;
}
.tooltip.right .tooltip-arrow{
    top: 100%;
    left: 0 !important;
    border-top-color: #f58634;
    border-width: 10px 7px 0 0;
    margin: -3px 0 0 !important;
    border-right-color: transparent;
}
.tg-leftalign{text-align: left;}
.tg-leftalign h2{display: block;}
.tg-icon{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-icon i{
    display: block;
    font-size: 30px;
    line-height: 26px;
    text-align: center;
}
.tg-title{
    width: 100%;
    float: left;
}
.tg-title h3{
    margin: 0;
    font-size: 20px;
    line-height: 20px;
    position: relative;
    text-transform: capitalize;
}
.tg-title.tg-icon{text-align: left;}
.tg-title.tg-icon h3{padding: 0 0 0 30px;}
.tg-title.tg-icon h3:before{
    top: 0;
    left: 0;
    position: absolute;
}
.tg-themeform{
    width:100%;
    float:left;
}
.tg-themeform fieldset{
    width:100%;
    float:left;
    margin:0;
    padding:0;
    border:0;
}
.tg-themeform fieldset .form-group{
    width:100%;
    float:left;
}
.tg-themeform fieldset textarea{
    width:100%;
    height:260px;
    float:left;
    resize:none;
}
/*==============================================
            Theme Pagination                    
==============================================*/
.tg-pagination{
    width:100%;
    float: left;
    font-size:14px;
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
    font:13px/18px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-pagination ul{
    float:right;
    margin:0;
    padding:0;
    list-style:none;
    text-align: center;
    line-height: inherit;
}
.tg-pagination ul li{
    float:left;
    margin:0 6px;
    line-height: inherit;
    list-style-type:none;
}
.tg-pagination ul li.tg-prevpage{ margin-left:0;}
.tg-pagination ul li.tg-nextpage{ margin-right:0;}
.tg-pagination ul li a{
    color:#484848;
    width:20px;
    height: 20px;
    display:block;
    text-align:center;
    position:relative;
    line-height: inherit;
    background: transparent;
    border: 1px solid transparent;
}
.tg-pagination ul li.tg-nextpage a,
.tg-pagination ul li.tg-prevpage a{border-color: #000;}
.tg-pagination ul li.tg-nextpage a i,
.tg-pagination ul li.tg-prevpage a i{
    display: block;
    line-height: 18px;
}
.tg-pagination ul li.tg-active a,
.tg-pagination ul li a:hover,
.tg-pagination ul li.tg-nextpage a:hover,
.tg-pagination ul li.tg-prevpage a:hover,
.tg-pagination ul li.tg-nextpage a:hover i,
.tg-pagination ul li.tg-prevpage a:hover i{color: #fff;}
.tg-pagination ul li.tg-nextpage a:hover,
.tg-pagination ul li.tg-prevpage a:hover{background: #000 !important;}
/*==============================================
            Theme BreadCrumb                    
==============================================*/
.tg-breadcrumb {
    margin:0;
    color: #fff;
    width: 100%;
    float: right;
    padding: 5px 0 0;
    list-style: none;
    text-align: center;
    text-transform: capitalize;
    font:14px/16px 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-breadcrumb li{
    width:auto;
    padding:0 15px;
    position:relative;
    line-height:inherit;
    list-style-type:none;
    display: inline-block;
    vertical-align: middle;
}
.tg-breadcrumb li:after{
    top:0;
    left:-3px;
    color: #fff;
    content:'\f105';
    position:absolute;
    font-family: 'FontAwesome';
}
.tg-breadcrumb li:first-child:after{display: none;}
.tg-breadcrumb li a{
    color:#fff;
    display:block;
    line-height: inherit;
}
.tg-prev,
.tg-next{
    top:0;
    right:0;
    font-size:14px;
    cursor:pointer;
    position:absolute;
}
.tg-prev span,
.tg-next span{
    color:#373542;
    display:block;
    line-height:16px;
    margin:0 14px 0 0;
}
.tg-prev{
    top:-2px;
    right:40px;
    text-align:left;
}
.tg-next{
    text-align:right;
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    transform: rotate(180deg);
}
.tg-prev span:after,
.tg-next span:after{
    content:'';
    top:50%;
    left:15px;
    width:20px;
    height:1px;
    z-index:-1;
    opacity:0;
    background:#373542;
    position:absolute;
    visibility:hidden;
}
.tg-prev:hover span:after,
.tg-next:hover span:after{
    opacity:1;
    visibility:visible;
}
.tg-prev:hover span:after,
.tg-next:hover span:after{left:3px;}
/*==============================================
            Theme Style
==============================================*/
.tg-wrapper{overflow: hidden;}
body.tg-home .tg-main{padding: 20px 0;}
.tg-main{padding: 100px 0;}
#tg-twocolumns{
    width: 100%;
    float: left;
}
#tg-content{
    z-index: 2;
    width: 100%;
    float: left;
    position: relative;
}
#tg-sidebar{
    width: 100%;
    float: left;
}
.navbar-toggle{
    border: 0;
    margin: 0;
    padding: 9px 14px;
}
.navbar-toggle .icon-bar{
    width: 16px;
    background: #fff;
}
.tg-dropdowarrow {
    top: 5px;
    z-index: 5;
    color: #fff;
    right: 15px;
    width: 21px;
    height: 21px;
    font-size: 16px;
    line-height: 21px;
    position: absolute;
    border-radius: 1px;
    text-align: center;
    cursor: pointer;
    display: none;
}
/*==============================================
            Header
==============================================*/
.tg-header{
    top:0;
    left:0;
    width:100%;
    z-index:100;
    padding:30px 15px;
    position:absolute;
}
.tg-logo{float:left;}
.tg-navigationarea{
    float:right;
    padding: 7px 0;
}
.tg-nav{
    display:inline-block;
    vertical-align:middle;
    text-transform:uppercase;
    font:14px/20px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-navigation{
    width:100%;
    float:left;
    padding:0;
}
.tg-navigation > ul{
    width:100%;
    float:left;
}
.tg-navigation ul{list-style:none;}
.tg-navigation ul li{
    position:relative;
    list-style-type:none;
}
.tg-navigation > ul > li{
    float:left;
    padding:5px 10px;
    line-height:inherit;
}
.tg-navigation ul li a{
    display:block;
    position:relative;
}
.tg-navigation > ul > li > a{
    color:#484848;
    line-height:inherit;
}
.tg-navigation > ul > li > a:before{
    top:0;
    left:0;
    width:100%;
    height:2px;
    content:'';
    opacity:0;
    visibility:hidden;
    position:absolute;
}
.tg-navigation > ul > li.tg-active > a:before,
.tg-navigation > ul > li > a:hover:before{
    top:100%;
    opacity:1;
    visibility:visible;
}
.tg-dropdownmenu{
    top:200%;
    left:0;
    margin:0;
    opacity:0;
    width:230px;
    font-size:12px;
    line-height:35px;
    background:#fff;
    visibility:hidden;
    position:absolute;
    text-transform: capitalize;
}
.tg-dropdownmenu li{
    padding:0 15px;
    position:relative;
    line-height:inherit;
}
.tg-dropdownmenu li + li{ border-top:1px solid #ddd;}
.tg-dropdownmenu li a{
    color:#999;
    line-height:inherit;
}
.tg-hasdropdown:hover > .tg-dropdownmenu{
    top:100%;
    opacity:1;
    visibility:visible;
}
.tg-hasdropdown .tg-hasdropdown:before{
    top:0;
    right:15px;
    color:#999;
    font-size:14px;
    content:'\f105';
    position:absolute;
    line-height:inherit;
    font-family:'FontAwesome';
}
.tg-dropdownmenu .tg-dropdownmenu{left: 100%;}
.tg-dropdownmenu .tg-hasdropdown:hover > .tg-dropdownmenu{top: 0;}
.tg-navigation ul li:nth-last-child(1) .tg-dropdownmenu,
.tg-navigation ul li:nth-last-child(2) .tg-dropdownmenu{
    left: auto;
    right: 0;
}
.tg-navigation ul li:nth-last-child(1) .tg-dropdownmenu .tg-dropdownmenu,
.tg-navigation ul li:nth-last-child(2) .tg-dropdownmenu .tg-dropdownmenu {
    left: auto;
    right: 100%;
}
.tg-admin{
    display:inline-block;
    vertical-align:middle;
}
body.tg-login .tg-admin{margin:0 0 0 15px;}
.tg-guest{
    width:100%;
    float:left;
    position: relative;
    margin: 0 0 0 15px;
    padding: 0 0 0 25px;
}
.tg-guest:before {
    top: 0;
    left: 0;
    color: #999;
    content: '/';
    font-size: 12px;
    line-height: 30px;
    position: absolute;
}
.tg-adminpic{
    width:30px;
    height:30px;
    float:left;
    overflow:hidden;
    margin:0 10px 0 0;
    border-radius:50%;
}
.tg-adminpic a{
    display:block;
    border-radius:50%;
}
.tg-adminpic a img{display:block;}
.tg-guest .tg-message{
    width: 100px;
    float: right;
}
.tg-guest .tg-message em,
.tg-user .tg-usermenu em{display:block;}
.tg-user .tg-usermenu em,
.tg-guest .tg-message em{font:13px/16px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-loginsinguplinks{
    width: 100%;
    float: left;
    font-size:12px;
    line-height:15px;
    position: relative;
}
.tg-dropdown{
    position: static;
    display: inline-block;
}
.tg-btndropdown{
    color:#484848;
    outline: none;
    display: block;
    background: transparent;
}
.tg-dropdownbox{
    border: 0;
    margin: 0;
    top: 100px;
    left: auto;
    opacity: 0;
    right: 80px;
    padding: 20px;
    display: block;
    background: #fff;
    border-radius: 0;
    position:absolute;
    visibility: hidden;
}
.tg-dropdownbox:before{
    width: 0;
    height: 0;
    right: 36px;
    content: '';
    bottom: 100%;
    position: absolute;
    border-bottom: 10px solid #fff;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
}
.tg-dropdownbox[aria-labelledby="tg-signin"]{ width: 310px; }
.tg-dropdownbox[aria-labelledby="tg-signup"]{ width: 610px; }
.tg-dropdown.open .tg-dropdownbox{
    top: 50px;
    opacity: 1;
    visibility: visible;
}
.tg-dropdownbox h2{
    margin: 0 0 30px;
    font-size: 16px;
    line-height: 19px;
    text-transform: capitalize;
}
.tg-form{
    width: 100%;
    float: left;
}
.tg-form fieldset{
    width: 100%;
    float: left;
    padding: 0;
    margin: 0;
    border: 0;
}
.tg-form fieldset .form-group:last-child{ margin: 0; }
.tg-form fieldset .form-control{ width: 100%; }
.tg-form fieldset .tg-btn{ padding: 0 30px; }
.tg-forgotpassword{
    float: right;
    font-size: 14px;
    color: #55acee;
    margin: 18px 0;
}
.tg-form.tg-formsignup fieldset .form-group{
    width: 100%;
    float: left;
    margin: 0 0 20px;
}
.tg-radiobox{
    width: 100%;
    float: left;
    margin: 0 0 20px;
    padding: 0 0 20px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}
.tg-joinustitle,
.tg-joinus{
    display: inline-block;
    vertical-align: middle;
}
.tg-joinustitle{
    text-transform: capitalize;
    font:14px/17px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-joinus .tg-radio{
    width: auto;
    float: none;
    display: inline-block;
    vertical-align: middle;
}
.tg-joinus .tg-radio label{
    color: #999;
    font:14px/17px 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-form.tg-formsignup p{
    margin: 0;
    color: #999;
}
.tg-form.tg-formsignup p a{ color: #55acee; }
.tg-checkboxbox{
    width: 100%;
    float: left;
    padding: 15px;
    border-radius: 3px;
    background: #f9f9f9;
    border: 1px solid #ddd;
}
.tg-checkboxbox .tg-checkbox{
    width: auto;
    margin: 16px 0;
}
.tg-checkboxbox .tg-checkbox input[type=checkbox] + label:before {
    top: 0;
    width: 28px;
    height: 28px;
    font-size: 16px;
    line-height: 24px;
    border: 2px solid #c1c1c1;
}
.tg-checkboxbox .tg-checkbox label{
    text-transform: none;
    padding: 6px 0 5px 43px;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-refreshcaptcha{float: right;}
.tg-otheroptionforsignup{
    width: 100%;
    float: left;
    font-size: 13px;
    line-height: 13px;
    margin: 30px 0 0;
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
}
.tg-signinoption{
    clear: both;
    margin: -5px;
    padding: 0 0 20px;
    overflow: hidden;
    list-style: none;
}
.tg-signinoption li{
    width: 50%;
    float: left;
    padding: 5px;
    line-height: inherit;
    list-style-type: none;
}
.tg-signinoption li a{
    color: #fff;
    padding: 18px;
    display: block;
    text-align: center;
    line-height: inherit;
}
.tg-signinoption li.tg-facebook a{background: #2e5894;}
.tg-signinoption li.tg-google a{background: #e04b33;}
.tg-signinoption li.tg-twitter a{background: #00adcf;}
.tg-signinoption li.tg-linkedin a{background: #2099c6;}
.tg-signinoption li a i,
.tg-signinoption li a i{
    font-style: normal;
    margin: 0 0 0 10px;
    padding: 0 0 0 10px;
    line-height: inherit;
    display: inline-block;
    vertical-align: middle;
    text-transform: capitalize;
    border-left: 1px solid #fff;
}
.tg-signinoption li a i.fa{
    border: 0;
    margin: 0;
    padding: 0;
}
.tg-alreadyhaveaccount{
    clear: both;
    padding: 20px;
    overflow: hidden;
    text-align: center;
    background: #f2f1f6;
    margin: 10px -20px -20px;
}
.tg-alreadyhaveaccount h3{
    margin: 0;
    font-size: 14px;
    line-height: 17px;
    text-transform: none;
}
.tg-alreadyhaveaccount h3 a{ color: #55acee; }
.tg-user .tg-usermenu{ margin: 7px 0; }
.tg-user .tg-usermenu em{
    position: relative;
    padding: 0 15px 0 0;
    text-transform: uppercase;
}
.tg-user .tg-usermenu em:before{
    top: 50%;
    right: 0;
    margin: -5px 0 0;
    content: '\f107';
    font-size: 14px;
    line-height: 10px;
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-dropdownbox[aria-labelledby="tg-usermenu"]{
    padding: 0;
    width: 210px;
}
.tg-dropdownbox[aria-labelledby="tg-usermenu"] time{
    display: block;
    padding: 20px;
    text-align: center;
}
.tg-dropdownbox time strong{
    display: block;
    text-transform: uppercase;
    font:400 14px/12px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-dropdownbox time strong + strong{
    color:#484848;
    font-size: 36px;
    line-height: 28px;
    padding: 5px 0 0;
    text-transform: none;
}
.tg-dropdownbox > ul{
    width: 100%;
    float: left;
    list-style: none;
    font:400 13px/35px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-dropdownbox > ul > li{
    padding: 0 20px;
    line-height: inherit;
    list-style-type: none;
    border-top: 1px solid #ddd;
}
.tg-dropdownbox > ul > li > a{
    color: #999;
    display: block;
    line-height: inherit;
}
.tg-dropdownbox > ul > li > a > i{width: 25px;}
.tg-dropdownbox > ul > li > a > i,
.tg-dropdownbox > ul > li > a > span{
    display: inline-block;
    vertical-align: middle;
}
.tg-dropdown .tg-dropdownbox[aria-labelledby="tg-usermenu"]{right: 62%;}
.tg-dropdown.open .tg-dropdownbox[aria-labelledby="tg-usermenu"]{top: 50px;}
.tg-login .tg-admin .tg-guest,
.tg-admin .tg-user{display: none;}
.tg-login .tg-admin .tg-user{
    display: block;
    position:relative;
}
/*==============================================
            Home Banner                         
==============================================*/
.tg-homebanner{
    z-index:1;
    overflow: hidden;
    position:relative;
}
.tg-bannerbg{
    width:100%;
    float:left;
    margin:0;
    z-index:1;
    background:#fff;
    position:relative;
}
.tg-homebanner .tg-bannerbg img{
    width:100%;
    height:auto;
    opacity:0.15;
    display:block;
    height: 918px;
}
.tg-bannercontent{
    top:0;
    left:0;
    z-index:2;
    width:100%;
    height:100%;
    padding: 48px 0 0;
    position:absolute;
    border-style: solid;
    border-color:#f2f1f6;
    border-width:70px 140px;
    -webkit-box-shadow:inset 0 0 100px 50px #f2f1f6;
    box-shadow:inset 0 0 100px 50px #f2f1f6;
}
.tg-bannercontent .tg-formsearch{
    height:754px;
    border:6px solid;
}
.tg-formsearch{
    width:100%;
    float:left;
    background:#fff;
}
.tg-formsearch fieldset{
    width:100%;
    float:left;
    margin:0;
    padding:0;
    border:0;
}
.tg-bannerimg{
    float:left;
    margin:-15px 0 0 50px;
}
.tg-bannerimg img{display:block;}
.tg-searchfields{
    width:55%;
    z-index: 2;
    float:right;
    padding:50px;
    position: relative;
}
.tg-searchfields .form-group{
    width: 100%;
    float: left;
}
.tg-loginbanner{
    width: 100%;
    float: left;
    margin: 10px 0 0;
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
}
.tg-box{
    width: 100%;
    float: left;
}
.tg-loginbanner .tg-box{
    position: relative;
    padding: 30px 150px 30px 30px;
}
.tg-loginbanner .tg-box h2{
    color: #fff;
    margin: 0 0 30px;
    font-size: 24px;
    line-height: 27px;
    text-transform: capitalize;
}
.tg-loginbanner .tg-description{ color: #fff; }
.tg-loginbanner .tg-description p{ margin: 0; }
.tg-loginbanner .tg-description p a{ color:#484848; }
.tg-loginbanner .tg-box img{
    bottom: 0;
    right: 25px;
    position: absolute;
}
.tg-noticeboard{
    width:100%;
    float:left;
    z-index:3;
    padding: 0 40px;
    position:relative;
    background:#f2f1f6;
    border:1px solid #ddd;
}
.tg-noticeboard .tg-box{
    overflow: hidden;
    position: relative;
    padding: 0 0 0 110px;
    font:400 14px/38px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-noticeboard .tg-box strong{
    top: 0;
    left: 0;
    color:#484848;
    position: absolute;
}
.simply-scroll-container {
    width: 100%;
    color: #999;
    height: auto;
    position: relative;
}
.simply-scroll-clip { 
    position: relative;
    overflow: hidden;
}
.simply-scroll { 
    width: 100%;
    float: left;
    margin: 0;
}
.simply-scroll .simply-scroll-clip {
    width: 100%;
    float: left;
    height: auto;
}
.simply-scroll .simply-scroll-list li {
    width: 800px;
    height: auto;
    float: left;
}
.tg-newsticker p{
    margin: 0;
    line-height: 38px;
    position: relative;
    padding: 0 40px 0 20px;
}
.tg-newsticker p a{
    position: relative;
    padding: 0 15px 0 0;
    display: inline-block;
    vertical-align: middle;
}
.tg-newsticker p:before,
.tg-newsticker p a:before{
    top: 18px;
    right: 0;
    margin: -5px 0 0;
    content: '\f101';
    font-size: 14px;
    line-height: 10px;
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-newsticker p:before{
    right: auto;
    left: 0;
}
/*==============================================
            Features                            
==============================================*/
.tg-features{
    width: 100%;
    float: left;
}
.tg-feature{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-featureicon{
    width: 96px;
    height: 81px;
    display: block;
    overflow: hidden;
    margin: 0 auto 30px;
    text-indent: -9999px;
    background: url(../images/icons/f-icon-02.png) no-repeat 0 0;
}
.tg-featureicon.tg-featureicontwo{
    width: 80px;
    background-position: -97px 0;
}
.tg-featureicon.tg-featureiconthree{
    width: 74px;
    background-position: -177px 0;
}
.tg-feature:hover .tg-featureicon.tg-featureiconone{background-position: 0 100%;}
.tg-feature:hover .tg-featureicon.tg-featureicontwo{background-position: -97px 100%;}
.tg-feature:hover .tg-featureicon.tg-featureiconthree{background-position: -177px 100%;}
.tg-feature h3{
    font-size: 28px;
    line-height: 28px;
    margin: 0 0 30px;
    text-transform: capitalize;
}
.tg-feature h3 a{display: block;}
.tg-feature .tg-description{padding: 0 0 30px;}
.tg-feature .tg-description p{margin: 0;}
.tg-feature:hover .tg-btn{background: transparent;}
/*==============================================
            Latest Jobs
==============================================*/
.tg-parallaximg{
    overflow: hidden;
    position: relative;
}
.tg-parallaximg .container{
    z-index: 2;
    position: relative;
}
.tg-parallaximg:before{
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    content: '';
    position: absolute;
    background: rgba(255, 255, 255, 0.70);
}
.tg-jobs{
    width: 100%;
    float: left;
    background: #fff;
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,0.20);
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.20);
}
.tg-job{
    width: 100%;
    float: left;
    padding: 30px;
    border-left: 4px solid #fff;
}
.tg-job + .tg-job{ border-top: 1px solid #ddd !important; }
.tg-jobhead{
    width: 100%;
    float: left;
    padding: 0 0 30px;
    position: relative;
}
.tg-priceperhour{
    top: 0;
    right:0;
    position: absolute;
    text-transform: capitalize;
    font:400 20px/20px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-priceperhour em{
    font-size: 14px;
    line-height: 14px;
    font-style: normal;
}
.tg-jobhead h3{
    margin: 0;
    font-size: 20px;
    line-height: 23px;
    text-transform: capitalize;
}
.tg-metadata,
.tg-jobsmetadata{
    width: 100%;
    float: left;
    font-size: 13px;
    list-style: none;
    line-height: 16px;
}
.tg-metadata li,
.tg-jobsmetadata li{
    float: left;
    padding: 0 15px;
    line-height: 16px;
    position: relative;
    list-style-type: none;
}
.tg-metadata li:first-child,
.tg-jobsmetadata li:first-child{padding-left: 0;}
.tg-metadata li + li:before,
.tg-jobsmetadata li + li:before{
    top: 5px;
    left: -2px;
    color: #999;
    content: '/';
    font-size: 12px;
    line-height: 11px;
    position: absolute;
}
.tg-metadata li i,
.tg-jobsmetadata li i,
.tg-metadata li a,
.tg-jobsmetadata li a,
.tg-metadata li a i,
.tg-jobsmetadata li a i{
    color:#484848;
    line-height: 16px;
    display: inline-block;
    vertical-align: middle;
}
.tg-metadata li > i,
.tg-jobsmetadata li > i{ width: 20px; }
.tg-metadata li a i,
.tg-jobsmetadata li a i.tg-like{ color: #f53434;}
.tg-jobfoot{
    width: 100%;
    float: left;
}
.tg-metadata{
    width: auto;
    float: right;
}
.tg-tags{
    float: left;
    list-style: none;
    font-size: 12px;
    line-height: 22px;
}
.tg-tags li{
    float: left;
    padding: 0 5px;
    line-height: inherit;
    list-style-type: none;
}
.tg-tags li:first-child{padding-left: 0;}
.tg-tags li a{display: block;}
.tg-tag{
    padding:0 10px; 
    color: #7c7c7a;
    font-size: 12px;
    line-height: 22px;
    background: #f2f1f6;
    text-transform: capitalize;
}
.tg-tag:hover{color: #fff;}
.tg-btns{
    width: 100%;
    float: left;
    padding: 30px 0 0;
    text-align: center;
}
/*==============================================
            Featured Tutors                     
==============================================*/
.tg-featuredtutors{
    clear: both;
    overflow: hidden;
    background: #fff;
    margin: -30px 0 0;
}
.tg-tutor{
    width: 50%;
    float: left;
    padding-top: 30px;
    padding-bottom: 30px;
    border-bottom: 1px solid #ddd;
}
.tg-tutor:nth-child(odd){padding-right: 15px;}
.tg-tutor:nth-child(even){padding-left: 15px;}
.tg-tutordp{
    float: left;
    margin: 0 20px 0 0;
    position: relative;
}
.tg-tutordp figcaption{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-tutordp figcaption .tg-usericon{
    float: none;
    display: inline-block;
    vertical-align: middle;
}
.tg-tutordp > a{
    display: block;
    margin: 0 0 10px;
}
.tg-tutordp > a img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-tutorinfo{overflow: hidden;}
.tg-tutor .tg-jobhead{padding: 0 0 20px;}
.tg-tutor .tg-priceperhour{
    font-size: 30px;
    line-height: 30px;
    text-align: right;
}
.tg-tutor .tg-priceperhour em{display: block;}
.tg-subjects{
    width: 100%;
    float: left;
    font-size: 13px;
    line-height: 14px;
    padding: 0 0 4px;
}
.tg-jobhead .tg-stars{margin: 4px 0 3px;}
/*==============================================
            Statistics Style                    
==============================================*/
.tg-statisticscounters{
    width: 100%;
    float: left;
}
.tg-counter{
    width: 33.33%;
    float: left;
    padding: 0 15px;
    min-height: 60px;
    text-align: center;
}
.tg-counter + .tg-counter{ border-left: 2px solid #000; }
.tg-counter h2{
    margin: 0;
    font-size: 50px;
    line-height: 50px;
}
.tg-counter h2 span,
.tg-counter h2 em{
    font-style: normal;
    display: inline-block;
    vertical-align: middle;
}
.tg-counter h3{
    margin: 0;
    text-transform: capitalize;
    font:400 18px/18px 'Open Sans', Arial, Helvetica, sans-serif;
}
/*==============================================
            Tuition Center Style                
==============================================*/
.tg-tuitioncentersslider .owl-item{padding: 0 15px;}
.tg-tuitioncentersslider.owl-theme .owl-controls .owl-buttons div{
    top: 50%;
    z-index: 50;
    margin: -25px 0 0;
    position: absolute;
}
.tg-tuitioncentersslider.owl-theme .owl-controls .owl-buttons div.owl-prev{left: -75px;}
.tg-tuitioncentersslider.owl-theme .owl-controls .owl-buttons div.owl-next{right: -75px;}
.tg-tuitioncenters{
    width: 100%;
    float: left;
    padding: 0 0 30px;
    border-bottom: 1px solid #ddd;
}
.tg-tuitioncenter{
    width: 100%;
    float: left;
    overflow: hidden;
}
.tg-tuitioncenterdp{
    margin: 0;
    width: 100%;
    float: left;
    overflow: hidden;
    position: relative;
}
.tg-tuitioncenterdp > a{display: block;}
.tg-tuitioncenterdp > a > img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-tuitioncenterdp figcaption{
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 10px;
    text-align: center;
    position: absolute;
    background: rgba(255, 255, 255, 0.80);
}
.tg-tuitioncenterdp figcaption .tg-usericon{
    float: none;
    display: inline-block;
    vertical-align: middle;
}
.tg-tuitioncenterinfo{
    width: 100%;
    float: left;
    padding: 20px 0 0;
}
.tg-tutioncategory{
    width: 100%;
    float: left;
    display: block;
    font-size: 13px;
    line-height: 13px;
    padding: 1px 0 3px;
}
.tg-tutioncategory i{
    font-size:13px;
    color:#484848;
    margin:0 8px 0 0;
}
.tg-tutioncategory a{
    color:#484848;
    display: inline-block;
}
/*==============================================
            Student Review Style                
==============================================*/
.tg-studentreviews,
.tg-reviewerdp{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-reviewcontent{
    width: 100%;
    float: left;
    padding: 0 0 30px;
}
.tg-reviewcontent blockquote{
    border: 0;
    width: 100%;
    float: left;
    margin: 0 0 30px;
    padding: 0 0 30px;
    text-align: center;
    position: relative;
}
.tg-reviewcontent blockquote:before{
    left: 50%;
    bottom: 0;
    content: '';
    width: 170px;
    height: 2px;
    background: #ddd;
    position: absolute;
    margin: 0 0 0 -85px;
}
blockquote,
blockquote q{font:400 italic 20px/28px 'Open Sans', Arial, Helvetica, sans-serif;}
.tg-reviewcontent h3{
    margin: 0;
    font-size: 20px;
    line-height: 20px;
    text-transform: capitalize;
}
.tg-reviewcontent .tg-metadata{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-reviewcontent .tg-metadata li{
    float: none;
    display: inline-block;
    vertical-align: middle;
}
.tg-metadata li .tg-stars{margin: 4px 0 0;}
.tg-reviewerdpslider{
    width: 60%;
    float: none;
    clear: both;
    margin: 0 auto;
    overflow: hidden;
}
.tg-reviewerdpslider .owl-item{padding: 0 5px;}
.tg-reviewerdp figure{
    margin: 0;
    width: 100%;
    float: left;
    border-bottom: 3px solid transparent;
}
.tg-reviewerdp figure img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-reviewerdpslider .owl-item figure:hover,
.tg-reviewerdpslider .owl-item.tg-active figure{padding: 0 0 7px;}
/*==============================================
            News & Trusted Style                
==============================================*/
.tg-newstrusted{
    width: 100%;
    float: left;
}
.tg-latestnews{
    width: 100%;
    float: left;
}
.tg-post{
    width: 100%;
    float: left;
}
.tg-postimg{
    margin: 0;
    width: 100%;
    float: left;
}
.tg-postimg a{display: block;}
.tg-postimg a img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-postcontent{
    width: 100%;
    float: left;
    position: relative;
    padding: 20px 80px 0;
}
.tg-postcontent:before{
    top: 0;
    left: 50px;
    width: 4px;
    height: 60px;
    content: '';
    position: absolute;
}
.tg-blogposgrid .tg-postcontent:before{background: #ddd;}
.tg-posttitle{
    width: 100%;
    float: left;
}
.tg-posttitle h3{
    margin: 0;
    width: 100%;
    float: left;
    font-size: 20px;
    line-height: 23px;
    text-transform: capitalize;
}
.tg-postcontent .tg-metadata{
    width: 100%;
    float: left;
    padding: 0 0 20px;
}
.tg-metadata li time,
.tg-metadata li time em,
.tg-metadata li time a,
.tg-metadata li a,
.tg-metadata li em{
    line-height: 16px;
    font-style: normal;
    display: inline-block;
    vertical-align: middle;
}
.tg-postcontent .tg-description p{margin: 0;}
.tg-trustedbymany{
    width: 100%;
    float: left;
}
.tg-brands{
    width: 100%;
    float: left;
}
.tg-brands figure{
    margin: 0;
    width: 50%;
    float: left;
    padding: 15px;
}
.tg-brands figure a{
    width: 100%;
    height: 150px;
    float: left;
    display: flex;
    border: 1px solid #ddd;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-brands figure a img{
    opacity: 0.50;
    display: block;
    -webkit-filter: grayscale(1);
    filter: grayscale(1);
}
.tg-brands figure a:hover img{
    opacity: 1;
    -webkit-filter: grayscale(0);
    filter: grayscale(0);
}
.tg-brandsslider .item{
    width: auto;
    float: none;
    margin: -15px;
    overflow: hidden;
}
.tg-brandsslider .owl-pagination{padding: 30px 0 0;}
/*==============================================
            Footer Style                        
==============================================*/
.tg-footer{background: #f2f1f6;}
.tg-infobox,
.tg-quicklinks{
    width: 100%;
    float: left;
    padding: 60px 0;
}
.tg-infobox{border-bottom: 1px solid #ddd;}
.tg-fcols{
    width: 100%;
    float: left;
}
.tg-fcol{
    width: 100%;
    float: left;
    padding: 0 40px;
    min-height: 200px;
}
.tg-fcol + .tg-fcol{border-left: 1px solid #ddd;}
.tg-infobox .tg-fcol{
    width: 25%;
    float: left;
    text-align: center;
}
.tg-infobox .tg-fcol:first-child{width: 50%;}
.tg-fcol .tg-logo{
    width: 220px;
    float: none;
    display: block;
    margin: 0 auto 30px;
}
.tg-fcol .tg-description{padding: 0 0 30px;}
.tg-fcol .tg-description p{margin: 0;}
.tg-fcol .tg-socialicons{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-fcol .tg-socialicons li{
    float: none;
    display: inline-block;
    vertical-align: middle;
}
.tg-fcol .tg-icon{padding: 0 0 30px;}
.tg-fcol .tg-title{padding: 0 0 30px;}
.tg-email{
    width: 100%;
    float: left;
    list-style: none;
    line-height: 17px;
}
.tg-email li{
    width: 100%;
    float: left;
    padding: 0 0 20px;
    line-height: inherit;
    list-style-type: none;
}
.tg-email li a{
    color:#484848;
    display: inline-block;
    vertical-align: middle;
}
.tg-newsletter{
    width: 100%;
    float: left;
}
.tg-newsletter fieldset{
    width: 100%;
    float: left;
    margin: 0;
    padding: 0;
    border: 0;
    position: relative;
}
.tg-newsletter fieldset .form-control{
    z-index: 1;
    width: 100%;
    float: left;
    position: relative;
    border-color: #ddd;
    background: transparent;
    padding: 15px 36px 15px 10px;
}
.tg-newsletter fieldset button{
    top: 16px;
    right: 10px;
    z-index: 2;
    font-size: 16px;
    line-height: 16px;
    position: absolute;
    background: transparent;
}
.tg-quicklinks .tg-fcol{
    width: 33.33%;
    padding: 0 15px;
}
.tg-quicklinks .tg-fcol .tg-title{padding: 0 0 20px;}
.tg-quicklinks .tg-fcol ul{
    width: 100%;
    float: left;
    font-size: 14px;
    line-height: 17px;
    list-style: none;
    text-transform: capitalize;
}
.tg-quicklinks .tg-fcol ul li{
    width: 50%;
    float: left;
    padding: 0 0 15px;
    line-height: inherit;
    list-style-type: none;
}
.tg-quicklinks .tg-fcol ul li a{
    color:#484848;
    position: relative;
    padding: 0 0 0 15px;
    display: inline-block;
    vertical-align: middle;
}
.tg-quicklinks .tg-fcol ul li a:before{
    top: 4px;
    left: 0;
    color: #999;
    content: '\f0da';
    font-size: 14px;
    line-height: 10px;
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-quicklinks .tg-fcol ul li:last-child a{padding: 0 15px 0 0;}
.tg-quicklinks .tg-fcol ul li:last-child a:before{
    left: auto;
    right: 0;
    content: '\f101';
}
.tg-quicklinks .tg-fcol ul li:hover{padding: 0 0 15px 10px;}
.tg-footerbar{
    width: 100%;
    float: left;
    padding: 20px 0;
    background: #404040;
}
.tg-footernav{
    float: left;
    text-transform: uppercase;
    font:400 13px/16px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-footernav ul{
    width: 100%;
    float: left;
    list-style: none;
    line-height: inherit;
}
.tg-footernav ul li{
    float: left;
    padding: 0 0 0 20px;
    line-height: inherit;
    list-style-type: none;
}
.tg-footernav ul li:first-child{padding: 0;}
.tg-footernav ul li a{
    color: #999;
    display: block;
    line-height: inherit;
}
.tg-copyright{
    color: #999;
    float: right;
    font:400 13px/16px 'Montserrat', Arial, Helvetica, sans-serif;
}
/*==============================================
            Jobs Page                           
==============================================*/
.tg-innerbanner{
    color: #fff;
    height: 250px;
    margin: 106px 0 0;
    border-top: 3px solid;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-innerbanner > div,
.tg-innerbanner .tg-jobhead .tg-priceperhour,
.tg-innerbanner .tg-jobhead h1,
.tg-innerbanner .tg-jobhead .tg-tutioncategory{
    width: 100%;
    text-align: left;
}
.tg-innerbanner .tg-jobhead,
.tg-innerbanner .tg-jobhead h1,
.tg-innerbanner .tg-jobsmetadata li,
.tg-innerbanner .tg-jobsmetadata li i,
.tg-innerbanner .tg-jobsmetadata li a{color: #fff;}
.tg-innerbanner .tg-jobhead h1{padding: 0;}
.tg-dashboardinnerbanner{height: 350px;}
.tg-innerbanner.tg-parallaximg:before{background: rgba(0, 0, 0, 0.50);}
.tg-innerbannercontent{
    width: 100%;
    float: left;
    text-align: center;
}
.tg-pagetitle{
    width: 100%;
    float: left;
}
.tg-pagetitle h1{
    margin: 0;
    color: #fff;
    font-size: 40px;
    line-height: 33px;
    text-transform: capitalize;
}
.tg-content .tg-jobs{box-shadow: none;}
.tg-jobsmap{
    width: 100%;
    float: left;
    margin: 0 0 30px;
    min-height: 367px;
}
.tg-jobsmap img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-activefilters{
    width: 100%;
    float: left;
    padding: 30px 0;
    border-bottom: 1px solid #ddd;
}
.tg-filtertitle{
    width: 100%;
    float: left;
}
.tg-filtertitle h2{
    margin: 0;
    font-size: 16px;
    line-height: 16px;
    text-transform: capitalize;
}
.tg-activefilters .tg-filtertitle{
    width: auto;
    padding: 7px 15px 7px 0;
}
.tg-filters{
    margin: 0;
    width: 85%;
    float: right;
}
.tg-filters .tg-btnfilter{ margin: 0 7px;}
.tg-filters .tg-btnfilter{ margin: 0 15px 0 0;}
.tg-btnfilter{
    color:#484848;
    height: 30px;
    font-size: 12px;
    line-height: 30px;
    position: relative;
    border-radius: 15px;
    background: #f2f1f6;
    display: inline-block;
    vertical-align: middle;
    padding: 0 30px 0 15px;
}
.tg-btnfilter:before{
    top: 5px;
    right: 5px;
    color: #fff;
    width: 20px;
    height: 20px;
    display: block;
    font-size: 10px;
    content: '\f00d';
    line-height: 19px;
    border-radius: 50%;
    position: absolute;
    text-align: center;
    font-family: 'FontAwesome';
}
.tg-btnfilter span{display: block;}
.tg-btnfilter span i{
    color: #7c7c7a;
    font-style: normal;
    display: inline-block;
    vertical-align: middle;
}
.tg-btnfilter:hover:before{background: #fff;}
.tg-btnfilter:hover,
.tg-btnfilter:hover span,
.tg-btnfilter:hover span i{color: #fff;}
.tg-formjobsearch{
    width: 100%;
    float: left;
    border: 1px solid #ddd;
}
.tg-formjobsearch fieldset{
    margin: 0;
    border: 0;
    width: 100%;
    float: left;
    padding: 20px;
}
.tg-formjobsearch fieldset + fieldset{border-top: 1px solid #ddd;}
.tg-widget{
    width: 100%;
    float: left;
    padding:20px;
    background:#fff;
    border:1px solid #ddd;
    margin:0 0 30px;
}
.tg-formjobsearch .tg-widget{
    margin:0;
    padding:0;
    border:0;
}
.tg-widgettitle{
    width: 100%;
    float: left;
    padding: 0 0 20px;
}
.tg-widgettitle h3{
    margin: 0;
    font-size: 14px;
    line-height: 14px;
    text-transform: capitalize;
}
.tg-widgetcontent{
    width: 100%;
    float: left;
}
.tg-widgetcontent ul{
    width:100%;
    float:left;
    text-transform:capitalize;
    list-style:none;
    line-height:17px;
}
.tg-widgetcontent ul li{
    width:100%;
    float:left;
    list-style-type:none;
    line-height:inherit;
}
.tg-widgetcontent ul li + li{padding:10px 0 0;}
.tg-widgetcontent ul li a{
    display:block;
    color:#999;
    line-height:inherit;
}
.tg-widgetcontent ul li a em{
    float:right;
    font-style:normal;
}
.tg-widgetcontent .tg-joinus{
    width: 100%;
    float: left;
    padding: 0 0 5px;
    text-align: center;
}
.tg-widgetcontent .form-group{
    width: 100%;
    float: left;
    margin: 0 0 10px;
}
.tg-widgetcontent .tg-select:after{right: 10px;}
.tg-geolocationicon{
    width: 100%;
    float: left;
    position: relative;
}
.tg-geolocationicon:before {
    top: 19px;
    right: 15px;
    z-index: 5;
    width: 13px;
    color:#484848;
    display: block;
    font-size: 16px;
    cursor: pointer;
    content: '\f05b';
    line-height: 10px;
    position: absolute;
    text-align: center;
    font-family: 'FontAwesome';
}
.tg-geolocationicon .form-control{padding-right: 40px;}
.tg-widgetcontent .tg-select select,
.tg-widgetcontent .tg-geolocationicon .form-control{
    height: 40px;
    line-height: 18px;
    border-width: 1px;
    padding: 10px;
}
.tg-widgetcontent .tg-geolocationicon:before{top: 16px;}
.tg-paddingtop{padding-top: 10px;}
.tg-filterscrollbar{
    width: 100%;
    float: left;
    height: 125px;
    overflow: hidden;
    margin: 0 0 10px;
}
.tg-filterscrollbar .tg-checkbox + .tg-checkbox{margin: 10px 0 0;}
.tg-filterscrollbar .tg-checkbox label{
    color: #999;
    font-size: 14px;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.mCSB_scrollTools{width: 3px;}
.mCSB_inside > .mCSB_container{margin-right: 10px;}
.mCSB_scrollTools .mCSB_draggerRail{
    width: 3px;
    float: right;
    background: #ddd;
    border-radius: 0;
}
.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar{border-radius: 0;}
.tg-themerangeslider{
    width: 100%;
    float: left;
    height: 3px;
    margin: 10px 0;
    border-radius: 0;
    background: #ddd;
    border: 0 !important;
}
.tg-themerangeslider .ui-slider-handle{
    top: 3px;
    width: 0;
    height: 0;
    outline: none;
    background: none;
    border-radius: 0;
    border-style: solid;
    border-width: 0 8px 8px 8px;
    border-color: transparent transparent #000 transparent;
}
.tg-themerangeslider .ui-slider-handle + .ui-slider-handle{
    top: -8px;
    margin: 0 0 0 -8px;
    border-style: solid;
    border-width: 8px 8px 0 8px;
    border-color: #000 transparent transparent transparent;
}
.tg-amountbox{
    width: 100%;
    float: left;
    margin: 15px 0 0;
}
.tg-amountbox input{
    border: 0;
    width: 100%;
    float: left;
    padding: 0;
    height: auto;
    font-size: 15px;
    line-height: 18px;
    line-height: auto;
    font:400 15px/18px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-languagesradio,
.tg-genderradio,
.tg-timeslotradio{
    width: 100%;
    float: left;
}
.tg-genderradio .tg-radio + .tg-radio,
.tg-timeslotradio .tg-radio + .tg-radio,
.tg-languagesradio .tg-radio + .tg-radio{margin: 10px 0 0;}
.tg-genderradio .tg-radio label,
.tg-timeslotradio .tg-radio label,
.tg-languagesradio .tg-radio label{
    color: #999;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-languagesradio .tg-radio label span,
.tg-genderradio .tg-radio label span{float: left;}
.tg-languagesradio .tg-radio label i,
.tg-genderradio .tg-radio label i,
.tg-ratingradio .tg-radio label i{
    float: right;
    padding: 3px 0 0;
    font-size: 12px;
    line-height: 12px;
    font-style: normal;
}
.tg-timepicker{
    width: 100px;
    float: left;
    margin: 0 0 20px;
    position: relative;
}
.tg-timepicker:nth-child(2){float: right;}
.tg-timepicker .form-control {
    z-index: 1;
    width: 100%;
    height: 40px;
    padding: 0 10px;
    line-height: 38px;
    position: relative;
}
.tg-timepicker .input-group-addon{
    top: 12px;
    right: 5px;
    border: 0;
    z-index: 2;
    padding: 0;
    width: 16px;
    height: 16px;
    border-radius: 0;
    position: absolute;
    background: transparent;
}
.bootstrap-timepicker-widget.timepicker-orient-top:after{top: -5px;}
.bootstrap-timepicker-widget.timepicker-orient-top:before{top: -6px;}
.bootstrap-timepicker-widget.dropdown-menu{
    padding: 0;
    border: 0;
    margin: 10px 0 0;
    border-radius: 0;
}
.bootstrap-timepicker-widget table td input{
    border: 0;
    padding: 0;
    width: 50px;
}
.tg-ratingradio{
    width: 100%;
    float: left;
}
.tg-ratingradio .tg-radio label{font-family: 'Open Sans', Arial, Helvetica, sans-serif;}
.tg-ratingradio .tg-radio label i{color: #999;}
.tg-ratingradio .tg-radio label .tg-stars{
    float: left;
    margin: 0 0 0 3px;
}
.tg-ratingradio .tg-radio label .tg-stars,
.tg-ratingradio .tg-radio label .tg-stars:before,
.tg-ratingradio .tg-radio label .tg-stars span,
.tg-ratingradio .tg-radio label .tg-stars span:after{
    height: 15px;
    font-size: 15px;
    line-height: 15px;
}
.tg-ratingradio .tg-radio + .tg-radio{margin: 10px 0 0;}
.tg-ratingradio .tg-radio label .tg-stars{width: 88px;}
.tg-ratingradio .tg-radio label[for="onestar"] .tg-stars span{width: 20%;}
.tg-ratingradio .tg-radio label[for="twostar"] .tg-stars span{width: 40%;}
.tg-ratingradio .tg-radio label[for="threestar"] .tg-stars span{width: 60%;}
.tg-ratingradio .tg-radio label[for="fourstar"] .tg-stars span{width: 80%;}
.tg-ratingradio .tg-radio label[for="fivestar"] .tg-stars span{width: 100%;}
.tg-ratingradio .tg-radio input[type=radio] + label:before{top: 2px;}
.tg-ratingradio .tg-radio input[type=radio] + label:after{top: 6px;}
/*==============================================
            Tutors Page                         
==============================================*/
.tg-tutorsgrid .tg-tutor{
    border: 0;
    width: 100%;
    padding: 30px 0;
}
.tg-tutorsgrid .tg-tutor + .tg-tutor{border-top: 1px solid #ddd;}
/*==============================================
            Tuition Center Page                 
==============================================*/
.tg-tuitioncentersgrid .tg-activefilters{margin: 0 0 15px;}
.tg-tuitioncentersgrid .tg-tuitioncenter{padding: 15px 0;}
.tg-tuitioncentersgrid .tg-pagination{margin: 15px 0 0;}
/*==============================================
            News Grid Page                      
==============================================*/
.tg-blogpost{
    width: 100%;
    float: left;
    margin: 0 0 15px;
}
.tg-blogposgrid .tg-post{padding: 15px 0;}
/*==============================================
            Detail Page
==============================================*/
.tg-detailpage{
    border: 0;
    padding: 0;
    margin: -255px 0 0;
}
.tg-detailpage h1{
    color: #fff;
    margin: 0 0 10px;
    font-size: 40px;
    line-height: 33px;
    padding: 0 200px 0 0;
    text-transform: capitalize;
}
.tg-detailpage .tg-jobhead{
    color: #fff;
    padding: 0 0 123px;
}
.tg-detailpage .tg-priceperhour{
    font-size: 40px;
    line-height: 33px;
}
.tg-detailpage .tg-priceperhour em{
    font-size: 20px;
    line-height: 20px;
}
.tg-detailpage .tg-metadata,
.tg-detailpage .tg-jobsmetadata{
    font-size: 16px;
    line-height: 19px;
}
.tg-detailpage .tg-jobsmetadata li i,
.tg-detailpage .tg-jobsmetadata li a,
.tg-detailpage .tg-jobsmetadata li a i{ color: #fff; }
.tg-detailpage .tg-jobsmetadata li a i.tg-like{color: #f53434;}
.tg-detailpage .tg-jobsmetadata li + li:before{
    font-size: 16px;
    line-height: 14px;
}
.tg-detailpage .tg-jobsmap{min-height: 292px;}
.tg-detailpage .tg-jobsmap{
    min-height:0;
    height: 300px;
}
.tg-contentbox{
    width: 100%;
    float: left;
    padding: 0 0 30px;
}
.tg-detailpage .tg-description p:last-child{margin: 0;}
.tg-contentbox + .tg-contentbox{
    padding: 30px 0;
    border-top: 1px solid #ddd;
}
.tg-contentbox h2{
    font-size: 20px;
    line-height: 20px;
    margin: 0 0 30px;
    text-transform: capitalize;
}
.tg-ratingsrequired{
    width: 100%;
    float: left;
    font-size: 14px;
    line-height: 20px;
}
.tg-skillsrequired{padding: 0 0 0 20px;}
.tg-skillsrequired li{
    line-height: 24px;
    list-style-position: outside;
}
.tg-ratingsrequired li{line-height: 24px;}
.tg-fullinfo{
    width: 100%;
    float: left;
    font-size: 14px;
    line-height: 20px;
    list-style: none;
}
.tg-fullinfo li{
    width: 100%;
    float: left;
    line-height: inherit;
    list-style-type: none;
}
.tg-fullinfo li:nth-child(odd){background: #f6f6f6;}
.tg-detailbox{
    width: 33.33%;
    float: left;
    padding: 15px;
}
.tg-fullinfo li .tg-detailbox:nth-child(2n+2){
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
}
.tg-fullinfo li strong,
.tg-fullinfo li span{
    font-weight: 400;
    line-height: inherit;
    display: inline-block;
    vertical-align: middle;
}
.tg-fullinfo li strong{color:#484848;}
.tg-fullinfo li span,
.tg-fullinfo li span a{ color: #7c7c7a;}
.tg-viewschart{
    width: 100%;
    float: left;
    height: 450px;
}
.tg-detailpage .tg-tags{
    clear: both;
    width: auto;
    float: none;
    margin: -5px;
    overflow: hidden;
}
.tg-detailpage .tg-tags li{ padding: 5px; }
.tg-fullinfo li{
    width: 100%;
    float: left;
    line-height: inherit;
    list-style-type: none;
}
.tg-fullinfo li:nth-child(odd){background: #f6f6f6;}
.tg-detailbox{
    width: 33.33%;
    float: left;
    padding: 15px;
}
.tg-fullinfo li .tg-detailbox:nth-child(2n+2){
    border-left: 1px solid #ddd;
    border-right: 1px solid #ddd;
}
.tg-fullinfo li strong,
.tg-fullinfo li span{
    font-weight: 400;
    line-height: inherit;
    display: inline-block;
    vertical-align: middle;
}
.tg-fullinfo li strong{color:#484848;}
.tg-fullinfo li span,
.tg-fullinfo li span a{ color: #7c7c7a;}
.tg-detailpage .tg-tags{
    clear: both;
    width: auto;
    float: none;
    margin: -5px;
    overflow: hidden;
}
.tg-detailpage .tg-tags li{ padding: 5px; }
.tg-detailpage .tg-tuitioncenterinfo .tg-jobhead{padding:0 0 30px;}
.tg-detailpage .tg-tuitioncenterinfo .tg-jobsmetadata li{
    width:auto;
    padding:0 11px;
}
.tg-detailpage .tg-tuitioncenterinfo .tg-jobsmetadata li:first-child{padding-left:0;}
.tg-detailpage .tg-tuitioncenterinfo .tg-jobsmetadata li a{
    color:#484848;
    font-size:13px;
}
.tg-address{
    width:100%;
    float:left;
    margin:0 0 20px;
    list-style:none;
}
.tg-address li{
    width:100%;
    float:left;
    line-height:normal;
    list-style-type:none;
}
.tg-address li i,
.tg-address li a{
    display:inline-block;
    vertical-align:middle;
    color:#999;
}
.tg-address li i{margin:0 7px 0 0;}
.tg-address li:last-child a{color:#55acee;}
.tg-detailpage .tg-tuitioncenterinfo .tg-address li a{display:inline-block;}
.tg-detailpage .tg-socialicons li{
    width:auto;
    padding:0 4px;
}
.tg-detailpage .tg-socialicons li a{
    color:#fff;
    line-height:30px;
}
.tg-ratingarea{
    width: 100%;
    float: left;
    padding: 10px 0;
    list-style: none;
    text-align: center;
}
.tg-ratingarea li{
    float: left;
    text-align: center;
    list-style-type: none;
}
.tg-ratingarea li + li{padding: 0 0 0 10px;}
.tg-ratingarea .tg-radio{}
.tg-ratingarea .tg-radio label{
    color: #fff;
    width: 30px;
    height: 30px;
    font-size: 14px;
    overflow: hidden;
    text-align: left;
    line-height: 28px;
    padding: 0 0 0 28px;
    border: 1px solid #ddd;
    border-radius: 15px;
    text-transform: uppercase;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-ratingarea .tg-radio input[type=radio] + label:before{
    top: 0;
    left: 0;
    border: 0;
    color: #ddd;
    width: 28px;
    height: 28px;
    content: '\f005';
    line-height: 28px;
    text-align: center;
    font-family: 'FontAwesome';
}
.tg-ratingarea .tg-radio label:after{display: none;}
.tg-ratingarea .tg-radio label:hover,
.tg-ratingarea .tg-radio input[type=radio]:checked + label{
    padding: 0 0 0 26px;
    color: #fff !important;
}
.tg-ratingarea .tg-radio label:hover:before,
.tg-ratingarea .tg-radio input[type=radio]:checked + label:before{color: #fff !important;}
.tg-ratingarea .tg-radio label[for="notsatisfide"]:hover,
.tg-ratingarea .tg-radio input[type=radio]:checked + label[for="notsatisfide"]{width: 136px;}
.tg-ratingarea .tg-radio label[for="satisfide"]:hover,
.tg-ratingarea .tg-radio input[type=radio]:checked + label[for="satisfide"]{width: 105px;}
.tg-ratingarea .tg-radio label[for="good"]:hover,
.tg-ratingarea .tg-radio input[type=radio]:checked + label[for="good"]{width: 80px;}
.tg-ratingarea .tg-radio label[for="verygood"]:hover,
.tg-ratingarea .tg-radio input[type=radio]:checked + label[for="verygood"]{width: 115px;}
.tg-ratingarea .tg-radio label[for="excellent"]:hover,
.tg-ratingarea .tg-radio input[type=radio]:checked + label[for="excellent"]{width: 110px;}
/*==============================================
            Contact Us Page
==============================================*/
.tg-contactus{
    width:100%;
    float:left;
}
.tg-formcontactus .tg-btn{float:right;}
.tg-contactmapinfo{
    width:100%;
    float:left;
    padding:80px 0;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
}
.tg-contactmapinfo .tg-jobsmap{
    height:530px;
    min-height:0;
}
.tg-contactinfo{
    width:100%;
    float:left;
}
.tg-contactinfo h2{
    font-size:24px;
    line-height:20px;
    margin:0 0 30px;
}
.tg-contactinfo .tg-address li i,
.tg-contactinfo .tg-address li a{color:#484848;}
.tg-contactinfo .tg-btn{padding:0 30px;}
/*==============================================
            404 Error Page
==============================================*/
.tg-404error{
    width:100%;
    float:left;
}
.tg-errorimg{
    width:100%;
    float:left;
    margin:0 0 80px;
}
.tg-errorimg img{
    width:auto;
    height:auto;
    display:block;
    margin:0 auto;
}
.tg-errorcontent{
    width:100%;
    float:left;
    text-align:center;
}
.tg-errorcontent h2{
    margin:0 0 40px;
    font-size:40px;
    line-height:35px;
    text-transform:capitalize;
}
.tg-errorcontent .tg-description{margin:0 0 30px;}
.tg-errorcontent .tg-description p{margin:0}
.tg-404errorsearch{
    width:100%;
    float:left;
    margin:0 0 30px;
    padding:25px 30px;
    background:#f6f6f6;
}
.tg-404errorsearch span{
    float:left;
    padding:15px 30px 15px 0;
    font-size:20px;
    line-height:20px;
}
.tg-404errorsearch .form-group{
    width:auto;
    overflow:hidden;
    margin:0;
    position:relative;
}
.tg-404errorsearch .form-group button{
    background:none;
    top:0;
    right:0;
    padding:15px 18px;
    position:absolute;
}
.tg-backhome{
    width:100%;
    float:left;
    text-align:center;
}
.tg-backhome span{
    font-size:16px;
    line-height:16px;
    margin:0 5px 0 0;
    text-transform:capitalize;
    color:#484848;
}
.tg-backhome a{
    font-size:16px;
    line-height:16px;
    color:#55acee;
    text-decoration:underline;
}
.tg-backhome a:hover{color:#55acee}
.tg-backhome span,
.tg-backhome a{
    display:inline-block;
    vertical-align:middle;
}
/*==============================================
            How It Works Page
==============================================*/
.tg-howitsworks{
    width:100%;
    float:left;
}
.tg-widgetquestions ul li a{
    padding:0 0 0 11px;
    position:relative;
}
.tg-widgetquestions ul li a:after{
    left:0;
    content:'\f105';
    font-family:'FontAwesome';
    position:absolute;
}
.tg-howitsworks .tg-contentbox:first-child{padding-top:0;}
.tg-videobox{
    width:100%;
    float:left;
    margin:0 0 30px;
}
.tg-videobox figure{
    z-index:1;
    width:100%;
    margin:0;
    position:relative;
}
.tg-videobox figure img{
    width:100%;
    height:auto;
    display:block;
}
.tg-videobox figure iframe{
    z-index:2;
    top:0;
    left:0;
    width:100%;
    height:100%;
    position:absolute;
}
.tg-howitsworks .tg-contentbox h2{
    clear:both;
    font-size:28px;
    line-height:23px;
}
.tg-workstudent{
    width:50%;
    float:left;
    margin:0 0 15px;
    list-style:none;
}
.tg-workstudent li{
    width:100%;
    float:left;
    list-style-type:none;
}
.tg-workstudent li i{margin:0 8px 0 0;}
.tg-howitsworks .tg-contentbox .tg-description p{clear:both;}
.tg-howitsworks .tg-contentbox:first-child .tg-description p:last-child{margin:0;}
.tg-howitsworks .tg-contentbox:last-child{padding-bottom:0;}
.tg-howitsworks .tg-contentbox:last-child .tg-description p{margin:0;}
/*==============================================
            News Detail Page
==============================================*/
.tg-newsdetail{
    width:100%;
    float:left;
}
.tg-newsdetail-img{
    width:100%;
    float:left;
    margin:0 0 30px;
}
.tg-newsdetail-img img{
    width:100%;
    height:auto;
    display:block;
}
.tg-postsingle{
    width:100%;
    float:left;
}
.tg-postsingle .tg-postcontent{padding:0;}
.tg-postsingle .tg-postcontent:before{display:none;}
.tg-postsingle .tg-postcontent .tg-description p{margin:0 0 30px;}
.tg-postsingle .tg-postcontent .tg-description p:nth-last-child(2){margin:0;}
.tg-postsingle .tg-postcontent blockquote{
    width:100%;
    float:left;
    margin:0;
    padding:83px;
    text-align:center;
    border:0;
    position:relative;
}
.tg-postsingle .tg-postcontent blockquote:after,
.tg-postsingle .tg-postcontent blockquote:before{
    left:50%;
    margin:0 0 0 -15px;
    position:absolute;
}
.tg-postsingle .tg-postcontent blockquote:after{
    top:30px;
    content:url(../images/left-qoute.jpg);
}
.tg-postsingle .tg-postcontent blockquote:before{
    bottom:30px;
    content:url(../images/right-qoute.jpg);
}
.tg-postsingle .tg-postcontent blockquote q{
    display:block;
    quotes:none;
    font-size:30px;
    line-height:35px;
    font-style:normal;
}
.tg-tagssocial{
    width:100%;
    float:left;
    margin:0 0 30px;
    padding:30px 0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
}
.tg-tagssocial .tg-socialicons{float:right;}
.tg-tagssocial .tg-tags{padding:4px 0;}
.tg-author{
    width:100%;
    float:left;
    padding:20px;
    background:#f6f6f6;
}
.tg-authorimg{
    float:left;
    margin:0 30px 0 0;
}
.tg-authorcontent{overflow:hidden;}
.tg-authorhead{
    width:100%;
    float:left;
    margin:0 0 23px;
}
.tg-authorname{float:left;}
.tg-authorname h3{
    font-size:16px;
    line-height:16px;
    margin:0 0 4px;
    text-transform:capitalize;
}
.tg-authorname time{
    display:block;
    font-size:13px;
    line-height:18px;
}
.tg-authorhead .tg-socialicons{float:right;}
.tg-authorcontent .tg-description p{margin:0;}
.tg-comments{
    width:100%;
    float:left;
    margin:30px 0;
    padding:30px 0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
}
.tg-comments h2{
    font-size:20px;
    line-height:18px;
    margin:0 0 30px;
}
.tg-comment{
    width:100%;
    float:left;
    list-style:none;
}
.tg-comment li{
    width:100%;
    float:left;
    list-style-type:none;
}
.tg-commenter{
    width:100%;
    float:left;
    padding:20px;
}
.tg-comment li:hover .tg-commenter{background:#f6f6f6;}
.tg-commenterimg{
    float:left;
    margin:0 30px 0 0;
}
.tg-commenterimg img{
    width:100%;
    height:auto;
    display:block;
}
.tg-commenterinfo{overflow:hidden;}
.tg-commenterinfo .tg-description p{margin:0;}
.tg-leavereviews{
    width:100%;
    float:left;
}
.tg-leavereviews h2{
    font-size:20px;
    line-height:18px;
    margin:0 0 30px;
}
.tg-formleavecomment .form-group textarea{height:190px;}
.tg-formleavecomment .tg-btn{
    float:right;
    padding:0 25px;
}
.tg-widgetsearch{
    padding:0;
    border:0;
}
.tg-searcharea{
    width:100%;
    float:left;
}
.tg-searcharea fieldset{
    width:100%;
    float:left;
    margin:0;
    padding:0;
    border:0;
}
.tg-searcharea fieldset .form-group{
    margin:0;
    position:relative;
}
.tg-searcharea fieldset .form-group:after{
    top:50%;
    right:18px;
    content:'\f002';
    margin:-10px 0 0 0;
    font-family:'FontAwesome';
    font-size:16px;
    color:#999;
    position:absolute;
}
.tg-widgetcatagories,
.tg-widgetrecentpost{
    margin:0;
    border-bottom:0;
}
.tg-widgetrecentpost .tg-description p{
    margin:0 0 15px;
    color:#999;
}
.tg-widgetrecentpost .tg-widgetcontent ul li a{clear:both;}
.tg-widgetflicker .tg-widgetcontent ul li{
    width:33.33%;
    padding:5px;
}
.tg-widgetflicker .tg-widgetcontent ul li figure{
    width:100%;
    float:left;
    margin:0;
    padding:5px;
    border:1px solid #ddd;
}
.tg-widgetflicker .tg-widgetcontent ul li figure a{
    display: block;
    position: relative;
    overflow: hidden;
}
.tg-widgetflicker .tg-widgetcontent ul li figure a img{
    width:100%;
    height:auto;
    display:block;
}
.tg-widgetflicker .tg-widgetcontent ul li figure a figcaption{
    z-index:1;
    bottom:0;
    right:0;
    content:'';
    width:0;
    height:0;
    visibility:hidden;
    opacity:0;
    background:
        -moz-linear-gradient(top,
        rgba(0,0,0,0.4) 0%,
        rgba(0,0,0,0.4) 100%);
    background:
        -webkit-linear-gradient(top,
        rgba(0,0,0,0.4) 0%,
        rgba(0,0,0,0.4) 100%);
    background:
        linear-gradient(to bottom,
        rgba(0,0,0,0.4) 0%,
        rgba(0,0,0,0.4) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66000000', endColorstr='#66000000',GradientType=0 );
    position:absolute;
}
.tg-widgetflicker .tg-widgetcontent ul li:hover figure a figcaption{
    width:100%;
    height:100%;
    visibility:visible;
    opacity:1;
}
/*==============================================
            Tution Centre Detail Page
==============================================*/
.tg-tutioncentredetail{
    width:100%;
    float:left;
}
.tg-widgettutionimage{
    margin:0;
    border-bottom:0;
}
.tg-widgetcontact .tg-address li a{display:inline-block;}
.tg-widgetcontact{
    margin:0;
    border-bottom:0;
}
.tg-tutioncentredetail .tg-widgetcontact .tg-socialicons{margin:0 0 20px;}
.tg-widgetacadmeyurl{
    margin:0;
    border-bottom:0;
}
.tg-widgetacadmeyurl a{display:block;}
.tg-widgetacadmeyurl a i{
    color:#999;
    margin:0 5px 0 0;
}
.tg-widgetacadmeyurl a em{
    color:#55acee;
    font-style:normal;
}
.tg-widgetschedule{
    margin:0;
    border-bottom:0;
}
.tg-widgetformcontact .tg-formcontactus fieldset textarea{height:140px;}
.tg-widgetformcontact .tg-formcontactus fieldset .tg-btn{
    float:left;
    padding:0 33px;
}
.tg-hounoradnawards{
    width:auto;
    clear:both;
    overflow:hidden;
    margin:-15px 0;
    padding:0 0 0 30px;
    list-style:none;
}
.tg-hounoradnawards li{
    width:100%;
    float:left;
    padding:15px 0;
    line-height:normal;
    list-style-type:none;
}
.tg-dotstyletitle{
    width:100%;
    float:left;
    margin:0 0 30px;
}
.tg-dotstyletitle h3{
    margin:0 0 10px;
    padding:0 0 0 15px;
    font-size:16px;
    line-height:14px;
    text-transform:capitalize;
    position:relative;
}
.tg-dotstyletitle h3:after{
    left: 0;
    top: 50%;
    content: '';
    width: 6px;
    height: 6px;
    margin: -3px 0 0 0;
    background: #000;
    border-radius: 50%;
    position: absolute;
}
.tg-dotstyletitle span{
    display:block;
    padding:0 0 0 15px;
    font-size:13px;
    line-height:13px;
}
.tg-hounoradnawards li .tg-description{padding:0 0 0 15px;}
.tg-tutioncentredetail .tg-tutor{
    width:100%;
    padding-left:0;
}
.tg-tutioncentredetail .tg-tutor .tg-jobhead{padding:0 0 30px;}
.tg-tutioncentredetail .tg-tutor .tg-subjects{color:#484848;}
.tg-tutioncentredetail .tg-tutor .tg-jobhead .tg-jobsmetadata li a{
    color:#484848;
    font-size:13px;
}
.tg-tutioncentredetail .tg-tutor .tg-priceperhour{
    color:#484848;
    font-size:30px;
}
.tg-tutioncentredetail .tg-tutor .tg-description{margin:0 0 20px;}
.tg-tutioncentredetail .tg-tutor:last-child {
    border-bottom: 0;
    padding-bottom: 0;
}
.tg-tutioncentredetail .tg-contentbox .tg-videobox{margin:0;}
.tg-photogallery{
    width:100%;
    float:left;
}
.tg-photogallery ul{
    width:auto;
    clear:both;
    overflow:hidden;
    margin:0 -5px;
    list-style:none;
}
.tg-photogallery ul li{
    width: 20%;
    float: left;
    padding: 5px;
    list-style-type: none;
}
.tg-photogallery ul li .tg-thumbnail{
    width: 100%;
    float: left;
    padding: 5px;
    border: 1px solid #ddd;
}
.tg-photogallery ul li .tg-thumbnail figure{
    width: 100%;
    float: left;
    margin: 0;
    overflow: hidden;
    position: relative;
}
.tg-photogallery ul li  .tg-thumbnail img {
    width: 100%;
    height: auto;
    display: block;
}
.tg-photogallery ul li figure figcaption{
    z-index:1;
    bottom:0;
    right:0;
    content:'';
    width:0;
    height:0;
    visibility:hidden;
    opacity:0;
    background:
        -moz-linear-gradient(top,
        rgba(0,0,0,0.4) 0%,
        rgba(0,0,0,0.4) 100%);
    background:
        -webkit-linear-gradient(top,
        rgba(0,0,0,0.4) 0%,
        rgba(0,0,0,0.4) 100%);
    background:
        linear-gradient(to bottom,
        rgba(0,0,0,0.4) 0%,
        rgba(0,0,0,0.4) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#66000000', endColorstr='#66000000',GradientType=0 );
    position:absolute;
}
.tg-photogallery ul li figure figcaption span{
    z-index:2;
    right:20px;
    bottom:20px;
    font-size:25px;
    line-height:25px;
    color:#fff;
    position:absolute;
}
.tg-photogallery ul li figure figcaption span:after{content:'+';}
.tg-photogallery ul li:hover figure figcaption{
    width:100%;
    height:100%;
    visibility:visible;
    opacity:1;
}
.tg-ratingbox{
    clear: both;
    padding: 35px 0;
    overflow: hidden;
    text-align: center;
    border: 1px solid #ddd;
}
.tg-ratingbox strong{
    display: block;
    padding: 0 0 15px;
    text-transform: uppercase;
    font: 18px/18px 'Montserrat', Arial, Helvetica, sans-serif;
}
.tg-ratingbox .tg-stars{
    padding: 0;
    float: none;
    display: inline-block;
}
.tg-userreviews{
    width:100%;
    float:left;
}
.tg-userreviews .tg-ratingbox{
    margin:0 0 30px;
    padding:30px;
}
.tg-averagerating{
    float:left;
}
.tg-averagerating h3{
    font-size:16px;
    line-height:14px;
    text-transform:capitalize;
    margin:0 0 10px;
}
.tg-averagerating em{
    display:block;
    margin:0 0 20px;
    font-size:100px;
    line-height:75px;
    font-style:normal;
    font-weight:300;
}
.tg-userratingbar{float:left;}
.tg-userskill{
    overflow:hidden;
    padding:0 0 0 30px;
}
.tg-skill{
    float:left;
    width:100%;
}
.tg-skill + .tg-skill{margin:20px 0 0;}
.tg-skill:hover{ cursor:pointer;}
.tg-skillname{
    float:left;
    font-size:13px;
    line-height:13px;
    text-transform:capitalize;
}
.tg-skillname .tg-skillbar span{
    position:absolute;
    top:0;
    right:0;
}
.tg-skillbox{
    overflow:hidden;
    padding:7px 15px 0;
}
.tg-skillholder{
    width:100%;
    float:left;
    background:#ddd;
}
.tg-skillbar{
    height:4px;
    float:left;
    position:relative;
    transition:none;
}
.tg-skillpercentage{
    float:right;
    display:block;
    font-size:13px;
    line-height:13px;
}
.tg-userreviews .tg-comment .tg-commenterinfo .tg-authorhead .tg-stars{float:right;}
.tg-formreview .form-group textarea{height:190px;}
.tg-formreview fieldset .tg-btn{float:right;}
.tg-form-claimreport{
    width:100%;
    float:left;
}
.tg-form-claimreport fieldset{
    width:100%;
    float:left;
    margin:0;
    padding:0;
    border:0;
}
.tg-form-claimreport .form-group textarea{
    width:100%;
    height:140px;
    float:left;
    resize:none;
}

.tg-tutordetail{
    width:100%;
    float:left;
}
.tg-tutordetail .tg-fullinfo{margin:30px 0 0;}
.tg-tutordetail .tg-widgetcontent .tg-socialicons{margin:0 0 20px;}
.tg-tutordetail .tg-widgetsocial .tg-widgetcontent .tg-socialicons{margin:0;}
.tg-widgetclaimreport .tg-filterscrollbar{margin:0 0 20px;}
.tg-widgetclaimreport .form-group textarea{
    width:100%;
    height:140px;
    float:left;
    padding:15px 10px;
    resize:none;
}
.tg-widgetclaimreport .tg-btn{padding:0 25px;}
/*==============================================
            Tutor DashBoard Style
==============================================*/
.tg-dashboard{margin: -350px 0 0;}
.tg-pagehead{overflow: hidden;}
.tg-dashboard .tg-pagehead{padding: 0 0 124px;}
.tg-pagehead .tg-jobhead h2{
    color: #fff;
    margin: 0 0 8px;
    font-size: 40px;
    line-height: 30px;
    padding: 0 60px 0 0;
    text-transform: capitalize;
}
.tg-pagehead .tg-tutorinfo{
    color: #fff;
    position: relative;
}
.tg-pagehead .tg-subjects{
    margin: 0 0 6px;
    font-size: 16px;
    line-height: 16px;
}
.tg-pagehead .tg-jobsmetadata li a{color: #fff;}
.tg-pagehead .tg-jobsmetadata{
    font-size: 16px;
    line-height: 16px;
}
.tg-pagehead .tg-stars span:after,
.tg-pagehead .tg-stars:before,
.tg-pagehead .tg-jobhead .tg-stars,
.tg-pagehead .tg-stars,
.tg-pagehead .tg-stars span{
    margin: 0;
    height: 18px;
    font-size: 18px;
    line-height: 18px;
}
.tg-pagehead .tg-stars{
    width: 100px;
    margin: 2px 0 0 !important;
}
.tg-pagehead .tg-stars span{width: 100%;}
.tg-pagehead .tg-metadata li + li:before,
.tg-pagehead .tg-jobsmetadata li + li:before{
    top: 3px;
    color: #999;
    font-size: 20px;
    line-height: 16px;
}
.tg-alertmessages{
    width: 100%;
    float: left;
    margin: 0 0 30px;
    padding: 0 0 20px;
    border-bottom: 1px solid #ddd;
}
.tg-alertmessage{
    width: 100%;
    float: left;
    color: #999;
    border: 0;
    padding: 0;
    margin: 0 0 10px;
    min-height: 42px;
    background: #fff;
    font-size: 13px;
    overflow: hidden;
    line-height: 16px;
    border-radius: 3px 3px 0 0;
    border-bottom: 2px solid #ddd;
    -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,0.20);
    box-shadow: 0 0 10px 0 rgba(0,0,0,0.20); 
}
.tg-alertmessage i{
    width: 40px;
    height: 40px;
    float: left;
    color: #fff;
    font-size: 14px;
    line-height: 40px;
    margin: 0 20px 0 0;
    text-align: center;
}
.tg-alertmessage span{
    padding: 12px 0;
    display: inline-block;
}
.tg-alertmessage span strong{text-transform: uppercase;}
.tg-alertmessage .close{
    opacity: 1;
    width: 40px;
    color: #db6460;
    display: block;
    font-size: 18px;
    line-height: 40px;
    text-align: center;
}
.tg-alertmessage.alert-success{border-color: #6cbf6d;}
.tg-alertmessage.alert-success i{background: #6cbf6d;}
.tg-alertmessage.alert-success span strong{color: #6cbf6d;}
.tg-alertmessage.alert-info{border-color: #5596ce;}
.tg-alertmessage.alert-info i{background: #5596ce;}
.tg-alertmessage.alert-info span strong{color: #5596ce;}
.tg-alertmessage.alert-warning{border-color: #f1b55f;}
.tg-alertmessage.alert-warning i{background: #f1b55f;}
.tg-alertmessage.alert-warning span strong{color: #f1b55f;}
.tg-alertmessage.alert-danger{border-color: #db6460;}
.tg-alertmessage.alert-danger i{background: #db6460;}
.tg-alertmessage.alert-danger span strong{color: #db6460;}
.tg-messages{
    width: 100%;
    float: left;
    color: #999;
    font-size: 14px;
    list-style: none;
    line-height: 17px;
    border: 1px solid #ddd;
}
.tg-messages li{
    width: 100%;
    float: left;
    line-height: inherit;
    list-style-type: none;
    padding: 16px 20px 16px 40px;
}
.tg-messages li + li{border-top: 1px solid #ddd;}
.tg-messages li:nth-child(even){background: #f6f6f6;}
.tg-messages li strong{color: #999;}
.tg-messages li strong,
.tg-messages li span,
.tg-messages li time{
    display: inline-block;
    vertical-align: middle;
}
.tg-messages li span{
    width: 60%;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.tg-messages li time{float: right;}
.tg-messages li.th-unread strong{color:#484848;}
.tg-messages li.th-unread{position: relative;}
.tg-messages li.th-unread:before{
    top: 50%;
    left: 15px;
    width: 6px;
    height: 6px;
    content: '';
    margin: -3px 0 0 0;
    border-radius: 50%;
    position: absolute;
    background: #6cbf6d;
}
.tg-favoritesadded{
    width: 100%;
    float: left;
    padding: 20px;
    text-align: center;
    border: 1px solid #ddd;
}
.tg-favoritesadded span{
    display: block;
    padding: 30px 0;
    font-size: 20px;
    font-weight:300;
    line-height: 23px;
    border-bottom: 1px solid #ddd;
}
.tg-favoritesadded span span{
    border: 0;
    padding: 0;
    font-size: 60px;
    line-height: 60px;
}
.tg-favoritesadded p{
    margin: 0;
    padding: 30px 0;
}
.tg-favoritesadded p strong{
    color:#484848;
    display: block;
}
.tg-dashboard .tg-ratingbox{padding: 30px 20px;}
.tg-dashboard .tg-averagerating{
    width: 100%;
    padding: 0 0 30px;
    margin: 0 0 30px;
    border-bottom: 1px solid #ddd;
}
.tg-dashboard .tg-userskill{
    width: 100%;
    float: left;
    padding: 0;
}
.tg-dashboard .tg-comment{
    border: 1px solid #ddd;
    border-bottom: 0;
}
.tg-dashboard .tg-commenter{position: relative;}
.tg-dashboard .tg-commenterimg{
    width: 60px;
    height: 60px;
    margin: 0 20px 0 0;
}
.tg-dashboard .tg-comment li .tg-authorhead{margin: 11px 0;}
.tg-dashboard .tg-comment li .tg-stars{
    float: right;
    height: 14px;
    font-size: 14px;
    line-height: 14px;
    margin: 0 30px 0 0 !important;
}
.tg-dashboard .tg-comment li .tg-stars span:after,
.tg-dashboard .tg-comment li .tg-stars:before,
.tg-dashboard .tg-comment li .tg-jobhead .tg-stars,
.tg-dashboard .tg-comment li .tg-stars,
.tg-dashboard .tg-comment li .tg-stars span{
    font-size: 14px;
    line-height: 14px;
}
.tg-dashboard .tg-comment li .tg-stars{width: 83px;}
.tg-dashboard .tg-comment li .tg-stars span{width: 100%;}
.tg-dashboard .tg-comment li:hover .tg-commenter{background: none;}
.tg-dashboard .tg-comment li:nth-child(even){background: #f6f6f6;}
.tg-dashboard .tg-comment li .tg-authorname time{
    color: #999;
    font-size: 13px;
    line-height: 16px;
}
.tg-btntogglecontent{
    top: 34px;
    z-index: 3;
    right: 20px;
    color: #999;
    line-height: 8px;
    position: absolute;
}
.tg-btntogglecontent i{line-height: 8px;}
.tg-viewpermonthchart{
    width: 100%;
    float: left;
    height: 310px;
}
.tg-widgetdashboard{
    width: 100%;
    float: left;
    margin: 0 0 30px;
}
.tg-widgetdashboard h3{
    margin: 0;
    color: #fff;
    width: 100%;
    float: left;
    padding: 0 20px;
    font-size: 14px;
    line-height: 50px;
    font-weight: 400;
    position: relative;
    text-transform: capitalize;
}
.tg-widgetdashboard .tg-btndashboard{
    top: 0;
    right: 0;
    color: #fff;
    width: 50px;
    height: 50px;
    display: block;
    line-height: 50px;
    position: absolute;
    text-align: center;
    background: rgba(0, 0, 0, 0.10);
}
.tg-btndashboard i{
    height: 6px;
    line-height: 6px;
}
.tg-btndashboard.tg-active i{
    -moz-transform: rotate(-180deg);
    -webkit-transform: rotate(-180deg);
    -o-transform: rotate(-180deg);
    -ms-transform: rotate(-180deg);
    transform: rotate(-180deg);
}
.tg-currentdatetime{
    width: 100%;
    float: left;
    background: #fff;
    font-size: 18px;
    line-height: 21px;
    padding:64px 20px;
    text-align: center;
    border: 1px solid #ddd;
    text-transform: uppercase;
}
.tg-currentdatetime span{display: block;}
.tg-currentdatetime em{
    display: block;
    font-size: 50px;
    line-height: 50px;
    font-style: normal;
}
.tg-dashboardnav{
    width: 100%;
    float: left;
    font-size: 14px;
    line-height: 17px;
    border: 1px solid #ddd;
    border-top: 0;
}
.tg-dashboardnav ul{
    width: 100%;
    float: left;
    list-style: none;
    line-height: inherit;
}
.tg-dashboardnav ul li{
    width: 100%;
    float: left;
    position: relative;
    line-height: inherit;
    list-style-type: none;
}
.tg-dashboardnav ul li + li{border-top: 1px solid #ddd;}
.tg-dashboardnav ul li:before{
    top: 50%;
    right: 20px;
    width: 6px;
    height: 6px;
    content: '';
    display: block;
    background: #fff;
    margin: -3px 0 0;
    border-radius: 50%;
    position: absolute;
}
.tg-dashboardnav ul li.tg-infomessage:before{background: #5596ce;}
.tg-dashboardnav ul li.tg-warningmessage:before{background: #f1b55f;}
.tg-dashboardnav ul li.tg-successmessage:before{background: #6cbf6d;}
.tg-dashboardnav ul li.tg-errormessage:before{background: #db6460;}
.tg-dashboardnav ul li a{
    color: #999;
    display: block;
    padding: 15px 20px;
}
.tg-dashboardnav ul li a i,
.tg-dashboardnav ul li a span{
    display: inline-block;
    vertical-align: middle;
}
.tg-dashboardnav ul li a i{
    width: 25px;
    padding: 1px 0 0;
}
.tg-customerviewpage{
    width: 100%;
    float: left;
    color: #999;
    font-size: 14px;
    line-height: 17px;
    padding: 15px 20px;
    border: 1px solid #ddd;
}
.tg-customerviewpage i,
.tg-customerviewpage span{
    display: inline-block;
    vertical-align: middle;
}
.tg-customerviewpage span{ color: #55acee; }
.tg-customerviewpage i{
    width: 25px;
    padding: 1px 0 0;
}
.tg-dashboardnotification{
    width: 100%;
    float: left;
    color: #fff;
    z-index: 2;
    font-size: 14px;
    line-height: 17px;
    font-weight: bold;
    margin: 0 0 10px;
    padding: 40px 30px;
    text-align: center;
    position: relative;
    text-transform: uppercase;
}
.tg-dashboardnotification span{
    display: block;
    font-size: 30px;
    line-height: 30px;
}
.tg-jobsposted{background: #6cbf6d;}
.tg-jobsremaining{background: #f1b55f;}
.tg-pkgexpirey{background: #db6460;}
.tg-dashboardnotification:before{
    top: 0;
    right: 3px;
    z-index: -1;
    font-size: 80px;
    line-height: 127px;
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-dashboardnotification.tg-jobsposted:before{
    color: #75cc76;
    content: '\f0a2';
}
.tg-dashboardnotification.tg-jobsremaining:before{
    right: auto;
    left: 3px;
    color: #ffc065;
    content: '\f080';
}
.tg-dashboardnotification.tg-pkgexpirey:before{
    color: #eb6c67;
    content: '\f097';
}
.tg-btnadd,
.tg-btnedit{
    top: 0;
    right: 0;
    z-index: 5;
    color: #fff;
    width: 50px;
    height: 50px;
    overflow: hidden;
    line-height: 50px;
    border-radius: 50%;
    position: absolute;
    text-align: center;
}
.tg-btnadd i,
.tg-btnedit i{
    display: block;
    line-height: inherit;
}
.tg-btnadd i{
    font-size: 25px;
    overflow: hidden;
    font-style: normal;
    border-radius: 50%;
}
.tg-btnadd:hover,
.tg-btnadd:hover i,
.tg-btnedit:hover i{color: #fff;}
/*==============================================
            Profile Setting Style
==============================================*/
.tg-dashboarddepartments{
    clear: both;
    margin: -15px;
    overflow: hidden;
}
.tg-dashboarddepartment{
    float: left;
    width: 33.33%;
    padding: 15px;
    font-size: 14px;
    line-height: 17px;
    text-align: center;
}
.tg-dashboarddepartment a{
    z-index: 2;
    color: #999;
    display: block;
    padding: 52px 20px;
    border-radius: 5px;
    position: relative;
    background: #f6f6f6;
    border: 1px solid #f6f6f6;
    border-bottom-width: 4px;
}
.tg-dashboarddepartment.tg-active a,
.tg-dashboarddepartment a:hover{
    color: #999;
    background: #fff;
    border-radius: 5px 5px 0 0;
}
.tg-dashboarddepartment a:before{
    right: 0;
    bottom: 0;
    z-index: -1;
    color: #ebeaef;
    font-size: 80px;
    line-height: 70px;
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-dashboarddepartment.tg-academics a:before{content: '\f19d';}
.tg-dashboarddepartment.tg-craftsandart a:before{
    bottom: 6px;
    content: '\f20e';
}
.tg-dashboarddepartment.tg-languages a:before{
    bottom: 6px;
    content: '\f1ab';
}
.tg-dashboarddepartment.tg-religioneducation a:before{content: '\f186';}
.tg-dashboarddepartment.tg-itandtechnology a:before{content: '\f0eb';}
.tg-dashboarddepartment.tg-professional a:before{content: '\f0b1';}
.tg-dashboarddepartment.tg-lifestyle a:before{
    bottom: 6px;
    content: '\f1ae';
}
.tg-dashboarddepartment.tg-healthfitnesssports a:before{content: '\f004';}
.tg-dashboarddepartment.tg-others a:before{content: '\f074';}
.tg-dashboarddepartment a h3{
    color:#484848;
    margin: 0 0 5px;
    font-size: 16px;
    line-height: 19px;
    text-transform: capitalize;
}
.tg-settingcontentarea{
    clear: both;
    display: none;
    padding: 15px;
    margin: 0 15px;
    overflow: hidden;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.tg-settingbox{
    width: 100%;
    float: left;
}
.tg-settingbox + .tg-settingbox{
    margin: 25px 0 0;
    padding: 25px 0 0;
    border-top: 1px solid #ddd;
}
.tg-settingbox h3{
    margin: 0 0 15px;
    font-size: 16px;
    line-height: 19px;
    text-transform: capitalize;
}

.tg-settingoption{
    clear: both;
    margin: 0 -5px;
    overflow: hidden;
}
.tg-skillcheckbox{
    float: left;
    padding: 5px;
}
.tg-skillcheckbox label{
    width: 100%;
    float: left;
    margin:0;
    position: relative;
}
.tg-skillcheckbox label{
    display:block;
    color: #7c7c7a;
    cursor:pointer;
    font-size: 12px;
    line-height: 22px;
    padding: 0 10px;
    background: #f2f1f6;
    text-transform: capitalize;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-skillcheckbox input[type=checkbox] {display:none;}
.tg-skillcheckbox input[type=checkbox] + label:before {
    top: 0;
    left: 0;
    content: '';
    color: #c1c1c1;
    background: #fff;
    position: absolute;
    text-align: center;
}
.tg-skillcheckbox label:hover,
.tg-skillcheckbox input[type=checkbox]:checked + label{color: #fff;}
.tg-notice{
    color: #999;
    float: right;
    padding: 16px 0;
    font-size: 14px;
    line-height: 17px;
}
.tg-notice strong{
    color: #999;
    text-transform: uppercase;
}
/*==============================================
            Profile Setting Style
==============================================*/
.tg-formtutorprofilesetting{
    width: 100%;
    float: left;
}
.tg-formtutorprofilesetting fieldset{
    margin: 0;
    border: 0;
    padding: 0;
    width: 100%;
    float: left;
}
.tg-formtutorprofilesetting fieldset + fieldset{
    margin: 30px 0 0;
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
}
.tg-formtutorprofilesetting fieldset h3{
    margin: 0 0 30px;
    font-size: 20px;
    line-height: 20px;
    text-transform: capitalize;
}
.tg-formtutorprofilesetting fieldset .tg-select{border: 0;}
.tg-formtutorprofilesetting fieldset .tg-select select{
    color: #999;
    border-width: 1px;
}
.tg-formtutorprofilesetting fieldset .tg-select select option{color: #999;}
.tg-formtheme fieldset .form-group{
    width: 100%;
    float: left;
}
.tg-addressmap{
    width: 100%;
    float: left;
    height: 300px;
}
.tg-formtutorprofilesetting fieldset .form-group .add-clear-x {
    width: 50px;
    height: 50px;
    line-height: 50px;
    color: #db6460 !important;
}
.tg-addinputfield{
    width: 100%;
    float: left;
    padding: 20px;
    background: #f6f6f6;
}
.tg-addinputfield .form-control,
.tg-addinputfield .tg-select{
    width: 70%;
    float: left;
}
.tg-addinputfield .tg-btn{
    width: 25%;
    float: right;
    line-height: 46px;
}
.tg-addinputfield .tg-btn:hover{background: transparent;}
.tg-formtutorprofilesetting fieldset textarea.form-control{
    width: 100%;
    float: left;
    resize: none;
    height: 300px;
    padding: 15px 20px;
}
.tg-list{
    width: 100%;
    float: left;
    font-size: 14px;
    line-height: 20px;
    list-style: none;
    padding: 0 0 30px;
}
.tg-list li{
    width: 100%;
    float: left;
    padding: 0 30px;
    position: relative;
    line-height: inherit;
    list-style-type: none;
}
.tg-list li + li{margin-top: 15px;}
.tg-list li:before{
    top: 0;
    left: 0;
    content: '\f040';
    font-size: 16px;
    line-height: 20px;
    position: absolute;
    font-family: 'FontAwesome';
}
.tg-list li:after{
    top: 50%;
    left: 20px;
    width: 3px;
    height: 3px;
    content: '';
    display: block;
    background: #000;
    border-radius: 50%;
    position: absolute;
}
.tg-list li i{
    top: 4px;
    right: 0;
    z-index: 3;
    color: #db6460;
    cursor: pointer;
    position: absolute;
}
.tg-list li .tg-description{padding: 30px 0 0;}
.tg-list li .tg-description p{margin: 0;}
.tg-addexperience li{
    width: 100%;
    float: left;
    padding: 20px 5px;
    background: #f6f6f6;
}
.tg-list.tg-experiencelist li:after{display: none;}
.tg-addexperience .tg-btn{
    float: left;
    line-height: 46px;
}
.tg-addexperience .tg-checkbox{
    width: auto;
    color: #999;
    float: right;
    padding: 16px 0;
}
.tg-addexperience .tg-checkbox label{
    color: #999;
    font-size: 14px;
    font-weight: 400;
    line-height: 17px;
    text-transform: lowercase;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-experiencetitle{
    width: 100%;
    float: left;
    padding: 0 0 10px;
}
.tg-experiencetitle h4{
    margin: 0;
    font-size: 16px;
    line-height: 16px;
    position: relative;
    text-transform: capitalize;
}
.tg-experiencetitle h4:before{
    top: 5px;
    left: -10px;
    width: 5px;
    height: 5px;
    content: '';
    background: #000;
    position: absolute;
    border-radius: 5px;
}
.tg-addexperience{
    width: 100%;
    float: left;
    margin: 0 0 20px;
    padding: 20px 5px;
    background: #f6f6f6;
}
.tg-inputicon{position: relative;}
.tg-inputicon .form-control{
    z-index: 1;
    position: relative;
    padding: 15px 50px 15px 20px;
}
.tg-inputicon span{
    top: 0;
    right: 0;
    z-index: 2;
    width: 50px;
    height: 50px;
    line-height: 50px;
    position: absolute;
    text-align: center;
}
.tg-videos{
    clear: both;
    margin: 0 -15px;
    font-size: 14px;
    line-height: 17px;
    overflow: hidden;
    list-style: none;
    padding: 0 0 25px;
}
.tg-videos li{
    width: 33.33%;
    float: left;
    padding: 0 15px;
    list-style-type: none;
}
.tg-videos li figure{
    width: 100%;
    float: left;
    margin: 0 0 20px;
}
.tg-videos li figure a{display: block;}
.tg-videos li figure a img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-videos li .tg-description{line-height: 17px;}
.tg-videolink,
.tg-videos li .tg-description a{
    display: inline-block;
    vertical-align: middle;
}
.tg-videolink{
    width: 75%;
    margin: 0 15px;
}
.tg-videos li .tg-description .tg-videolink a{
    width: 100%;
    color: #55acee;
    display: block;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}
.tg-videos li .tg-description a{color:#484848;}
.tg-videos li .tg-description a.tg-btndelete{
    float: right;
    color: #db6460;
}
.tg-fileupload{
    float:left;
    width:100%;
    background:#fff;
    border: 1px solid #ddd;
    border-bottom-width: 4px;
    border-radius: 5px 5px 0 0;
}
.tg-fileupload label{
    margin:0;
    height:280px;
    cursor:pointer;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-fileupload input{display:none;}
.tg-dragfiles{
    width:100%;
    float:left;
    color:#999;
    text-align:center;
}
.tg-fileupload label .tg-filetype{
    width: 47px;
    height: 60px;
    display: block;
    font-style: 12px;
    line-height: 60px;
    font-weight: bold;
    margin: 0 auto 30px;
    text-transform: uppercase;
    background: url(../images/icon-01.png) no-repeat;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-text{
    color:#484848;
    display: block;
    font-size: 20px;
    line-height: 15px;
    padding: 0 0 5px;
}
.tg-fileupload label > span{
    color: #999;
    display: block;
    margin: 0 0 20px;
    font:400 14px/17px 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-fileupload label > span > span{color: #55acee;}
.tg-loader{
    display: block;
    text-align: center;
}
.tg-loader i{
    color: #999;
    display: block;
    font-size: 20px;
    line-height: 20px;
    animation-name: spin;
    animation-duration: 2000ms;
    animation-iteration-count: infinite;
    animation-timing-function: linear;
}
@-webkit-keyframes {
    from {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    to {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
@keyframes spin {
    from {
        -ms-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -webkit-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    to {
        -ms-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
    }
}
.tg-timelinedp{
    width: 100%;
    float: left;
    padding:5px;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.tg-timelinedp figure{
    margin: 0;
    width: 100%;
    float: left;
    background: #000;
    position: relative;
}
.tg-timelinedp figure img{
    z-index: 1;
    width: 100%;
    height: auto;
    display: block;
    position: relative;
}
.tg-timelinedp figure figcaption{
    top: 0;
    left: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-fileupload.tg-uploaddp label{height: 290px;}
.tg-timelinedp figure figcaption i{
    width: 30px;
    height: 30px;
    color: #db6460;
    display: block;
    font-size: 14px;
    line-height: 30px;
    cursor: pointer;
    background: #fff;
    text-align: center;
    border-radius: 50%;
}
.tg-timelinedp figure:hover img{opacity: 0.5;}
.tg-timelinedp figure:hover figcaption{
    opacity: 1;
    visibility: visible;
}
.tg-gallery{
    clear: both;
    margin: -5px;
    overflow: hidden;
}
.tg-galleryimg{
    width: 20%;
    float: left;
    padding: 5px;
}
.tg-galleryimg figure{
    margin: 0;
    width: 100%;
    float: left;
    padding: 5px;
    background: #fff;
    position: relative;
    border: 1px solid #ddd;
}
.tg-galleryimg figure img{
    width: 100%;
    height: auto;
    display: block;
}
.tg-galleryimg figure figcaption{
    top: 0;
    left: 0;
    z-index: 2;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-galleryimg figure figcaption i{
    width: 30px;
    height: 30px;
    color: #db6460;
    display: block;
    font-size: 14px;
    line-height: 30px;
    cursor: pointer;
    background: #fff;
    text-align: center;
    border-radius: 50%;
}
.tg-galleryimg figure:hover img{opacity: 0.5;}
.tg-galleryimg figure:hover figcaption{
    opacity: 1;
    visibility: visible;
}
/*==============================================
            My Schedule Style
==============================================*/
.tg-formtheme fieldset + fieldset{
    margin: 10px 0 0;
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
}
.tg-addinputfield{margin: 0 0 20px;}
.tg-formtheme{
    width: 100%;
    float: left;
}
.tg-formtheme h3{
    width: 100%;
    float: left;
    font-size: 20px;
    margin: 0 0 30px;
    line-height: 20px;
    text-transform: capitalize;
}
.tg-formtheme > h3{
    width: auto;
    margin: 13px 0;
}
.tg-formtheme fieldset{
    margin: 0;
    border: 0;
    padding: 0;
    width: 100%;
    float: left;
}
.tg-formtheme fieldset > label{
    margin: 0;
    width: 108px;
    float: left;
    padding: 17px 0;
    font-size: 16px;
    line-height: 16px;
}
.tg-datefield{
    width: 285px;
    padding: 0 10px;
    display: inline-block;
    vertical-align: middle;
}
.tg-formtheme fieldset .tg-checkbox{
    width: auto;
    float: right;
    padding: 16px 0;
    line-height: 18px;
    margin: 0 0 0 10px;
}
.tg-formtheme fieldset .tg-btn{
    float: left;
    line-height: 46px;
}
.tg-formtheme fieldset .tg-note{
    color: #999;
    float: right;
    padding: 15px 0;
}
.tg-formtheme fieldset .tg-note strong{
    color: #55acee;
    text-transform: uppercase;
}
/*==============================================
            DashBoard Table Style
==============================================*/
.tg-dashboardtable{margin: 0 0 30px}
.tg-dashboardtable thead tr th{
    color: #fff;
    height: 50px;
    text-align: left;
    font-size: 16px;
    line-height: 20px;
    font-weight: 400;
    vertical-align: middle;
    text-transform: capitalize;
}
.tg-dashboardtable thead tr th:last-child{text-align: right;}
.tg-dashboardtable > thead:first-child > tr:first-child > th{border: 0;}
.tg-dashboardtable tbody tr td{
    border: 0;
    color: #999;
    height: 50px;
    font-size: 14px;
    text-align: left;
    line-height: 17px;
    vertical-align: middle;
}
.tg-dashboardtable tbody tr td:last-child{
    color: #db6460;
    font-size: 13px;
    line-height: 13px;
    text-align: right;
}
.tg-dashboardtable tbody tr td:last-child i{cursor: pointer;}
/*==============================================
            Renew Package Style
==============================================*/
.tg-pkgexpireyandcounter{
    width: 100%;
    float: left;
    margin: 0 0 20px;
}
.tg-pkgexpireyandcounter .tg-pkgexpirey{
    width: 45%;
    float: left;
    margin: 0;
    padding: 30px;
}
.tg-pkgexpireyandcounter .tg-pkgexpirey h3{
    color: #fff;
    font-size: 20px;
    margin: 0 0 20px;
    line-height: 20px;
    font-weight: 4100;
}
.tg-pkgexpireyandcounter .tg-pkgexpirey .tg-description{
    font-weight: 400;
    text-transform: none;
}
.tg-pkgexpireyandcounter .tg-pkgexpirey .tg-btn{
    float: none;
    color: #fff;
    border-color: #fff;
    display: inline-block;
    vertical-align: middle;
    background: transparent;
}
.tg-pkgexpireyandcounter .tg-pkgexpirey:before{
    top: 50%;
    margin: -36px 0 0;
    line-height: 72px;
}
.tg-timecounter{
    width: 100%;
    float: left;
}
.tg-expireytimecounter{
    width: 55%;
    float: right;
    padding: 30px;
    min-height: 210px;
    line-height: inherit;
    border: 1px solid #ddd;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-content: center;
}
.tg-countdown{
    width: 100%;
    float: left;
    height: 30px;
    font-size: 40px;
    line-height: 30px;
}
.tg-countdown span{
    float: none;
    text-align: left;
    height: inherit;
    display: inline-block;
    vertical-align: top;
    line-height: inherit !important;
}
.tg-countdown span:after,
.tg-countdown span:before{
    box-shadow: none;
    background: #db6460;
}
.tg-countdown span span{
    width: 25px;
    height: inherit;
    color: #db6460;
    font-weight: bold;
    line-height: inherit;
    box-shadow: none !important;
    letter-spacing: normal !important;
    background: transparent !important;
}
.tg-countdown span.countDiv{width: 45px;}
.tg-countdown span.countDiv:before{bottom: 5px;}
.tg-countdown span.countDiv:after{top: 5px;}
.tg-packagesplanstabs{
    width: 100%;
    float: left;
}
.tg-navpackageplans{
    clear: both;
    overflow: hidden;
    list-style: none;
    font-size: 13px;
    line-height: 16px;
    margin: 0 -15px;
}
.tg-navpackageplans li{
    width: 33.33%;
    float: left;
    padding: 0 15px;
    list-style-type: none;
}
.tg-navpackageplans li a{
    width: 100%;
    float: left;
    display: block;
    text-align: center;
    border-radius: 5px;
    border: 1px solid #ddd;
}
.tg-navpackageplans li a:hover,
.tg-navpackageplans li.active a{
    border-radius: 5px 5px 0 0;
    border-bottom-width: 4px;
}
.tg-pkgplan{
    width: 100%;
    float: left;
    color: #999;
    font-size: 13px;
    line-height: 16px;
    padding: 0 0 30px;
}
.tg-pkgplanhead,
.tg-pkgplan .tg-description{
    width: 100%;
    float: left;
    padding: 30px;
}
.tg-pkgplan .tg-description{padding-bottom: 15px;}
.tg-pkgplanhead{border-bottom: 1px solid #ddd;}
.tg-formtheme .tg-pkgplanhead h3{margin: 0 0 15px;}
.tg-pkgplanhead h4{
    margin: 0;
    width: 100%;
    float: left;
    color: #999;
    font-size: 14px;
    line-height: 17px;
    text-transform: lowercase;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-pkgplanhead h4 span{
    font-size: 24px;
    line-height: 24px;
    font-weight: bold;
}
.tg-pkgplan .tg-description p{
    margin: 0 0 15px;
    font-size: inherit;
    line-height: inherit;
}
.tg-formtheme fieldset .tg-pkgplan .tg-btn{float: none;}
.tg-pkgtabcontent{
    width: 100%;
    float: left;
    padding: 20px;
    margin: 15px 0 0;
    border: 1px solid #ddd;
    border-radius: 0 0 10px 10px;
}
.tg-formtheme fieldset .tg-btn{background: transparent;}
.tg-formtheme fieldset .tg-btn:hover{ color: #fff; }
.tg-summary,
.tg-paymentoption{
    width: 100%;
    float: left;
}
.tg-paymentoption{
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
}
.tg-paymentoption .table{margin: 0;}
.tg-pkgtabcontent .tg-dashboardtable thead tr th{
    text-align: left;
    background: #404040 !important;
}
.tg-pkgtabcontent .tg-dashboardtable tbody tr td:last-child{color: #999;}
.tg-pkgfoot{
    width: 100%;
    float: left;
    padding: 30px 0 0;
    border-top: 1px solid #ddd;
}
.tg-pkgfoot .tg-checkbox label{
    color: #999;
    font-size: 14px;
    text-transform: lowercase;
    font-family: 'Open Sans', Arial, Helvetica, sans-serif;
}
.tg-pkgfoot .tg-checkbox label strong{
    color: #55acee;
    text-transform: uppercase;
}
.tg-formtheme fieldset .tg-addinputfield .tg-btn{float: right;}

.tg-optionbox{
    width: 100%;
    float: left;
    padding: 15px;
    background: #f6f6f6;
}
/*==============================================
            Tuition DashBoard Style
==============================================*/
.tg-tuitiondashboard .tg-jobhead{padding: 18px 0;}
.tg-tuitiondashboardtable tbody tr td,
.tg-tuitiondashboardtable tbody tr td i.fa-pencil{color:#484848;}
.tg-tuitiondashboardtable tbody tr td i.fa-pencil{margin: 0 6px 0 0;}
.tg-tuitiondashboardtable tbody tr.tg-expire td:first-child,
.tg-tuitiondashboardtable tbody tr.tg-expire td:nth-child(2){color: #999;}
.tg-tuitiondashboardtable tbody tr.tg-expire td:nth-child(3){color: #db6460;}
.tg-postajob{
    width: 100%;
    float: left;
    color: #fff;
    padding: 30px;
    margin: 0 0 30px;
    background: #404040;
}
.tg-postajob img,
.tg-postajob .tg-btn{float: right;}
.tg-postajob .tg-btn{
    color: #fff;
    padding: 0 32px;
    line-height: 44px;
    border-color: #fff;
    background: transparent;
    margin: 25px 0 25px 25px;
}
.tg-postajob .tg-btn:hover{color: #fff;}
.tg-postajob img{
    display: block;
    margin: -50px 0 -30px 20px;
}
.tg-postjobcontent{overflow: hidden;}
.tg-formtheme .tg-postjobcontent h3{
    color: #fff;
    font-size: 28px;
    line-height: 20px;
}
.tg-formtheme .tg-postjobcontent p{margin: 0;}
.tg-formaddjob fieldset .form-group{
    width: 100%;
    float: left;
}
.tg-formtheme fieldset textarea.form-control {
    width: 100%;
    float: left;
    resize: none;
    height: 300px;
    padding: 15px 20px;
}
.tg-formtheme fieldset .tg-radiobox{
    border: 0;
    margin: 0;
    padding: 0 0 10px;
}
/*==============================================
            Map Clustering Style
==============================================*/
.tg-map{
    width: 100%;
    float: left;
    height: 300px;
    position: relative;
}
.tg-mapbox{
    width: 100%;
    float: left;
    position: relative;
}
.tg-mapbox{
    width:100%;
    float:left;
}
.tg-map div[title=""]{
    padding:0 2px 0 0;
    width:40px !important;
    height:40px !important;
    font-size: 15px !important;
    line-height:40px !important;
    background-size:auto !important;
    background-position:center !important;
}
.infoBox{
    float:left;
    width:270px;
    background: #fff;
    position:relative;
    padding: 20px 20px 20px 40px;
}
.tg-mapinfobox .tg-metadata li,
.tg-mapinfobox .tg-jobsmetadata li{padding: 0 10px;}
.tg-mapinfobox .tg-metadata li + li:before,
.tg-mapinfobox .tg-jobsmetadata li + li:before{top: 3px;}
.tg-mapinfobox .tg-metadata li:first-child,
.tg-mapinfobox .tg-jobsmetadata li:first-child{padding-left: 0;}
.tg-mapinfobox .tg-metadata li:first-child .tg-stars,
.tg-mapinfobox .tg-jobsmetadata li:first-child .tg-stars{margin: 2px 0;}
.infoBox:after {
    top: 100%;
    left: 50%;
    width: 0;
    height: 0;
    content: '';
    position: absolute;
    margin: 0 0 0 -14px;
    border-left: 7px solid transparent;
    border-right: 7px solid transparent;
    border-top: 10px solid #fff;
}
.infoBox > img{
    top: 0;
    right: 0;
    z-index:10;
    position: absolute !important;
}
.tg-mapbox .tg-dpbox{
    float:left;
    width:56px;
    overflow: hidden;
    position:relative;
    margin:0 0 0 -68px;
    border-radius: 50%;
    border: 2px solid;
}
.tg-mapbox .tg-dpbox img{
    width: 100%;
    height: auto;
    overflow: hidden;
}
.tg-mapinfobox{overflow: hidden;}
.tg-mapinfobox h4{
    color:#484848;
    font-size:20px;
    line-height:14px;
    text-transform:capitalize;
}
.tg-mapinfobox h4 a{color:#484848;}
.tg-mapinfobox .tg-subjects{
    margin:0;
    font-size:14px;
    line-height:17px;
    font-style:normal;
}
.tg-map-controls{
    top:15px;
    left:15px;
    width:100px;
    z-index:2;
    position:absolute;
}
.tg-map-controls span{
    float:left;
    width:30px;
    height:30px;
    color:#fff;
    cursor:pointer;
    background:#000;
    font-size:14px;
    line-height:30px;
    text-align:center;
}
.tg-map-controls span + span{ margin:0 0 0 2px;}
.tg-addtutortolist{
    width: 100%;
    float: left;
    margin: 0 0 30px;
    padding: 0 0 30px;
    border-bottom: 1px solid #ddd;
}
.tg-btnaddtutor{
    color: #fff;
    width: 170px;
    height: 90px;
    float: right;
    padding: 28px 20px;
    margin: 0 0 0 30px;
    text-align: center;
    background: #6cbf6d;
}
.tg-btnaddtutor i{
    display: block;
    font-weight: bold;
    font-style: normal;
    text-transform: uppercase;
}
.tg-btnaddtutor i.fa{
    font-weight: 400;
    padding: 0 0 4px;
}
.tg-btnaddtutor:hover,
.tg-btnaddtutor:hover i{color: #fff !important;}
.tg-addtutortolist form{
    padding: 20px;
    overflow: hidden;
    background: #f6f6f6;
}
.tg-addtutortolist form fieldset{
    margin: 0;
    border: 0;
    padding: 0;
    width: 100%;
    float: left;
}
.tg-addtutortolist form fieldset .form-control{
    width: 420px;
    float: left;
}
.tg-addtutortolist form fieldset .tg-btn{
    width: 170px;
    float: right;
    padding: 0;
    height: 50px;
    line-height: 44px;
    background: transparent;
}
.tg-addtutortolist form fieldset .tg-btn:hover{color: #fff;}
.tg-tutors.tg-tutorsgrid{
    width: 100%;
    float: left;
}
.tg-addtutortolist > h3,
.tg-tutors.tg-tutorsgrid > h3{
    margin: 0;
    font-size: 20px;
    line-height: 20px;
    text-transform: capitalize;
}
.tg-addtutortolist > h3{margin: 0 0 30px;}
.tg-formtheme .tg-select.tg-geolocationicon:before{right: 40px;}
.chosen-container-multi .chosen-choices{
    border-color: #ddd;
    border-radius: 0;
    box-shadow: none;
    line-height: 48px;
    height: 50px !important;
}
.chosen-container-multi .chosen-choices .search-field input[type="text"],
.chosen-container-multi .chosen-choices li.search-field input.default{
    color: #999;
    height: 48px;
    padding: 15px;
    line-height: 20px;
    width: 100% !important;
}
.chosen-container-multi .chosen-choices .search-choice{
    margin: 14px 0 14px 10px;
    color: #7c7c7a;
    background: #f2f1f6;
    border: 0;
    border-radius: 0;
    box-shadow: none;
    font-size: 12px;
}
.tg-inputplusselect{
    width: 100%;
    float: left;
    position: relative;
}
.tg-inputplusselect .tg-select{
    top: 1px;
    right: 1px;
    z-index: 2;
    color:#484848;
    width: 98px;
    height: 48px;
    position: absolute;
    background: #f6f6f6;
}
.tg-inputplusselect .tg-select select{
    border: 0;
    color:#484848;
    height: 48px;
    background: #f6f6f6;
}
.tg-inputplusselect .form-control{
    z-index: 1;
    position: relative;
    padding: 15px 100px 15px 20px
}
.tg-tg-filterselect{
    width: auto;
    float: right;
    margin: 0 0 30px;
}
.tg-tg-filterselect select{
    width: 170px;
    height: 40px;
    padding: 10px;
}
.tg-loader{ display: none;}
.tg-uploading .tg-loader{ display: block;}
.tg-galleryimg.tg-uploading figure img{opacity: 0.10;}
.tg-galleryimg.tg-uploading .tg-loader{
    top: 50%;
    left: 50%;
    position: absolute;
    margin: -10px 0 0 -10px;
}
.tg-uploadingbar{
    z-index: 3;
    bottom: 5px;
    left: 6%;
    height: 4px;
    width: 88%;
    background: #ddd;
    position: absolute;
}
.tg-uploadingbar:after{
    top: 0;
    left: 0;
    width: 80%;
    height: 4px;
    content: '';
    position: absolute;
}
.tg-formhead{
    width: 100%;
    float: left;
}
.tg-formhead h3{width: auto;}
.tg-formhead .tg-iosstylcheckbox{float: right;}
.tg-innerbanner .tg-pagehead,
.tg-innerbanner .tg-jobhead{display: none;}
.tg-dashboardtable{
    min-width: 640px;
    width: 100%;
}
.tg-tablescroll{
    width: 100%;
    float: left;
    overflow: auto;
}







        </style>
    </body>


<!-- Mirrored from htmldemos.ruventhemes.com/desmond-resume/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 29 Dec 2017 17:39:56 GMT -->
</html>

<!-- <div class="container">
    <div class="tutor-view">

        <h1><?//= Html::encode($this->title) ?></h1>

        <p>
            
            <?//= Html::a('Delete', ['delete', 'id' => $model->id], [
               // 'class' => 'btn btn-danger',
               // 'data' => [
               //     'confirm' => 'Are you sure you want to delete this item?',
               //     'method' => 'post',
              //  ],
            //])
             ?>
        </p>

        <?//= 
        // DetailView::widget([
        //     'model' => $model,
        //     'attributes' => [
        //         'id',
        //         'user_id',
        //         'firstname',
        //         'lastname',
        //         'phone',
        //         'dob',
        //         'age',
        //         'gender',
        //         'image',
        //         'subjects',
        //         'expertise_subject',
        //         'experience',
        //         'professional',
        //         'geographically_present',
        //         'available_for',
        //         'pricing',
        //         'language',
        //         'expertise_course',
        //         'digital_pen',
        //         'describe_you',
        //         'country_id',
        //         'state_id',
        //         'city_id',
        //         'pincode',
        //         'street_address',
        //         'website',
        //         'previous_work_place',
        //         'created_by',
        //         'created_at',
        //         'updated_by',
        //         'updated_at',
        //         'exam',
        //         'university',
        //         'year',
        //         'percentage',
        //     ],
        // ])?> 

    <!-- </div> -->
<!-- </div> -->
