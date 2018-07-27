<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use common\models\Countries;
use common\models\States;
use common\models\Cities;
// use frontend\controllers\CController;



/* @var $this yii\web\View */
/* @var $model common\models\Tutor */
/* @var $form yii\bootstrap\ActiveForm */
$items = ArrayHelper::map(Countries::find()->all(), 'id', 'name');
 

?>
<?php $form = ActiveForm::begin(['layout' => 'horizontal', 'options' => ['enctype' => 'multipart/form-data']]); ?>
     
<?php                  
$wizard_config = [
    'id' => 'stepwizard',
    'steps' => [
        1 => [
            'title' => 'Personal Profile',
            'icon' => 'glyphicon glyphicon-user',
            'content' => "<div class='form-group'>
                            <label for='first-name'>First Name:</label><br>
                            <input type='text' name='first-name' class='first-name form-control' id='first-name'>
                        </div>
                        <div class='form-group'>
                            <label for='last-name'>Last Name:</label><br>
                            <input type='text' name='last-name' class='last-name form-control' id='last-name'>
                        </div>
                        <div class='form-group'>
                            <label for='dob'>Dob:</label><br>
                            <input type='date' name='dob' class='form-control' id='dob'>
                        </div>
                        <div class='form-group'>
                            <label for='gender'>Gender:</label><br>
                            <input type='text' name='gender' class='form-control' id='gender'>
                        </div>
                        <div class='form-group'>
                            <label for='first-name'>Profile Image:</label><br>
                            ".Html::activeFileInput($model,'image',["class"=>"form-control btn btn-default btn-file"])."
                        </div>
                        <div class='form-group'>
                            <label for='phone'>Phone:</label><br>
                            <input type='text' name='phone' class='phone form-control' id='phone'>
                        </div>
                        <div class='form-group'>
                            <label for='website'>Website:</label><br>
                            <input type='url' name='website' class='form-control' id='website'>
                        </div>
                        <div class='form-group'>
                            <label for='describe_you'>Describe you:</label><br>
                            <textarea rows='4' cols='50' name='describe_you' class='form-control' id='describe_you'></textarea>
                        </div>
                            
                        <div class='form-group'>
                            <label for='language'>Language:</label><br>
                            <input type='text' name='language' class='form-control' id='language'>
                        </div>",
            'buttons' => [
                'next' => [
                    'title' => 'Next', 
                    'options' => [
                        'class' => 'disabled'
                    ],
                 ],
             ],
        ],
        2 => [
            'title' => 'Educational Profile',
            'icon' => 'glyphicon glyphicon-pencil',
            'content' => "<h3>Educational Profile:</h3>
                <div class='main'>
                    <div class='row form-add-w3ls first'>
                        <div class='col-md-12 col-sm-12 col-xs-12 col-lg-12 '>
                            <div class='col-md-3 col-sm-3 col-xs-3 col-lg-3 '>
                            <h4>Exam Passed:</h4>
                                <p><input type='text' name='exam[]' placeholder='Matric..'></p>
                            </div>
                            <div class='col-md-3 col-sm-3 col-xs-3 col-lg-3 '>
                            <h4>University: </h4>
                                <p><input type='text' name='university[]' placeholder='Patna University..' ></p>
                            </div>  
                            <div class='col-md-2 col-sm-2 col-xs-2 col-lg-2 form-left-w3l'>
                            <h4>Passing Year:</h4>
                                <p><input type='number' min='1970' max=2018 name='year[]' placeholder='2005'></p>
                            </div>
                            <div class='col-md-2 col-sm-2 col-xs-2 col-lg-2'>
                            <h4>Percentage:</h4>
                                <p> <input type='text' name='percentage[]' ></p>
                            </div>
                            <div class='col-md-2 col-sm-2 col-xs-2 col-lg-2 add'>
                                <a href='' class='add_field_button'>Add More</a>
                            </div>
                        </div>
                    </div>
                </div>",
            'skippable' => false,
        ],
        3 => [
            'title' => 'Professional Profile',
            'icon' => 'glyphicon glyphicon-road',
            'content' => "<div class='form-group'>
                            <label for='Geographically'>Geographically Present:</label><br>
                            <input type='checkbox' name='geographically_present' value='Online' id='geographically_present'>
                            <label for='Geographically' >Online</label><br>
                            <input type='checkbox' name='geographically_present' value='Offline' id='geographically_present' >
                            <label for='Geographically'>Offline</label><br>
                            <input type='checkbox' name='geographically_present' value='Both Offline/Online' id='geographically_present'>
                            <label for='Geographically'>Both Offline/Online</label><br>

                        </div>
                        <div class='form-group'>
                            <label for='available_for'>Available for:</label><br>
                            <input type='checkbox' name='available_for' value='Online' id='available_for'>
                            <label for='available_for' >Online</label><br>
                            <input type='checkbox' name='available_for' value='Offline' id='available_for' >
                            <label for='available_for'>Offline</label><br>
                        </div>
                        <div class='form-group'>
                            <label for='last-name'>Experience:</label><br>
                            <input type='number' name='experience' min='0' max='50' class='form-control' id='experience'>
                        </div>
                        <div class='form-group'>
                            <label for='previous_work_place'>Previous Company :</label><br>
                            <input type='text' name='previous_work_place' class='form-control' id='previous_work_place'>
                        </div>
                        <div class='form-group'>
                            <label for='Expertise Subject'>Main Subject</label><br>
                            <input type='text' name='expertise_subject' class='form-control' id='expertise_subject'>
                        </div>
                        <div class='form-group'>
                            <label for='subjects'>Subjects:</label><br>
                            <input type='text' name='subjects' class='form-control' id='subjects'>
                        </div>
                        <div class='form-group'>
                            <label for='professional'>Profession:</label><br>
                            <input type='text' name='professional' class='form-control' id='professional'>
                        </div>
                        <div class='form-group'>
                            <label for='pricing'>Pricing:</label><br>
                            <input type='text' name='pricing' class='pricing form-control' id='pricing'>
                        </div>
                        <div class='form-group'>
                            <label for='expertise_course'>Expertise Course:</label><br>
                            <input type='text' name='expertise_course' class='form-control' id='expertise_course'>
                        </div>
                        <div class='form-group'>
                            <label for='digital_pen'>Digital_pen:</label><br>
                            <input type='radio' name='digital_pen' value='Yes' id='digital_pen'>Yes
                            <input type='radio' name='digital_pen' value='No' id='digital_pen'>No
                        </div>",
        ],
        4 => [
            'title' => 'Contact Profile',
            'icon' => 'glyphicon glyphicon-home',
            'content' => '<div class="form-group">
                            <label for="last-name">Street Address:</label><br>
                            <input type="text" name="address"  class="form-control"  placeholder="Street Address" required="">
                        </div>
                        <div class="form-group">
                            <label for="previous_work_place">Country: </label><br>'.
                        
                             Html::activeDropDownList($model, "country_id",$model->countryList, [ 'onchange' => '$.get( "' . Yii::$app->urlManager->createUrl('/site/states') . '", {country_id : $(this).val()}, function( data ) {
                                 $("#state_id").html(data);
                                });
                            ', "class"=>"form-control"]
                            )
                             
                            
                        .'</div>
                        <div class="form-group">
                            <label for="Expertise Subject">State: </label><br>
                            '.Html::activeDropDownList($model, 'state_id',$model->stateList,["id"=>"state_id", 'onchange' => '$.get( "' . Yii::$app->urlManager->createUrl('/site/cities') . '", {state_id : $(this).val()}, function( data ) {
                                 $("#city_id").html(data);
                                });
                            ' , "class"=>"form-control"]).'
                        </div>
                        <div class="form-group">
                            <label for="subjects">City:</label><br>'.Html::activeDropDownList($model, 'city_id',$model->cityList,["id"=>"city_id", "class"=>"form-control"]).'
                            
                        
                        </div>
                        <div class="form-group">
                            <label for="professional">Profession:</label><br>
                            <input type="text" name="Pincode" class="form-control"  placeholder="Pin code" required="">
                        </div>',
        ],
    ],
    'complete_content' => "<input type='submit' class='form-control btn btn-success' value='Submit' >", // Optional final screen
    'start_step' => 1, // Optional, start with a specific step
];
?>

<?= \drsdre\wizardwidget\WizardWidget::widget($wizard_config); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <?php ActiveForm::end(); ?>