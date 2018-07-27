<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use backend\models\Settings;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model frontend\models\Tutor */

//$this->title = $model->id;
//$this->params['breadcrumbs'][] = ['label' => 'Tutors', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
/* @var $this yii\web\View */
/* @var $model app\models\Studentrequest */
/* @var $form ActiveForm */

$setting = Settings::findOne(1);
?>

    <link rel="stylesheet" type="text/css" href="css/homestyle.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <div class="parallax-mirror" style="visibility: visible; z-index: -100; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 0px, 0px); height: 250px; width: 1280px;"><img class="parallax-slider" src="images/parallax/bgparallax-12.jpg" style="transform: translate3d(0px, 0px, 0px); position: absolute; top: -64.4px; left: 0px; height: 347px; width: 1280px; max-width: none;"></div>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!--************************************
			Wrapper Start
	*************************************-->
    <div id="tg-wrapper" class="tg-wrapper tg-haslayout" style="background-color: white;">

        <style type="text/css">
            .footer {
                height: 94px;
                background-color: transparent;
                border-top: 0px;
                padding-top: 18px;
            }
        </style>

        <script type="text/javascript">
            $(function() {
                $("input[name='work']").click(function() {
                    if ($("#student").is(":checked")) {
                        $("#dvPassport").show();
                    } else {
                        $("#dvPassport").hide();
                    }
                });
            });
        </script>
        <script type="text/javascript">
            function modify_value() {
                var hidden_field = document.getElementById('test3');
                hidden_field.value = '20';

            }
        </script>
        <script type="text/javascript">
            function modify_value1() {
                var hidden_field = document.getElementById('test3');
                hidden_field.value = '0';

            }
        </script>

        <style>
            /*#a1:hover
{
color : #08c899;
}*/
        </style>
        <style>
            #a1:hover {
                background-color: #23f6c1;
            }
            
            @media only screen and (max-width: 800px) {
                #a_tag1 {}
            }
            
            @media only screen and (max-width: 600px) {
                #a_tag1 {
                    color: white;
                }
                #tg-navigation {
                    margin-top: 9%;
                }
            }
            
            @media only screen and (max-width: 414px) {
                #tg-navigation {
                    margin-top: -2%;
                }
            }
        </style>

        <header id="tg-header" class="tg-header tg-haslayout">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <strong class="tg-logo">
							<a href="http://www.odishatutor.com/"><img src="http://www.odishatutor.com/uploads/settings/odishatutor_logo_1527957978.png" alt="image description" width="14%"></a>
						</strong>
                        <!-- <div class="tg-navigationarea"> -->
                        <!-- <nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="tg-navigation collapse navbar-collapse">

									<ul>                           	<li class="tg-active"><a href="dashboard-student-profile-settings.php" id="a_tag1" style="text-decoration: none; ">Dashboard</a></li>

                                    <li class="tg-hasdropdown"><span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>

									</li><li class="tg-active"><a href="job_afterlogin.php" id="a_tag1" style="text-decoration: none;">Job</a></li>
											<ul class="tg-dropdownmenu">
												<li><a href="jobs.php">Job</a></li>
												<li><a href="job-detail.php">Job Detail</a></li>
											</ul>

								<li class="tg-hasdropdown"><span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								</li><li class="tg-active">	<a href="tutor_afterlogin.php" id="a_tag1" style="text-decoration: none; ">Tutor</a></li>
									<ul class="tg-dropdownmenu">
										<li><a href="tutors.php">tutor</a></li>
										<li><a href="tutor-detail.php">tutor Detail</a></li>
									</ul>

								<li class="tg-hasdropdown"><span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>
								</li><li class="tg-active">	<a href="tuition-centers-afterlogin.php" id="a_tag1" style="text-decoration: none;">Tuition Centre</a></li>

									<ul class="tg-dropdownmenu">
										<li><a href="tuition-center.php">Tuition Centre</a></li>
										<li><a href="tutioncentre-detail.php">Tuition center Detail</a></li>
										<li><a href="job-detail-by-tutioncenter.php">job Detail by Tuition center</a></li>
									</ul>

                                <li class="tg-hasdropdown"><span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>
                                </li><li class="tg-active"> <a href="school-afterlogin.php" id="a_tag1" style="text-decoration: none;">School</a></li>

									<ul class="tg-dropdownmenu">
										<li><a href="tuition-center.php">Tuition Centre</a></li>
										<li><a href="tutioncentre-detail.php">Tuition center Detail</a></li>
										<li><a href="job-detail-by-tutioncenter.php">job Detail by Tuition center</a></li>
									</ul>

								<li class="tg-hasdropdown"><span class="tg-dropdowarrow"><i class="fa fa-angle-down"></i></span>
				         </li><li class="tg-active"><a href="logout.php" id="" style="color: red; text-decoration: none;">LOGOUT</a></li>

											<ul class="tg-dropdownmenu">

											</ul>

									</ul>
								</div>

							</nav>    -->

                        <!-- <div class="tg-admin" style="position: initial;">
                            <div class="tg-guest">
                                <figure class="tg-adminpic">
                                    <a href="#"><img src="images/icons/icon-01.png" alt="image description"></a>
                                </figure>
                                <div class="tg-message">
                                    <em>Howdy, Guest!</em>
                                    <div class="tg-loginsinguplinks">

                                    </div>
                                </div>
                            </div>
                            <div class="tg-user">
                                <div class="dropdown tg-dropdown">
                                    <figure class="tg-adminpic">
                                        <a href="#"><img src="images/icons/icon-01.png" alt="image description"></a>
                                    </figure>
                                    <button id="tg-usermenu" class="tg-usermenu tg-btndropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<em>howdy, Guest!</em>
										</button>
                                    <div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-usermenu">
                                        <time datetime="2011-01-12">
                                            <strong>monday 27, 2017</strong>
                                            <strong>10:10 am</strong>
                                        </time>
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-line-chart"></i>
                                                    <span>Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>
                                                    <span>Profile settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-list"></i>
                                                    <span>My jobs</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span>My Schedules</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-heart"></i>
                                                    <span>Favorites Listing</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-clone"></i>
                                                    <span>Invoices</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-arrow-up"></i>
                                                    <span>Upgrade Package</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-gears"></i>
                                                    <span>Security Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-eye"></i>
                                                    <span>Privacy Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" <i="" class="fa fa-sign-out">
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
    </div>

    </header>
    <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async=""></script>

    <!--************************************
				Inner Banner Start
		*************************************-->
    <div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-12.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <div class="tg-innerbannercontent">
                        <div class="tg-jobhead">

                            <span class="tg-priceperhour">Rs.<?= "100"; ?> <em></em></span>
                            <h1><?= $model->firstname ?></h1>
                            <span class="tg-tutioncategory">Mathematics</span>
                            <ul class="tg-jobsmetadata" id="stars">
                                <li>
                                    <div class="tg-ratingradio">
                                        <span class="tg-radio">
										<label for="fivestar"><span class="tg-stars"><span></span></span><i></i></label>
                                        </span>
                                    </div>
                                </li>
                                <li><a href="add_tutor_favorite.php?cid=1449"><i class="fa fa-heart tg-like"></i></a></li>

                                <li>&nbsp;views</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--************************************
				Inner Banner End
		*************************************-->
    <!--************************************
				Main Start
		*************************************-->
    <main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div id="tg-content" class="tg-content">
                    <div class="tg-detailpage tg-tutordetail">
                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                            <div class="tg-widget tg-widgettutionimage">
                                <div class="tg-widgetcontent">
                                    <figure class="tg-tuitioncenterdp">
                                        <a href="#"><img src="http://www.odishatutor.com/uploads/tutor/<?= $model->image ?>" alt="image description" style="width: 90%; margin-left: 5%;"></a>
                                        <figcaption>
                                            <a id="featured" class="tg-usericon tg-iconfeatured" href="#" style="text-decoration:none;background: #ddd;">
                                                <em class="tg-usericonholder">
									<i class="fa fa-bolt"></i>
									<span>featured</span>
								</em>
                                            </a>
                                            <a id="featured" name="featured" data-trigger="pop" data-pop-class="pop-top-left" class="tg-usericon tg-iconfeatured" onclick="myFunction()" style="text-decoration:none;    background: #ddd;">
                                                <em class="tg-usericonholder">
									<i class="fa fa-shield"></i>
									<span>verified</span>
								</em>
                                            </a>
                                        </figcaption>
                                    </figure>
                                    <div class="pop pop-info pop-top-left" id="pop-me-container" style=" display: none;">
                                        <a id="close" class="close">X</a>
                                        <h4 class="modal-title" id="m1" style="text-transform: none;">Enter OTP to verify your mobile number </h4>
                                        <form action="" method="POST">
                                            <input type="hidden" style=" text-transform: none;" name="PIN" value="9wq2exa">
                                            <div id="m1">
                                                <input type="text" name="otp1" id="otp1" placeholder="enter otp" style=" text-transform: none;width:100%">

                                            </div>
                                            <div id="m1">
                                                <input type="submit" class="tg-btn" value="submit" name="submit" id="submit123">
                                            </div>
                                        </form>

                                    </div>
                                </div>

                                <div class="tg-widget tg-widgetcontact">
                                    <div class="tg-widgettitle">
                                        <h3>contact details</h3>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <div class="tg-widgetcontent">
                                        
                                            <ul class="tg-address">
                                                <!-- <div style="position: absolute; background-color: #ffffff;opacity: .4;margin-left:5px;margin-top:-46px;">
                                                    <img src="http://hometutorsplatform.com/starimg/img1.png" alt="Lock" style="width: 190px;">
                                                </div> -->
                                            <li><i class="fa fa-envelope-o"></i><span style="color: red;"><?= $user->email; ?></span></li>
                                                
                                            <br>
                                           	<li><i class="fa fa-phone"></i><span style="color: red;"><?= $model->phone; ?></span></li>

                                           	<li><i class="fa fa-map-marker "></i><span style="color: red;"><?= $address['city']; ?>-<?= $model['pincode']; ?>, <?= $address['state']; ?>, <?= $address['country']; ?></span></li>
                                           <!-- 	<li><i class="fa fa-phone"></i><span style="color: red;"><?= $model->phone; ?></span></li> -->

                                             <!-- <li><i class="fa fa-fax"></i><a href="mailto:test@test.com"></a></li>
                                                <li><i class="fa fa-skype"></i><a href="statecs772"></a></li>
                                                <li><i class="fa fa-link"></i><a href="statecs772">statecsdomain.com</a></li> -->
                                            
											<!-- <li class="fa fa-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
											<li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li> -->
										</ul>
										
                                    </div>

                                </div>

                                <!-- <div class="tg-widget tg-widgetschedule">
                                    <div class="tg-widgettitle">
                                        <h3>Schedule</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul>
                                            <li><a href="#">sunday<em>10am-2pm</em></a></li>
                                            <li><a href="#">monday<em>10am-2pm</em></a></li>
                                            <li><a href="#">tuesday<em>10am-5pm</em></a></li>
                                            <li><a href="#">wednesday<em>Not Working Today</em></a></li>
                                            <li><a href="#">thursday<em>Not Working Today</em></a></li>
                                            <li><a href="#">friday<em>10am-5pm</em></a></li>
                                            <li><a href="#">saturday<em>10am-5pm</em></a></li>
                                        </ul>
                                    </div>
                                </div> -->

                                <div class="tg-widget tg-widgetformcontact">
                                    <div class="tg-widgettitle">
                                        <h3>Contact Now</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <!-- 								<form class="tg-themeform tg-formcontactus" action="" method="POST">
											<fieldset>
												<div class="form-group">
													<input type="text" name="text" class="form-control" placeholder="Full Name *" style="background-color: white;">
												</div>
												<div class="form-group">
													<input type="text" name="mobile" class="form-control" placeholder="Mobile *" style="background-color: white;">
												</div>
												<div class="form-group">
													<input type="email" name="email" class="form-control" placeholder="Your Email *" style="background-color: white;">
												</div>
												<div class="form-group">
													<input type="text" name="subject" class="form-control" placeholder="Subject *" style="background-color: white;">
												</div>
												<div class="form-group">
													<textarea placeholder="Message *" name="message" style="background-color: white;"></textarea>
												</div>
												<button type="submit" name="submit1" class="tg-btn">send now</button>
											</fieldset>
										</form> -->

               <?php 
               if(!empty($_SESSION['__id'])){                  
                $st_id = $_SESSION['__id'];
                

										 					$form = ActiveForm::begin(); ?>

                     <input type="hidden" id="studentrequest-student_id" name="Studentrequest[student_id]" value="<?= $st_id ?>">
                     <input type="hidden" id="studentrequest-tutor_id" name="Studentrequest[tutor_id]" name="tutor_id" value="<?= $model->id ?>">

                     <?= $form->field($mode, 'name') ?>
                     <?= $form->field($mode, 'email') ?>
                     <?= $form->field($mode, 'mobile') ?>
                     <?= $form->field($mode, 'subject') ?>
                     <?= $form->field($mode, 'message') ?>
                    	<?= $form->field($mode, 'time_prefence') ?>
                     <div class="form-group">
                         <?= Html::submitButton('Submit', ['class' => 'tg-btn']) ?>
                     </div>
                     <?php ActiveForm::end(); ?>
                   </div>
                   <?php
              	}else{
              		
              		echo Yii::$app->session->setFlash('error', "Please login to view tutor profile.");
              		Yii::$app->response->redirect(['site/findtutor']);
              	}

				?>
                                </div>
                                <!-- <div class="tg-widget tg-widgetsocial">
                                    <div class="tg-widgettitle">
                                        <h3>share this job</h3>
                                    </div>
                                    <div class="tg-widgetcontent">
                                        <ul class="tg-socialicons">
                                            <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="tg-widget tg-widgetclaimreport">

                                <?php 
               					if(!empty($_SESSION['__id'])){                  
                				$st_id = $_SESSION['__id'];
			 					$form = ActiveForm::begin(); 
			 					?>
                     			<input type="hidden" id="studentrequest-student_id" name="Treviewrating[student_id]" value="<?= $st_id ?>">
                     			<input type="hidden" id="studentrequest-tutor_id" name="Treviewrating[tutor_id]" name="tutor_id" value="<?= $model->id ?>">
									<div class="tg-widgetcontent">
	                                    <div class="tg-widget">
	                                        <div class="tg-widgettitle">
	                                            <h3>Rating</h3>
	                                        </div>
	                                        <div class="tg-ratingradio">
	                                            <span class="tg-radio">
												<input type="radio" id="onestar" name="Treviewrating[ratings]" value="1" checked="">
												<label for="onestar"><span class="tg-stars"><span></span></span><i></i></label>
	                                            </span>
	                                            <span class="tg-radio">
												<input type="radio" id="twostar" name="Treviewrating[ratings]" value="2">
												<label for="twostar"><span class="tg-stars"><span></span></span><i></i></label>
	                                            </span>
	                                            <span class="tg-radio">
												<input type="radio" id="threestar" name="Treviewrating[ratings]" value="3">
												<label for="threestar"><span class="tg-stars"><span></span></span><i></i></label>
	                                            </span>
	                                            <span class="tg-radio">
												<input type="radio" id="fourstar" name="Treviewrating[ratings]" value="4">
												<label for="fourstar"><span class="tg-stars"><span></span></span><i></i></label>
	                                            </span>
	                                            <span class="tg-radio">
												<input type="radio" id="fivestar" name="Treviewrating[ratings]" value="5">
												<label for="fivestar"><span class="tg-stars"><span></span></span><i></i></label>
	                                            </span>
	                                        </div>
	                                    </div>
	                                    
	                                    <div class="form-group">
	                                        <textarea placeholder="comment" name="Treviewrating[review]" style="background-color: white;"></textarea>
	                                    </div>
	                                    
                                    <div class="form-group">
				                        <?= Html::submitButton('Submit', ['class' => 'tg-btn']) ?>
				                    </div>
					                     <?php ActiveForm::end(); ?>
					                   </div>
					                   <?php
					              	}else{
					              		
					              		echo Yii::$app->session->setFlash('error', "Please login to view tutor profile.");
					              		Yii::$app->response->redirect(['site/findtutor']);
					              	}
									?>
                                </div>
                            </div>
                           </div>
                            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                <div class="tg-jobhead">

                                    <span class="tg-priceperhour"><i class="fa fa-inr" aria-hidden="true"></i> <?= $model->pricing ?> <em></em></span>
                                    <h1><?= $model->firstname ?> <?= $model->lastname ?> </h1>
                                    <span class="tg-tutioncategory"><?= ucfirst($model->expertise_subject) ?></span>
                                    <ul class="tg-jobsmetadata" id="stars">
                                        <li>

                                            <div class="tg-ratingradio">
                                                <span class="tg-radio">

													<label for="fivestar"><span class="tg-stars"><span></span></span><i></i></label>
                                                </span>
                                            </div>
                                        </li>
                                        <li><a href="add_tutor_favorite.php?cid=1449"><i class="fa fa-heart tg-like"></i></a></li>

                                        <!-- <li>&nbsp;views</li> -->
                                    </ul>
                                </div>


                                <div class="tg-contentbox">
                                    <h2>About <?= $model->firstname ?> <?= $model->lastname ?> </h2>
                                    <div class="tg-description">
                                        <p>
                                            <?= $model->describe_you  ?>
                                        </p>

                                    </div>
                                    <ul class="tg-fullinfo">
                                        <li>
                                            <div class="tg-detailbox">
                                                <strong>Best Tutor to class: </strong>
                                                <span> <?= $model->expertise_course ?></span>
                                            </div>
                                            <div class="tg-detailbox">
                                                <strong>Teaching Language: </strong>
                                                <span> <?= ucfirst($model->language); ?> </span>
                                            </div>
                                            <div class="tg-detailbox">
                                                <strong>Gender: </strong>
                                                <span> <?= $model->gender ?></span>
                                            </div>
                                        </li>
                                        <li>
                                            <!--	<div class="tg-detailbox">
												<strong>Age Range: </strong>
												<span>22 - 26</span>
											</div>-->
                                            <!--<div class="tg-detailbox">
												<strong>Available Time Slot: </strong>
												<span>09:00 - 17:00</span>
											</div>-->
                                            <!--<div class="tg-detailbox">
												<strong>Others: </strong>
												<span>none</span>
											</div>-->
                                        </li>
                                    </ul>
                                </div>
                                <div class="tg-contentbox">
                                    <h2>Skills</h2>
                                    <ul class="tg-skillsrequired">
                                        <li> Solve Problems,Class Notes For Exam</li>

                                    </ul>
                                </div>
                                <div class="tg-contentbox">
                                    <h2>Experience</h2>
                                    <ul class="tg-hounoradnawards">
                                        <li>
                                            <div class="tg-dotstyletitle">
                                                <h3> <?= $model->experience ?></h3>
                                                <!--<span>Mathematics &amp; Statistics</span>-->
                                            </div>
                                            <!--<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>-->
                                        </li>
                                        <!--	<li>
											<div class="tg-dotstyletitle">
												<h3>Jr. Lecturer, Department Of Economics (Mar, 2015 - Dec, 2015)</h3>
												<span>Mathematics &amp; Statistics</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>-->
                                        <!--	<li>
											<div class="tg-dotstyletitle">
												<h3>Best Project Presentation (Jun, 2016)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>-->
                                    </ul>
                                </div>
                                <!--<div class="tg-contentbox">
									<h2>Honour &amp; Awards</h2>
									<ul class="tg-hounoradnawards">
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Speech On Parent Meeting (Mar, 2015)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Campus Student (Apr, 2016)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
										<li>
											<div class="tg-dotstyletitle">
												<h3>Best Project Presentation (Jun, 2016)</h3>
												<span>University of Manchester</span>
											</div>
											<div class="tg-description">
												<p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
											</div>
										</li>
									</ul>
								</div>-->
                                <!--<div class="tg-contentbox">
									<h2>Views Per Day</h2>
									<div id="tg-viewperdaychart" class="tg-viewperdaychart tg-viewschart"></div>
								</div>-->
                                <!-- <div class="tg-contentbox">
									<h2>Presentation Video</h2>
									<div class="tg-videobox">
										<figure>
											<img src="images/video-img-01.jpg" alt="image description">
											<iframe src="https://www.youtube.com/embed/TiwjRgLZMG4"></iframe>
										</figure>
									</div>
								</div> -->

                                <div class="tg-contentbox">
                                    <h2>Reviews</h2>
                                    <div class="tg-userreviews">
                                        <div class="tg-ratingbox">
                                            <div class="tg-averagerating">
                                                <h3>Average Rating</h3>

                                                <em>5</em>

                                                <div class="tg-ratingradio">
                                                    <span class="tg-radio">

													<label for="fivestar"><span class="tg-stars"><span></span></span><i></i></label>
                                                    </span>
                                                </div>
                                            </div>

                                            <div id="tg-userskill" class="tg-userskill">
                                                <div class="tg-skill">
                                                    <span class="tg-skillname">5 Stars</span>
                                                    <span class="tg-skillpercentage">100%</span>
                                                    <div class="tg-skillbox">
                                                        <div class="tg-skillholder" data-percent="100%">
                                                            <div class="tg-skillbar" style="width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tg-skill">
                                                    <span class="tg-skillname">4 Stars</span>
                                                    <span class="tg-skillpercentage">0%</span>
                                                    <div class="tg-skillbox">
                                                        <div class="tg-skillholder" data-percent="0%">
                                                            <div class="tg-skillbar" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <span class="tg-skillname">3 Stars</span>
                                                    <span class="tg-skillpercentage">0%</span>
                                                    <div class="tg-skillbox">
                                                        <div class="tg-skillholder" data-percent="0%">
                                                            <div class="tg-skillbar" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tg-skill">
                                                    <span class="tg-skillname">2 Stars</span>
                                                    <span class="tg-skillpercentage">0%</span>
                                                    <div class="tg-skillbox">
                                                        <div class="tg-skillholder" data-percent="0%">
                                                            <div class="tg-skillbar" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tg-skill">
                                                    <span class="tg-skillname">1 Stars</span>
                                                    <span class="tg-skillpercentage">0%</span>
                                                    <div class="tg-skillbox">
                                                        <div class="tg-skillholder" data-percent="0%">
                                                            <div class="tg-skillbar" style="width: 0%;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <ul class="tg-comment">

											<li>
												<div class="tg-commenter">
	                                               	<div style="background-color: #ff944d; height:50px;     width: 50px;">
														<label style="    font-size: 30px;padding-top: 15px;    padding-left: 14px;">k								</label>
	                                                </div> -->
                                        <!-- <div class="tg-commenterinfo" style="margin-left: 57px;margin-top: -45px;">
						<div class="tg-authorhead">
							<div class="tg-authorname">
								<h3><a href="#">komal</a></h3>
								<time datetime="2016-10-10">2 days ago</time>
							</div>
							<div class="tg-ratingradio">
								<span class="tg-radio">
									<label for="fivestar"><span class="tg-stars"><span></span></span><i></i></label>
							    </span>
							</div>
						</div>
						<div class="tg-description" style="margin-top: -34px;">		
							<p>very good teacher.</p>
						</div>
					</div> -->
                                        <!-- </div>
											</li>

																				</ul> -->
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!--************************************
				Main End
		*************************************-->
    <!--************************************
				Footer Start
		*************************************-->

    <footer id="tg-footer" class="tg-footer tg-haslayout">
        <div class="tg-infobox">
            <div class="container">
                <div class="row">
                    <div class="tg-fcols">
                        <div class="tg-fcol">
                            <strong class="tg-logo"><a href="http://www.odishatutor.com/"><img src="http://www.odishatutor.com/uploads/settings/odishatutor_logo_1527957978.png" height="40px" width="180px" alt="OdishaTutor" title="OdishaTutor"></a></strong>
                            <div class="tg-description">
                                <p>An Open platform for India students , parents , tutors and training institute to communicate and provide or receieve educational services. .</p>
                            </div>
                            <ul class="tg-socialicons">
                                <li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="tg-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li class="tg-googleplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="tg-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-icon">
                                <i class="fa fa-bullhorn"></i>
                            </div>
                            <div class="tg-title">
                                <h3>Talk To Us</h3>
                            </div>
                            <ul class="tg-email">

                                <li><a href="mailto:care@odishatutor.com">care@odishatutor.com</a></li>

                                <li><a href="tel:+91 9114662031">Whats App : +91 9114662031</a></li>
                            </ul>
                        </div>
                        <div class="tg-fcol">
                            <div class="tg-icon">
                                <i class="fa fa-paper-plane-o"></i>
                            </div>
                            <div class="tg-title">
                                <h3>Stay Updated</h3>
                            </div>
                            <form class="tg-newsletter" action="" method="post">
                                <fieldset>
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <button type="submit" name="mail_submit"><i class="fa fa-check"></i></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--************************************
				Footer End
		*************************************-->