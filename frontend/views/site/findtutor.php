<?php
require('header.php');
/* @var $this yii\web\View */

/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Subjects;
use yii\helpers\ArrayHelper;
use common\models\AcademicLevel;
use yii\web\Response;
use yii\helpers\Json;
/* @var $this yii\web\View */
/* @var $model app\models\Tutorview */
/* @var $form ActiveForm */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.alert-danger .alert{margin: 95px 0px 0px 0px;}
.tg-innerbanner {color: #fff;height: 113px;display: flex;flex-direction: column;justify-content: center;align-items: center;align-content: center;background: #D2B48C;}
.tg-parallaximg {overflow: hidden;position: relative;}
.tg-haslayout {width: 100%;float: left;}
.tg-innerbannercontent {width: 100%;float: left;text-align: center;}
.tg-pagetitle {width: 100%;float: left;}
.tg-pagetitle h1 {margin: 0;color: #fff;font-size: 40px;line-height: 33px;text-transform: capitalize;}
#tg-sidebar {width: 100%;float: left;}
.tg-formjobsearch {width: 100%;float: left;border: 1px solid #ddd;}
.tg-formjobsearch fieldset {margin: 0;border: 0;width: 100%;float: left;padding: 20px;}
.tg-formjobsearch .tg-widget {margin: 0;padding: 0;border:0;}
tg-widget {width: 100%;float: left;padding: 20px;border: 1px solid #ddd;margin: 0 0 30px;}
.tg-widgetcontent {width: 100%;float: left;}
.tg-widgetcontent .form-group {width: 100%;float: left;margin: 0 0 10px;}
.tg-select {color: #999;width: 100%;float: left;position: relative;text-transform: capitalize;}
.tg-widgetcontent .tg-select select, .tg-widgetcontent .tg-geolocationicon .form-control {height: 40px;line-height: 18px;border-width: 1px;padding: 10px;}
.tg-select select {width: 100%;z-index: 1;color: #999;height: 50px;padding: 15px;line-height: 20px;position: relative;appearance: none;-moz-appearance: none;-webkit-appearance: none;text-transform: capitalize;}
textarea, select, .tg-select select, .form-control, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {color: #484848;outline: none;height: 50px;font-size: 14px;border-radius: 0;box-shadow: none;line-height: 20px;padding: 15px 20px;display: inline-block;vertical-align: middle;border: 1px solid #ddd;text-transform: capitalize;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
.tg-select select option:first-child {color: #999;}
/*============================================*
 *			      Footer Style	     		  *	
 *============================================*/
.tg-footer{background: #f2f1f6;}
.tg-quicklinks{width:100%;float:left;padding: 60px 0;background: linear-gradient(to right bottom,#ffd985,#e69f06);}
.tg-infobox{border-bottom: 1px solid #ddd;width: 100%;float: left;padding: 60px 0;}
.tg-fcols{width: 100%;float: left;}
.tg-fcol{width: 100%;float: left;padding: 0 40px;min-height: 200px;}
.tg-fcol + .tg-fcol{border-left: 1px solid #ddd;}
.tg-infobox .tg-fcol{width: 25%;float:left;text-align:center;}
.tg-infobox .tg-fcol:first-child{width: 50%;}
.tg-fcol .tg-logo{width: 220px;float: none;display: block;
	margin: 0 auto 30px;}
.tg-fcol .tg-description{padding: 0 0 30px;}
.tg-fcol .tg-description p{margin: 0;}
.tg-fcol .tg-socialicons{width: 100%;float: left;text-align: center;}
.tg-fcol .tg-socialicons li{float: none;display: inline-block;
	vertical-align: middle;}
.tg-fcol .tg-icon{padding: 0 0 30px;}
.tg-fcol .tg-title{padding: 0 0 30px;}
.tg-email{width: 100%;float: left;list-style: none;line-height: 17px;}
.tg-email li{width: 100%;float: left;padding: 0 0 20px;line-height: inherit;list-style-type: none;}
.tg-email li a{color:#484848;display: inline-block;vertical-align: middle;}
.tg-newsletter{width: 100%;float: left;}
.tg-newsletter fieldset{width: 100%;float: left;margin: 0;
	padding: 0;border: 0;position: relative;}
.tg-newsletter fieldset .form-control{z-index: 1;width: 100%;
	float: left;position: relative;border-color: #ddd;background: transparent;padding: 15px 36px 15px 10px;}
.tg-newsletter fieldset button{top: 16px;right: 10px;z-index: 2;
	font-size: 16px;line-height: 16px;position: absolute;	background: transparent;}
.tg-quicklinks .tg-fcol{width: 33.33%;padding: 0 15px;}
.tg-quicklinks .tg-fcol .tg-title{padding: 0 0 20px;}
.tg-quicklinks .tg-fcol ul{	width: 100%;float: left;font-size: 14px;line-height: 17px;	list-style: none;	text-transform: capitalize;}
.tg-quicklinks .tg-fcol ul li a{padding: 5px;display: inline-block;	vertical-align: middle;}
.tg-quicklinks .tg-fcol ul li a:before{	top: 4px;
	left: 0;color: #999;content: '\f0da';font-size: 14px;
	line-height: 10px;position: absolute;font-family: 'FontAwesome';}
.tg-quicklinks .tg-fcol ul li:last-child a{padding:5px ;}
.tg-quicklinks .tg-fcol ul li:last-child a:before{
	left: auto;	right: 0;content: '\f101';}
.tg-quicklinks .tg-fcol ul li:hover{padding: 0 0 15px 10px;}
.tg-footerbar{width: 100%;	float: left;padding: 20px 0;
	background: #404040;}
.tg-footernav{float: left;text-transform: uppercase;
	font:400 13px/16px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-footernav ul{width: 100%;float: left;list-style: none;
	line-height: inherit;}
.tg-footernav ul li{float: left;padding: 0 0 0 20px;
	line-height: inherit;list-style-type: none;}
.tg-footernav ul li:first-child{padding: 0;}
.tg-footernav ul li a{color: #999;display: block;line-height: inherit;}
.tg-copyright{color: #999;float: right;	font:400 13px/16px 'Montserrat', Arial, Helvetica, sans-serif;}
/*============================================
 			Global Elements						
==============================================*/
.tg-haslayout{width:100%;float:left;}
.tg-main-section{padding: 80px 0;}
.tg-location-map{width: 100%;float: left;height: 500px;}
.tg-btn-sm{padding: 0 20px;line-height: 30px;}
.tg-btn{color: #fff;padding: 0 50px;background: #fff;position:relative;text-align:center;display: inline-block;vertical-align: middle;border: 2px solid #ddd;text-transform: uppercase;font:14px/46px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-btn:hover{color: #fff !important;}
.tg-btn-lg{ width: 100%;}
.tg-socialicons{overflow: hidden;list-style: none;text-align:center;line-height: 30px;}
.tg-socialicons li{	float: left;padding: 0 4px;line-height: inherit;list-style-type: none;}
.tg-socialicons li a{width:30px;height:30px;	color: #fff;
	display:block;background:#000;overflow:hidden;
	border-radius: 50%;}
.tg-socialicons li.tg-facebook a{background:#3b5998;}
.tg-socialicons li.tg-twitter a{background:#55acee;}
.tg-socialicons li.tg-linkedin a{background:#007bb5;}
.tg-socialicons li.tg-googleplus a{background:#dd4b39;}
.tg-socialicons li.tg-rss a{background:#ff6600;}
.tg-socialicons li a i{display:block;font-size:13px;text-align:center;	line-height:inherit;}
.tg-socialicons li a:hover{}
.tg-verticalmiddle{	margin: 0 -1px;	float: none !important;
	display: inline-block;vertical-align: middle;}
.tg-description {width: 100%;float: left;text-align: justify;}
.tg-bglight{ background:#f7f7f7;}
.tg-bgdark{ background:#373542;}
.tg-stars span,
.tg-stars{width:75px;height: 12px;float: left;line-height:12px;
	position:relative;}
.tg-stars span:after,.tg-stars:before {top: 0;left: 0;font-size: 12px;line-height: 12px;position: absolute;letter-spacing: 4px;font-family: 'FontAwesome';content: '\f005 \f005 \f005 \f005 \f005';}
.tg-stars:before{color: #999;content: '\f006 \f006 \f006 \f006 \f006';}
.tg-stars span {width:78%;overflow: hidden;
}
.tg-stars span:after{color: #fdb900 !important;}
.row.no-gutters{
	margin-right: 0;
	margin-left: 0;
}
.no-gutters > [class^="col-"],
.no-gutters > [class*="col-"],
.row.no-gutters > [class^="col-"],
.row.no-gutters > [class*="col-"]{padding-right: 0;padding-left: 0;}
.tg-sectionhead{width: 100%;float: left;padding: 0 0 40px;text-align: center;}
.tg-sectionhead h2{margin: 0;padding: 20px 0;font-size: 40px;line-height: 46px;position: relative;display: inline-block;vertical-align: middle;text-transform: capitalize;}
.tg-sectionhead h2 span{display: block;}
.tg-sectionhead h2:before,
.tg-sectionhead h2:after,
.tg-sectionhead h2 span:before,
.tg-sectionhead h2 span:after{width: 3px;height: 20px;content: '';position: absolute;-webkit-transform: skewX(-15deg);-moz-transform: skewX(-15deg);-ms-transform: skewX(-15deg);-o-transform: skewX(-15deg);transform: skewX(-15deg);}
.tg-sectionhead h2:before,
.tg-sectionhead h2:after{top: 0;left: 15px;}
.tg-sectionhead h2 span:before,
.tg-sectionhead h2 span:after{left: 0;bottom: 0;}
.tg-sectionhead h2:after{ left: 25px }
.tg-sectionhead h2 span:after{left: 10px;}
.tg-sectionhead .tg-description{padding: 40px 0 0;}
.tg-sectionhead .tg-description p{margin: 0;}
.tg-usericon{color:#fff;width:22px;float: left;font-size:12px;background:#000;overflow: hidden;line-height:22px;border-radius:3px;position:relative;text-align: center;text-transform:capitalize;}
.tg-usericon + .tg-usericon{margin: 0 0 0 6px;}
.tg-usericonholder{width: 84px;	display: block;	font-style: normal;}
.tg-iconvarified .tg-usericonholder{width: 77px;}
.tg-iconfeatured{background: #f58634;}
.tg-iconvarified{background: #77ab38;}
.tg-usericon i,
.tg-usericon span{line-height: 22px;display: inline-block;
	vertical-align: middle;}
.tg-usericon i{width: 22px;	text-align: center;}
.tg-usericon span{padding: 0 8px 0 0;}
.tg-usericon:focus,
.tg-usericon:hover{color: #fff;}
.tg-usericon.tg-iconfeatured:hover{width: 84px;}
.tg-usericon.tg-iconvarified:hover{width: 77px;}
.tg-btnroundprev,
.tg-btnroundnext{width: 50px;height: 50px;display: block;background: #fff;overflow: hidden;font-size: 20px;line-height: 48px;border-radius: 50%;border: 1px solid #999;
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
.tooltip{color: #fff;width: 210px;height: 21px;font-size: 10px;line-height: 21px;padding: 0 !important;text-transform: uppercase;}
.tooltip.right {margin-left: -14px;}
.tooltip.top {margin-top: -30px;}
.tooltip .tooltip-inner{margin: 0;padding: 0;max-width: 100%;border-radius:0;width: 100% !important;}
.tooltip.right .tooltip-arrow{top: 100%;left: 0 !important;border-top-color: #f58634;border-width: 10px 7px 0 0;margin: -3px 0 0 !important;border-right-color: transparent;}
.tg-leftalign{text-align: left;}
.tg-leftalign h2{display: block;}
.tg-icon{width: 100%;float: left;text-align: center;}
.tg-icon i{	display: block;	font-size: 30px;line-height: 26px;
	text-align: center;}
.tg-title{width: 100%;float: left;}
.tg-title h3{margin: 0;font-size: 20px;line-height: 20px;
	position: relative;text-transform: capitalize;}
.tg-title.tg-icon{text-align: left;}
.tg-title.tg-icon h3{padding: 0 0 0 30px;}
.tg-title.tg-icon h3:before{top:0;left:0;position:absolute;}
.tg-themeform{width:100%;	float:left;}
.tg-themeform fieldset{	width:100%;	float:left;	margin:0;	padding:0;	border:0;}
.tg-themeform fieldset .form-group{	width:100%;float:left;}
.tg-themeform fieldset textarea{width:100%;height:260px;float:left;	resize:none;}
/*++++++++++++++++++++++++++++++++++++++++++++++
                             header
  ==============================================*/
.tg-header{top:auto;left:0;width:100%;z-index:100;padding:10px 43px;position:absolute;}
.tg-logo{float:left;}
.tg-navigationarea{float:right;	padding:7px 0;display: none;}
.tg-nav{display:inline-block;vertical-align:middle;text-transform:uppercase;font:14px/20px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-navigation{width:100%;float:left;padding:0;}
.tg-navigation > ul{width:100%;float:left;}
.tg-navigation ul{list-style:none;}
.tg-navigation ul li{position:relative;list-style-type:none;}
.tg-navigation > ul > li{float:left;padding:5px 10px;line-height:inherit;}
.tg-navigation ul li a{	display:block;	position:relative;}
.tg-navigation > ul > li> a{color:#484848;line-height:inherit;}
.tg-navigation > ul > li > a:before{top:0;left:0;width:100%;height:2px;	content:'';	opacity:0;	visibility:hidden;	position:absolute;}
.tg-navigation > ul > li.tg-active > a:before,.tg-navigation > ul > li > a:hover:before{top:100%;opacity:1;	visibility:visible;}
.tg-dropdownmenu{top:200%;left:0;margin:0;opacity:0;width:230px;font-size:12px;line-height:35px;background:#fff;visibility:hidden;position:absolute;text-transform: capitalize;}
.tg-dropdownmenu li{padding:0 15px;position:relative;line-height:inherit;}
.tg-dropdownmenu li + li{ border-top:1px solid #ddd;}
.tg-dropdownmenu li a{color:#999;line-height:inherit;}
.tg-hasdropdown:hover > .tg-dropdownmenu{top:100%;opacity:1;
	visibility:visible;}
.tg-hasdropdown .tg-hasdropdown:before{top:0;right:15px;color:#999;font-size:14px;content:'\f105';position:absolute;line-height:inherit;font-family:'FontAwesome';}
.tg-dropdownmenu .tg-dropdownmenu{left: 100%;}
.tg-dropdownmenu .tg-hasdropdown:hover>.tg-dropdownmenu{top: 0;}
.tg-navigation ul li:nth-last-child(1) .tg-dropdownmenu,
.tg-navigation ul li:nth-last-child(2) .tg-dropdownmenu{
	left: auto;	right: 0;}
.tg-navigation ul li:nth-last-child(1) .tg-dropdownmenu .tg-dropdownmenu,.tg-navigation ul li:nth-last-child(2) .tg-dropdownmenu .tg-dropdownmenu {left: auto;right: 100%;}
.fa-facebook-f:before, .fa-facebook:before {content:"\f09a";}
.tg-admin{position:relative;margin:0 0 0 15px;padding:0 0 0 25px;display:inline-block;vertical-align:middle;}
.tg-fcol .tg-socialicons {width: 100%;float: left;text-align: center;}
.tg-socialicons {overflow: hidden;list-style: none;text-align: center;line-height: 30px;}
.tg-admin:before{top:0;left:0;color:#999;content:'';font-size:12px;line-height:30px;position:absolute;}
.tg-guest{width:100%;float:left;}
.tg-adminpic{width:30px;height:30px;float:left;overflow:hidden;margin:0 10px 0 0;border-radius:50%;}
.tg-adminpic a{	display:block;	border-radius:50%;}
.tg-adminpic a img{display:block;}
.tg-guest .tg-message{width: 100px;float: right;}
.tg-guest .tg-message em,.tg-user.tg-usermenu em{display:block;}
.tg-user .tg-usermenu em,.tg-guest .tg-message em{font:13px/16px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-loginsinguplinks{width: 100%;float: left;font-size:12px;line-height:15px;position: relative;}
.tg-dropdown{position: static;display: inline-block;}
.tg-btndropdown{color:#484848;outline: none;display: none;background: transparent;}
.tg-dropdownbox{border: 0;margin: 0;top: 100px;left: auto;opacity: 0;right: 80px;padding: 20px;display: block;background: #fff;border-radius: 0;position:absolute;visibility: hidden;}
.tg-dropdownbox:before{width: 0;height: 0;right: 36px;content: '';bottom: 100%;position: absolute;border-bottom: 10px solid #fff;border-left: 7px solid transparent;border-right: 7px solid transparent;}
.tg-dropdownbox[aria-labelledby="tg-signin"]{ width: 310px; }
.tg-dropdownbox[aria-labelledby="tg-signup"]{ width: 610px; }
.tg-dropdown.open .tg-dropdownbox{	top: 30px;	opacity: 1;	visibility: visible;}
.tg-dropdownbox h2{	margin: 0 0 30px;	font-size: 16px;	line-height: 19px;	text-transform: capitalize;}
.tg-form{	width: 100%;	float: left;}
.tg-form fieldset{	width: 100%;	float: left;	padding: 0;	margin: 0;	border: 0;}
.tg-form fieldset .form-group:last-child{ margin: 0; }
.tg-form fieldset .form-control{ width: 100%; }
.tg-form fieldset .tg-btn{ padding: 0 30px; }
.tg-forgotpassword{	float: right;	font-size: 14px;	color: #55acee;	margin: 18px 7px;}
.tg-form.tg-formsignup fieldset .form-group{
	width: 100%;	float: left;	margin: 0 0 20px;}
.tg-radiobox{	width: 100%;	float: left;	margin: 0 0 20px;	padding: 0 0 20px;	text-align: center;	border-bottom: 1px solid #ddd;}
.tg-joinustitle,.tg-joinus{	display: inline-block;	vertical-align: middle;}
.tg-joinustitle{	text-transform: capitalize;	font:14px/17px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-joinus .tg-radio{	width: auto;	float: none;	display: inline-block;	vertical-align: middle;}
.tg-joinus .tg-radio label{	color: #999;	font:14px/17px 'Open Sans', Arial, Helvetica, sans-serif;}
.tg-form.tg-formsignup p{	margin: 0;	color: #999;}
.tg-form.tg-formsignup p a{ color: #55acee; }
.tg-checkboxbox{	width: 100%;	float: left;	padding: 15px;	border-radius: 3px;	background: #f9f9f9;	border: 1px solid #ddd;}
.tg-checkboxbox .tg-checkbox{	width: auto;	margin: 16px 0;}
.tg-checkboxbox .tg-checkbox input[type=checkbox] + label:before {	top: 0;	width: 28px;	height: 28px;	font-size: 16px;	line-height: 24px;	border: 2px solid #c1c1c1;}
.tg-checkboxbox .tg-checkbox label{	text-transform: none;	padding: 6px 0 5px 43px;font-family: 'Open Sans', Arial, Helvetica, sans-serif;}
.tg-refreshcaptcha{float: right;}
.tg-otheroptionforsignup{width: 100%;float: left;font-size: 13px;line-height: 13px;margin: 30px 0 0;padding: 30px 0 0;border-top: 1px solid #ddd;}
.tg-signinoption{clear: both;margin: -5px;padding: 0 0 20px;overflow: hidden;list-style: none;display: none;}
.tg-signinoption li{width: 50%;float: left;padding: 5px;line-height: inherit;list-style-type: none;}
.tg-signinoption li a{	color: #fff;	padding: 18px;	display: none;	text-align: center;	line-height: inherit;}
.tg-signinoption li.tg-facebook a{background: #2e5894;}
.tg-signinoption li.tg-google a{background: #e04b33;}
.tg-signinoption li.tg-twitter a{background: #00adcf;}
.tg-signinoption li.tg-linkedin a{background: #2099c6;}
.tg-signinoption li a i,.tg-signinoption li a i{	font-style: normal;	margin: 0 0 0 10px;	padding: 0 0 0 10px;	line-height: inherit;	display: inline-block;	vertical-align: middle;	text-transform: capitalize;	border-left: 1px solid #fff;}
.tg-signinoption li a i.fa{	border: 0;margin: 0;	padding: 0;}
.tg-alreadyhaveaccount{clear: both;padding: 20px;overflow: hidden;text-align: center;background: #f2f1f6;margin: 10px 0px -7px;}
.tg-alreadyhaveaccount h3{margin: 0;font-size: 14px;line-height: 17px;text-transform: none;}
.tg-alreadyhaveaccount h3 a{ color: #55acee; }
.tg-user .tg-usermenu{ margin: 7px 0; }
.tg-user .tg-usermenu em{position: relative;padding: 0 15px 0 0;text-transform: uppercase;}
.tg-user .tg-usermenu em:before{top: 50%;right: 0;margin: -5px 0 0;content: '\f107';font-size: 14px;line-height: 10px;position: absolute;font-family: 'FontAwesome';}
.tg-dropdownbox[aria-labelledby="tg-usermenu"]{
	padding: 0;	width: 210px;}
.tg-dropdownbox[aria-labelledby="tg-usermenu"] time{
	display: block;	padding: 20px;	text-align: center;}
.tg-dropdownbox time strong{display: block;	text-transform: uppercase;font:400 14px/12px 'Montserrat', Arial, Helvetica, sans-serif;}
.tg-dropdownbox time strong + strong{color:#484848;	font-size: 36px;line-height: 28px;padding:5px 0 0;text-transform:none;}
.tg-dropdownbox > ul{width: 100%;float: left;list-style: none;
	font:400 13px/35px 'Montserrat', Arial, Helvetica,sans-serif;}
.tg-quicklinks .tg-fcol:first-child { width: 50%;}
.tg-quicklinks .tg-fcol {  width: 25%; float: left;text-align: center;}
.tg-dropdownbox > ul > li{padding: 0 20px;line-height: inherit;
	list-style-type: none;border-top: 1px solid #ddd;}
.tg-dropdownbox > ul > li > a{color: #999;display: block;
	line-height: inherit;}
.tg-dropdownbox > ul > li > a > i{width: 25px;}
.tg-dropdownbox > ul > li > a > i,
.tg-dropdownbox > ul > li > a > span{display: inline-block;
	vertical-align: middle;}
.tg-dropdown .tg-dropdownbox[aria-labelledby="tg-usermenu"]{right: 62%;}
.tg-dropdown.open .tg-dropdownbox[aria-labelledby="tg-usermenu"]{top: 50px;}
.tg-login .tg-admin .tg-guest,
.tg-admin .tg-user{display: none;}
.tg-login .tg-admin .tg-user{ display: block; }
/*==============================================
			Featured Tutors						
==============================================*/
.tg-featuredtutors{	clear: both;	overflow: hidden;	background: #fff;	margin: -30px 0 0;}
.tg-tutor{float: left;padding-top: 30px;padding-bottom: 30px;	border-bottom: 1px solid #ddd;}
.tg-tutor:nth-child(odd){padding-right: 15px;}
.tg-tutor:nth-child(even){padding-left: 15px;}

.tg-tutordp figcaption{width: 100%;	text-align: center;}
.tg-tutordp figcaption .tg-usericon{display: inline-block;
	vertical-align: middle;}
.tg-tutordp > a{display: block;margin: 0 0 10px;}
.tg-tutordp > a img{width: 100%;height: auto;display: block;}
.tg-tutorinfo{overflow: hidden;    padding: 0px 0px 0px 15px;}
.tg-tutor .tg-jobhead {padding: 0 0 20px;}
.tg-tutor .tg-jobhead1 {padding: 0 0 20px;}
.tg-tutor .tg-priceperhour, .tg-tutor .tg-priceperhour1{font-size: 30px;line-height: 30px;text-align: right;}
.tg-tutor .tg-priceperhour em{display: block;}
.tg-tutor .tg-priceperhour1 em{display: block;}
.tg-subjects{width: 100%;float: left;font-size: 13px;line-height: 14px;	padding: 0 0 4px;}
#stars{ margin-left: -19px;}
.tg-jobhead .tg-stars{margin: 4px 0 3px;}
.tg-jobhead1 .tg-stars{margin: 4px 0 3px;}
#tg-header > div > div > div > strong > a > img{margin:0px 0px !important;width: 25%;}
body > footer{	display: none;}
.tg-jobsmetadata {    width: 100%;    float: left;    font-size: 13px;    list-style: none;    line-height: 16px;}
.tg-jobsmetadata li:first-child { padding-left: 0;  text-transform: capitalize;}
input[type="range"] {
    display: block;
    width: 68%;
    margin: -20px -2px -20px 34px;
}
#last{float: right;}
.tg-themerangeslider{background: #fff !important}
</style>

<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout tg-parallaximg" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-05.jpg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-xs-12">
				<div class="tg-innerbannercontent">
					<div class="tg-pagetitle">
						<h1>Highly Capable Tutors</h1>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

		<!--******************	Inner Banner End	*********************-->

		<!--*******************	Main Start	*****************************-->

		<main id="tg-main" class="tg-main tg-haslayout">

			<div class="container">

				<div class="row">

					<div id="tg-twocolumns" class="tg-twocolumns">

						<div class="col-lg-9 col-md-8 col-sm-7 col-xs-12 pull-right">

							<div id="tg-content" class="tg-content">

								<div class="tg-tutors tg-tutorsgrid">

									<?php

									if(!empty($tutors)){
									
										foreach ($tutors as $value) {
									?>

									<div class="tg-tutor">

										<figure class="tg-tutordp">

											

											<img src="<?= Yii::$app->params['mediaUrl'] .'tutor/'. $value['image'] ?>" style="height:120px; width:120px" alt="image description">

											<figcaption>

												<a class="tg-usericon tg-iconfeatured" href="#">

													<em class="tg-usericonholder">

														<i class="fa fa-bolt"></i>

														<span>featured</span>

													</em>

												</a>

												<a class="tg-usericon tg-iconvarified" href="#">

													<em class="tg-usericonholder">

														<i class="fa fa-shield"></i>

														<span>varified</span>

													</em>

												</a>
												

											</figcaption>
										<ul class="tg-jobsmetadata">
    											<li style="text-transform: capitalize;"><i class="fa fa-map-marker"></i>
												<?= $value['city_id'] ?>,<?= $value['state_id'] ?>, <?= $value['country_id'] ?></li>		
											</ul>

										</figure>
									<div class="tg-tutorinfo">
										<div class="tg-jobhead">
											<span class="tg-priceperhour"><?= $value['pricing'] ?> </span>
												<h3><a href="#"><?= $value['firstname'].$value['lastname'] ?></a>/ <?= ucfirst($value['gender']) ?></h3>
												<div class="tg-subjects"><?= ucfirst($value['professional']) ?></div>
												<ul class="tg-jobsmetadata">
													<li><span class="tg-stars"><span></span></span></li>
													<!-- <li><a href="#"><i class="fa fa-heart tg-like"></i></a></li> -->
													<li>
													<a href="<?php
														$url = "http://odishatutor.com/tutor/view?id=".$value['id'];
														$url = urlencode($url);
														echo $url = urldecode($url);
														 //echo Yii::$app->urlManager->createUrl($url) 
														?>"> view</a> 
													</li>
												</ul>
											</div>
											<div class="tg-description">
												<p><?= $value['describe_you'] ?></p>
											</div>
										</div>
									</div>
									<?php
								}
							}
							else{
									echo "No Tutor Match Search Criteria";
							}

							?>

									

								</div>

							</div>

						</div>

						<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12 pull-left">

							<aside id="tg-sidebar" class="tg-sidebar">

								<form class="tg-formjobsearch" action="/site/findtutor" method="POST">
									<input type="hidden" name="_csrf-frontend" value="<?=Yii::$app->request->getCsrfToken()?>" />
									<fieldset>
										<div class="tg-widget">
											<div class="tg-widgettitle">
												<h3>Categories</h3>
											</div>
											<div class="tg-widgetcontent">
												<div class="form-group">
													<div class="tg-select">
														<?php
											                $academicCategory=ArrayHelper::map(AcademicLevel::find()->asArray()->all(), 'id', 'name');
										                ?>
				                						<?= Html::dropDownList('academic', null, $academicCategory, ['prompt'=>'-Academic Level-','class' => 'form-control','onchange'=>'$.post( "'.Yii::$app->urlManager->createUrl(['site/subject?id=']).'"+$(this).val(), function( data ) {$( "select#subject" ).html( data );

					                 							 }); ']);           
				        								?>
													</div>
												</div>
												<div class="form-group">
													<h5>Subjects</h5>
													<div class="tg-select">
														<?php
				                                        $dataPost=ArrayHelper::map(Subjects::find()->asArray()->all(), 'name', 'name');

				                    					echo Html::dropDownList('subject', null, $dataPost, ['id'=>'subject','class'=>'form-control',]);
				                        				?>
													</div>
												</div>
												<div class="form-group">
													<h5>Pincode</h5>
													<div class="tg-select">

														<input type="text" name="pincode" class="form-control" placeholder="pincode">

													</div>

												</div>
												<div class="form-group">
													<h5>Geo-location</h5>
													<div class="tg-select">
														<select name="geolocation">
															<option value="Online"> Online</option>
															<option value="Offline">Offline </option>
															<option value="Both Online/Online"> Both Online/Online</option>
														</select>
													</div>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<div class="tg-widget">
											<div class="tg-widgettitle">
												<h3>Fee Range</h3>
											</div>
											<div class="tg-widgetcontent">
												<div id="tg-feerangeslider" class="tg-feerangeslider tg-themerangeslider">
													<span id="first">100</span>
													<input type="range" id="price" min="100" max="1000">
													<span id="last">1000</span>
												</div>
												<div class="tg-amountbox">
													<input type="text" id="tg-feerangeamount" name="price"readonly>
												</div>
											</div>
										</div>
									</fieldset>
									<fieldset>
										<div class="tg-widget">
											<div class="tg-widgettitle">
												<h3>Gender</h3>
											</div>
											<div class="tg-widgetcontent">
												<div class="tg-genderradio">
													<span class="tg-radio">
														<input type="radio" id="male" name="gender" value="male" checked="">
														<label for="male"><span>male</span></label>
													</span>

													<span class="tg-radio">

														<input type="radio" id="female" name="gender" value="female">

														<label for="female"><span>female</span></label>

													</span>

													<span class="tg-radio">

														<input type="radio" id="both" name="gender" value="both">

														<label for="both"><span>both</span></label>

													</span>

												</div>

											</div>

										</div>

									</fieldset>

									

									

									
									<fieldset>

										<div class="tg-widget">

											<div class="tg-widgettitle">

												<h3>Time Slots</h3>

											</div>

											<div class="input-group tg-timepicker">

												<input id="tg-timepicker1" type="text" class="form-control input-small" placeholder="From" name="from">

												<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>

											</div>

											<div class="input-group tg-timepicker">
												<input id="tg-timepicker2" type="text" class="form-control input-small" placeholder="T0" name="to">
												<span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
											</div>

											<div class="tg-widgetcontent">

												<div class="tg-timeslotradio">

													<span class="tg-radio">

														<input type="radio" id="timeslotone" name="timeslot" value="all" checked="">

														<label for="timeslotone">All</label>

													</span>

													<span class="tg-radio">

														<input type="radio" id="timeslottwo" name="timeslot" value="10:00 - 11:00">

														<label for="timeslottwo">10:00 - 11:00</label>

													</span>

													<span class="tg-radio">

														<input type="radio" id="timeslotthree" name="timeslot" value="11:00 - 12:00">

														<label for="timeslotthree">11:00 - 12:00</label>

													</span>

													<span class="tg-radio">

														<input type="radio" id="timeslotfour" name="timeslot" value="12:00 - 13:00">

														<label for="timeslotfour">12:00 - 13:00</label>

													</span>

													<span class="tg-radio">

														<input type="radio" id="timeslotfive" name="timeslot" value="13:00 - 14:00">

														<label for="timeslotfive">13:00 - 14:00</label>

													</span>

												</div>

											</div>
											<input type="submit" name="newsearch" value="New Search">

										</div>

									</fieldset>

								</form>

							</aside>

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

		************************************-->
	

		<footer id="tg-footer" class="tg-footer tg-haslayout">

			

			<div class="tg-quicklinks">

				<div class="container">

					<div class="row">

						<div class="tg-fcols">

							<div class="tg-fcol">

								<strong class="tg-logo"><a href="http://odishatutor.com/"><img src="http://www.odishatutor.com/uploads/settings/odishatutor_logo_1527957978.png" height="40px" width="180px"  alt="OdishaTutor" title="OdishaTutor"></a></strong>

								<div class="tg-description">

									<p>Adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam nostrud exercitation ullamco laboris nisi ut aliquip exeaodo consequat aute irure dolor.</p>

								</div>

								<ul class="tg-socialicons">

									<li class="tg-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>

									<li class="tg-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>

						

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

									<li><a href="mailto:info@odishatutor.com">info@odishatutor.com</a></li>

									<li><a href="mailto:care@odishatutor.com">care@odishatutor.com</a></li>
									
								</ul>

							</div>

							<div class="tg-fcol">

								<div class="tg-icon">

									<i class="fa fa-paper-plane-o"></i>

								</div>

								<div class="tg-title">

									<h3>Stay Updated</h3>

								</div>

								<form class="tg-newsletter" action="http://mydesignhoard.com/HTML/tutor/index_submit" method="post" enctype="text/plain">

									<fieldset>

										<input type="email" class="form-control" name="email" placeholder="Your Email">

										<button type="submit"><i class="fa fa-check"></i></button>

									</fieldset>

								</form>

							</div>

						</div>

					</div>

				</div>

			</div>

			<div class="tg-footerbar">

				<div class="container">

					<div class="row">

						<div class="col-sm-12 col-xs-12">

							<nav id="tg-footernav" class="tg-footernav">

								<ul>

									<li class="tg-active"><a href="http://odishatutor.com/">Home</a></li>

									<!-- <li><a href="#">jobs</a></li> -->

									<li><a href="#">tutors</a></li>

									<!-- <li><a href="#">Academies</a></li> -->

									<li><a href="#">How it works?</a></li>

									<li><a href="#">Contact</a></li>

									<!-- <li><a href="#">Pages</a></li> -->

								</ul>

							</nav>

							

						</div>

					</div>

				</div>

			</div>

		</footer>

		<!--************************************

				Footer End

		*************************************-->

	</div>

	<!--************************************

			Wrapper End

	*************************************-->
	<script type="text/javascript">
		var p = document.getElementById("price"),
		    res = document.getElementById("tg-feerangeamount");

		p.addEventListener("input", function() {
		    res.value = p.value;
		}, false); 
	</script>

	</body>





</html>


