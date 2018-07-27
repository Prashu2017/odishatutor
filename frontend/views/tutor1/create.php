<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
use yii\captcha\Captcha;
use frontend\models\ContactForm;

                
$this->title = 'Complete Your Tutor Profile';
// $this->params['breadcrumbs'][] = ['label' => 'Tutors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
 if (Yii::$app->user->isGuest) 
                {
                   
                echo "<a href='site/login' class='modal-form'>Sign In</a>
                <a href='site/signup' class='modal-form'>Sign Up</a>"; 
                
                } 
                else 
                {
                    echo '
                           <form method="POST" action="/site/logout">
                           <input type="submit" value="Logout('.Yii::$app->user->identity->username.')" class="btn btn-warning pull-right" style="margin:-6% 0%">
                           </form>
                          ';
              }
?>
	<div class="clearfix"> </div>
 <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>





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
 <!--  -->

