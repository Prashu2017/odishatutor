<?php



/* @var $this yii\web\View */

/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;

use yii\bootstrap\ActiveForm;

use yii\db\ActiveRecord;

use yii\bootstrap\Modal;

use yii\captcha\Captcha;

use frontend\models\ContactForm;

use frontend\models\TutorSearch;

use yii\bootstrap\Carousel;

use backend\models\Settings;

use backend\models\Gallery;

use backend\models\Tutor;

use common\models\User;







// $this->params['breadcrumbs'][] = $this->title;

// $ip = $_SERVER['REMOTE_ADDR'];

// $ip = '47.29.7.255';

//Load api and get ip data and decode it 

// $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));

//Load api and get ip data and decode it 

// $details2 = json_decode(file_get_contents('http://freegeoip.net/json/'.$ip ));



// print_r($details);

// print_r($details2);

// exit;

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

$submitUrl = 'site/findtutor';

  ?>



<!doctype html>

<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->

<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->

<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->

<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->





<head>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Tutor Directory A Complete Learning Source : Jobs</title>

	<meta name="description" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://www.odishatutor.com/uploads/settings/odishatutor_favicon%20_1529777061.ico" type="image/ico" sizes="16x16">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<link rel="stylesheet" href="css/bootstrap.min.css">

	<link rel="stylesheet" href="css/bootstrap-chosen.css">

	<link rel="stylesheet" href="css/bootstrap-timepicker.min.css">

	<link rel="stylesheet" href="css/normalize.css">

	<link rel="stylesheet" href="css/font-awesome.min.css">

	<link rel="stylesheet" href="css/jquery.countdown.css">

	<link rel="stylesheet" href="css/customScrollbar.css">

	<link rel="stylesheet" href="css/simplyscroll.css">

	<link rel="stylesheet" href="css/owl.carousel.css">

	<link rel="stylesheet" href="css/owl.theme.css">

	<link rel="stylesheet" href="css/jquery-ui.css">

	<link rel="stylesheet" href="css/transitions.css">

	<link rel="stylesheet" href="css/main.css">

	<link rel="stylesheet" href="css/color.css">

	<link rel="stylesheet" href="css/responsive.css">

	<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

</head>

<body>

	<!--[if lt IE 8]>

		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

	<![endif]-->

	<!--************************************

			Wrapper Start					

	*************************************-->

	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

		<!--************************************

				Header Start					

		*************************************-->

		<header id="tg-header" class="tg-header tg-haslayout">

			<div class="container-fluid">

				<div class="row">

					<div class="col-sm-12 col-xs-12">

						<strong class="tg-logo">

							<a href="index.php"><img src="<?= Yii::$app->params['mediaUrl'] .'settings/'.$model->logo ?>" alt="image description" height="50px" width="95px" style="margin: -15% -23%;">
							</a>

							<?= $model->site_name; ?> 

						</strong>



						<div class="tg-navigationarea">

							<nav id="tg-nav" class="tg-nav">

								<div class="navbar-header">

									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">

										<span class="sr-only">Toggle navigation</span>

										<span class="icon-bar"></span>

										<span class="icon-bar"></span>

										<span class="icon-bar"></span>

									</button>

								</div>

								<div id="tg-navigation" class="tg-navigation collapse navbar-collapse">

									<ul>

										<li><a href="index-2.html">Home</a></li>

										<li class="tg-hasdropdown">

											<a href="javascript:void(0);">Job</a>

											<ul class="tg-dropdownmenu">

												<li><a href="jobs.html">Job</a></li>

												<li><a href="job-detail.html">Job Detail</a></li>

											</ul>

										</li>

										<li class="tg-hasdropdown tg-active">

											<a href="javascript:void(0);">Tutor</a>

											<ul class="tg-dropdownmenu">

												<li class="tg-active"><a href="tutors.html">tutor</a></li>

												<li><a href="tutor-detail.html">tutor Detail</a></li>

											</ul>

										</li>

										<li class="tg-hasdropdown">

											<a href="javascript:void(0);">Tuition Centre</a>

											<ul class="tg-dropdownmenu">

												<li><a href="tuition-center.html">Tuition Centre</a></li>

												<li><a href="tutioncentre-detail.html">Tuition center Detail</a></li>

												<li><a href="job-detail-by-tutioncenter.html">job Detail by Tuition center</a></li>

											</ul>

										</li>

										<li class="tg-hasdropdown">

											<a href="javascript:void(0);">dashboard</a>

											<ul class="tg-dropdownmenu">

												<li class="tg-hasdropdown">

													<a href="javascript:void(0);">dashboard tuition center</a>

													<ul class="tg-dropdownmenu">

														<li><a href="dashboard-tuition-centres.html">dash board tuition center</a></li>

														<li><a href="dashboard-tuitions-team.html">team</a></li>

														<li><a href="dashboard-tuition-centres-post-job.html">post job</a></li>

														<li><a href="dashboard-tuition-manage-jobs.html">manage jobs</a></li>

														<li><a href="dashboard-tuition-favorites-listing.html">favorites list</a></li>

														<li><a href="dashboard-tuition-Schedule.html">schedule</a></li>

														<li><a href="dashboard-tuition-invoices.html">invoices</a></li>

														<li><a href="dashboard-tuition-profile-setting.html">profile setting</a></li>

														<li><a href="dashboard-tuition-centres-academics-settings.html">academic settings</a></li>

														<li><a href="dashboard-tuition-centres-privacy-settings.html">privacy setting</a></li>

														<li><a href="dashboard-tuition-security-setting.html">security setting</a></li>

														<li><a href="dashboard-tuition-upgrade-package.html">upgrade package</a></li>

													</ul>

												</li>

												<li class="tg-hasdropdown">

													<a href="javascript:void(0);">dashboard tutor</a>

													<ul class="tg-dropdownmenu">

														<li><a href="dashboard-tutor.html">dashboard tutor</a></li>

														<li><a href="dashboardtutor-favorites-listing.html">favorites list</a></li>

														<li><a href="dashboardtutor-myschedule.html">schedule</a></li>

														<li><a href="dashboard-tutor-invoices.html">invoices</a></li>

														<li><a href="dashboard-tutor-profile-settings.html">profile setting</a></li>

														<li><a href="dashboard-tutor-privacy-settings.html">privacy setting</a></li>

														<li><a href="dashboard-tutor-security-settings.html">security setting</a></li>

														<li><a href="dashboard-tutor-upgradepackage.html">upgrade package</a></li>

													</ul>

												</li>

											</ul>

										</li>

										<li class="tg-hasdropdown">

											<a href="javascript:void(0);">

												<i class="hidden-xs fa fa-navicon"></i>

												<span class="hidden-lg hidden-md hidden-sm">Pages</span>

											</a>

											<ul class="tg-dropdownmenu">

												<li><a href="job-detail-by-sutudent.html">job Detail by Student</a></li>

												<li><a href="how-it-works.html">How it works?</a></li>

												<li><a href="contactus.html">Contact</a></li>

												<li><a href="404error.html">404</a></li>

												<li><a href="news-grid.html">news</a></li>

												<li><a href="news-detail.html">news detail</a></li>

											</ul>

										</li>

									</ul>

								</div>

							</nav>

							<div class="tg-admin">

								<div class="tg-guest">

									<figure class="tg-adminpic">

										<a href="#"><img src="images/icons/icon-01.png" alt="image description"></a>

									</figure>

									<div class="tg-message">

										<em>Howdy, Guest!</em>

										<div class="tg-loginsinguplinks">

											<div class="dropdown tg-dropdown">

												<button id="tg-signin" class="tg-signin tg-btndropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sign In</button>

												<div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-signin">

													<h2>Hi. Welcome Back!</h2>

													<form id="tg-formsignin" class="tg-form tg-formsignin">

														<fieldset>

															<div class="form-group">

																<input type="email" name="email" class="form-control" placeholder="Email">

															</div>

															<div class="form-group">

																<input type="password" name="password" class="form-control" placeholder="password">

															</div>

															<div class="form-group">

																<button type="submit" class="tg-btn">signin</button>

																<a class="tg-forgotpassword" href="#">Forgot password?</a>

															</div>

														</fieldset>

													</form>

												</div>

											</div>

											Or

											<div class="dropdown tg-dropdown">

												<button id="tg-signup" class="tg-signup tg-btndropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Signup</button>

												<div class="dropdown-menu tg-dropdownbox" aria-labelledby="tg-signup">

													<h2>Signup Now!</h2>

													<form id="tg-formsignup" class="tg-form tg-formsignup">

														<fieldset>

															<div class="row">

																<div class="col-xs-12">

																	<div class="tg-radiobox">

																		<span class="tg-joinustitle">I Want To Join As:</span>

																		<div class="tg-joinus">

																			<span class="tg-radio">

																				<input type="radio" id="student" name="joinas" value="student" checked>

																				<label for="student">student</label>

																			</span>

																			<span class="tg-radio">

																				<input type="radio" id="tutor" name="joinas" value="tutor">

																				<label for="tutor">tutor</label>

																			</span>

																			<span class="tg-radio">

																				<input type="radio" id="academy" name="joinas" value="academy">

																				<label for="academy">academy</label>

																			</span>

																		</div>

																	</div>

																</div>

																<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

																	<div class="form-group">

																		<input type="text" name="firstname" class="form-control" placeholder="First Name">

																	</div>

																</div>

																<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

																	<div class="form-group">

																		<input type="text" name="lastname" class="form-control" placeholder="Last Name">

																	</div>

																</div>

																<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

																	<div class="form-group">

																		<input type="email" name="email" class="form-control" placeholder="Email">

																	</div>

																</div>

																<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

																	<div class="form-group">

																		<input type="password" name="password" class="form-control" placeholder="Password">

																	</div>

																</div>

																<div class="col-xs-12">

																	<div class="form-group">

																		<p>After registering you agree to our <a href="#">Terms and Conditions</a></p>

																	</div>

																</div>

																<div class="col-xs-12">

																	<div class="form-group">

																		<div class="tg-checkboxbox">

																			<span class="tg-checkbox">

																				<input type="checkbox" id="notrobot" name="notrobot" value="human">

																				<label for="notrobot">I am not a robot</label>

																			</span>

																			<a class="tg-refreshcaptcha" href="#"><img src="images/icons/icon-02.jpg" alt="image description"></a>

																		</div>

																	</div>

																</div>

																<div class="col-xs-12">

																	<button type="submit" class="tg-btn">Signup Now</button>

																</div>

																<div class="col-xs-12">

																	<div class="tg-otheroptionforsignup">

																		<h2>Also Signup Using</h2>

																		<ul class="tg-signinoption">

																			<li class="tg-facebook">

																				<a href="#">

																					<i class="fa fa-facebook"></i>

																					<i>Facebook</i>

																				</a>

																			</li>

																			<li class="tg-google">

																				<a href="#">

																					<i class="fa fa-google-plus"></i>

																					<i>google+</i>

																				</a>

																			</li>

																			<li class="tg-twitter">

																				<a href="#">

																					<i class="fa fa-twitter"></i>

																					<i>twitter</i>

																				</a>

																			</li>

																			<li class="tg-linkedin">

																				<a href="#">

																					<i class="fa fa-linkedin"></i>

																					<i>linkedin</i>

																				</a>

																			</li>

																		</ul>

																	</div>

																</div>

																<div class="col-xs-12">

																	<div class="tg-alreadyhaveaccount">

																		<h3>Already have an account? <a href="#">Sigin.</a></h3>

																	</div>

																</div>

															</div>

														</fieldset>

													</form>

												</div>

											</div>

										</div>

									</div>

								</div>

								<div class="tg-user">

									<div class="dropdown tg-dropdown">

										<figure class="tg-adminpic">

											<a href="#"><img src="images/icons/icon-01.png" alt="image description"></a>

										</figure>

										<button id="tg-usermenu" class="tg-usermenu tg-btndropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

											<em>howdy, Anjela doe!</em>

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

													<a href="#">

														<i class="fa fa-sign-out"></i>

														<span>Logout</span>

													</a>

												</li>

											</ul>

										</div>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</header>