<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\models\User;
use common\models\Student;
use common\models\Subjects;
use frontend\models\TutorSearch;
use common\models\Cities;
use common\models\Countries;
use common\models\States;
use common\models\Schedule;
use common\models\AcademicLevel;
use app\models\Treviewrating;
use yii\helpers\Url;
use frontend\models\Tutor;
use yii\web\Response;
use yii\helpers\Json;
/**
 * Site controller
 */
class SiteController extends Controller
{
    
    /**
     * @inheritdoc
     */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'only' =>  ['logout', 'signup', 'about'],
    //             'rules' => [
    //                 [
    //                     'actions' => ['signup'],
    //                     'allow' => true,
    //                     'roles' => ['?'],
    //                 ],
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //                 [ 
    //                     'actions' => ['about'], 
    //                     'allow' => true, 
    //                     'roles' => ['@'], 
    //                     'matchCallback' => function ($rule, $action) 
    //                     { 
    //                         return User::isUserAdmin(Yii::$app->user->identity->username); 
    //                     } 
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TutorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays tutorpage.
     *
     * @return mixed
     */
    public function actionIndex2()
    {
        return $this->render('index2');
    }

    public function actionFindtutor()
    {
        $searchModel = new TutorSearch(); 
        $sear = $_POST;

        if(!empty($sear) ||isset($sear) || !empty($_SESSION['pincode'])){  
         //    if(!empty($sear)){
         //    	$pincode = $_POST['pincode'];
         //    	$subject = $_POST['subject'];
        	// }else{
        	// 	$pincode = $_SESSION['pincode'];
        	// 	$subject = $_SESSION['subject'];
        	// }
            
         //    $_SESSION['subject'] = $subject;
         //    $_SESSION['pincode'] = $pincode; 

        	if(!empty($sear['index']) || isset($sear['index'])){
	        	if(!empty($sear)){
	            	$pincode = $sear['pincode'];
	            	$subject = $sear['subject'];
	            	
	        	}else{
	        		$pincode = $_SESSION['pincode'];
	        		$subject = $_SESSION['subject'];
	        	}
	        	$_SESSION['subject'] = $subject;
            	$_SESSION['pincode'] = $pincode;

            	$tutors = Tutor::find()->where(['pincode' => $pincode])->andWhere(['expertise_subject' => $subject])->all();
	        }
	        if(!empty($sear['newsearch']) || isset($sear['newsearch'])){
	        	if(!empty($sear)){
	            	$pincode = $sear['pincode'];
	            	$subject = $sear['subject'];
	            	$geolocation = $sear['geolocation'] ? $sear['geolocation'] : null;
	            	$price = $sear['price'] ? $sear ['price'] : null ;
	            	$gender = $sear['gender'] ? $sear ['gender'] : null ;
	            	$from = $sear['from'] ? $sear ['from'] : null ;
	            	$to = $sear['to'] ? $sear ['to'] : null ;
	            	$timeslot = $sear['timeslot'] ? $sear ['timeslot'] : null ;
	        	}else{
	        		$pincode = $_SESSION['pincode'];
	        		$subject = $_SESSION['subject'];
	        	}

	        	$_SESSION['subject'] = $subject;
            	$_SESSION['pincode'] = $pincode;
	        	$tutors = Tutor::find()
					  ->where(['pincode' => $pincode])
					  ->andWhere(['expertise_subject' => $subject])
					   ->andWhere(['gender' => $gender])
					   ->andWhere(['geographically_present' => $geolocation])
					  ->all();
	        	
	        }
            
             
            

            // $tutors = Tutor::find()->where(['pincode' => $pincode])->andWhere(['expertise_subject' => $subject])->all();
            
            if(!empty($tutors)){

                $tutor = [];
                foreach ($tutors as  $tut) {
                    $cities = Cities::findOne($tut->city_id);
                    $states = States::findOne($cities->state_id);
                    $countries = Countries::findOne($states->country_id);
                    $tut->country_id = $countries->name;
                    $tut->state_id = $states->name;
                    $tut->city_id = $cities->name;
                    // $tutor[] = $tut;
                    array_push($tutor, $tut) ;        
                } 
                // $model = Json::encode($tutor);
                // echo "<pre>";
                // print_r($tutor);
                // exit;
                return $this->render('findtutor', [ 
                    'tutors' => $tutor,
             ]);
            }else{
                Yii::$app->session->setFlash('error', "No Tutor Match With Your Search. Try Again With Different Parameter");
                // $this->redirect('http://odishatutor.com/site/findtutor');
                return $this->render('findtutor', [ 
                    'tutors' => null,
             ]);
                // header('location:http://odishatutor.com/');
            }
        }else{
            Yii::$app->session->setFlash('error', "Please check pincode!");
            $this->redirect('http://odishatutor.com/');
            // header('location:http://odishatutor.com/');
        } 
    }


    public function actionNewtutor()
    {
    	
        $searchModel = new TutorSearch();  
        $sear = Yii::$app->request->post();
        if(!empty($sear) ||isset($sear)){  
            if(!empty($sear)){
            	$pincode = $sear['pincode'];
            	$subject = $sear['subject'];
            	$geolocation = $sear['geolocation'];
            	$price = $sear['price'];
            	$gender = $sear['gender'];
            	$from = $sear['from'];
            	$to = $sear['to'];
            	$timeslot = $sear['timeslot'];
        	}else{
        		$pincode = $_SESSION['pincode'];
        		$subject = $_SESSION['subject'];
        	}
            
            $_SESSION['subject'] = $subject;
            $_SESSION['pincode'] = $pincode; 
            

            $tutors = Tutor::find()
					  ->where(['pincode' => $pincode])
					  ->andWhere(['expertise_subject' => $subject])
					   ->andWhere(['gender' => $gender])
					   ->andWhere(['geographically_present' => $geolocation])
					  ->all();

            if(!empty($tutors)){
                $tutor = [];
                foreach ($tutors as  $tut) {
                    $cities = Cities::findOne($tut->city_id);
                    $states = States::findOne($cities->state_id);
                    $countries = Countries::findOne($states->country_id);
                    $tut->country_id = $countries->name;
                    $tut->state_id = $states->name;
                    $tut->city_id = $cities->name;
                    // $tutor[] = $tut;
                    array_push($tutor, $tut) ;        
                } 
                // $model = Json::encode($tutor);
                // echo "<pre>";
                // print_r($tutor);
                // exit;
                return $this->render('findtutor', [ 
                    'tutors' => $tutor,
             ]);
            }else{
                Yii::$app->session->setFlash('error', "Please fill the tutor search form correctly!");
                $this->redirect('http://odishatutor.com/');
                // header('location:http://odishatutor.com/');
            }
        }else{
            Yii::$app->session->setFlash('error', "Please check pincode!");
            $this->redirect('http://odishatutor.com/');
            // header('location:http://odishatutor.com/');
        } 
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin() 
    { 
        if (!\Yii::$app->user->isGuest) 
        { 
            return $this->goHome();
        } 
        $model = new LoginForm(); 
        if ($model->load(Yii::$app->request->post()) && $model->loginAdmin()) 
        { 
            return Yii::$app->getResponse()->redirect(Url::to('index.php?r=site%2Fcontact'), [ 'model' => $model, ]);
        } 
        else if ($model->load(Yii::$app->request->post()) && $model->loginTeacher()) 
        { 

            if(!empty(Yii::$app->user))
            {
                $id = Yii::$app->user->identity->id;
                $tutor = Tutor::findOne(['user_id' => $id]);
                if(!empty($tutor->created_at))
                {
                    // echo Html::a('My dashboard', ['tutor/view', 'id' => $tutor->id]);
                    return Yii::$app->getResponse()->redirect(Url::to('tutor/dashboard?id='.$tutor->id), [ 'model' => $model, ]);
                }

            }
            else
            {
                return Yii::$app->getResponse()->redirect(Url::to('index.php?r=tutor%2Fcreate'), [ 'model' => $model, ]);
            }
            // if(){
            //     return Yii::$app->getResponse()->redirect(Url::to('index.php?r=tutor%2Fcreate'), [ 'model' => $model, ]);
            // }else{
            //     return Yii::$app->getResponse()->redirect(Url::to('index.php?r=tutor%2Fcreate'), [ 'model' => $model, ]);
            // }
        } 
        else if ($model->load(Yii::$app->request->post()) && $model->loginStudent()) 
        { 

            if(!empty(Yii::$app->user))
            {
                $id = Yii::$app->user->identity->id;
                $student = Student::findOne(['user_id' => $id]);

                if(!empty($student->created_at))
                {
                    // echo Html::a('My dashboard', ['tutor/view', 'id' => $tutor->id]);
                    return Yii::$app->getResponse()->redirect(Url::to('student/dashboard?id='.$id), [ 'model' => $model, ]);
                }else{
                    return Yii::$app->getResponse()->redirect(Url::to('student/dashboard?id='.$id), [ 'model' => $model, ]);
                }

            }
            else
            {
                return Yii::$app->getResponse()->redirect(Url::to('student/dashboard?id='.$student->id), [ 'model' => $model, ]);
            }
            
        } 
        else 
        { 
            return $this->render('login', [ 'model' => $model, ]); 
        } 
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionTutor()
    {
        // echo "<pre>";
        // $post = Yii::$app->request->post();
        // print_r($post);
        // exit;
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }


        public function actionProfile($id)
        {
            // echo $id;
            $tut = Tutor::findOne(['id' => $id]);
            $tuto = User::findOne(['id' => $tut['user_id']]);
            // echo "<pre>";
            // print_r($tuto);
            // exit;
            return $this->render('profile', [ 'results' => $tut, 'tuto' => $tuto]);
            
        }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    public function actionError()
    {
        $error = Yii::app()->errorHandler->error;

        if( $error )
        {
            $this -> render( 'error', array( 'error' => $error ) );
        }
    }

    public function actionCities() {
        $tutor = new \frontend\models\Tutor();
        $tutor->state_id = Yii::$app->request->get('state_id');


        $cityList = $tutor->cityList;
        foreach ($cityList as $id => $city) {
            echo '<option value="' . $id . '">' . $city . '</option>';
        }
    }

    public function actionStates() {
        $tutor = new \frontend\models\Tutor();
        $tutor->country_id = Yii::$app->request->get('country_id');

        
        $stateList = $tutor->stateList;
        foreach ($stateList as $id => $state) {
            echo '<option value="' . $id . '">' . $state . '</option>';
        }
    }

    public function actionSubject() {
        // $subject = new \common\models\Subjects();
        $academic_level_id = Yii::$app->request->get('id');
        $query = new \yii\db\Query;
        $query->select(['*'])
              ->from('subjects')
              ->where(['academic_level_id' => $academic_level_id ]);
        $command = $query->createCommand();
        $result = $command->queryAll();
        // echo "<pre>";
        // print_r($result);
        // exit;
        // $subjectList = $subject->subjectList;
        foreach ($result as $id => $subject) {
            echo '<option value="' . $subject['name'] . '">' . $subject['name'] . '</option>';
        }
    }
}
