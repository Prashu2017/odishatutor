<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $tot_user = User::find()->count();
        $tot_teacher = User::find()->where(['=','role', 20])->count();
        $tot_student = User::find()->where(['=','role', 10])->count();
        $tot_deactivated = User::find()->where(['=','status', 0])->count();
        $tot_active = User::find()->where(['=','status', 10])->count();
        // return $this->render('index');
        $data = array(
                        'tot_user' =>$tot_user,
                        'tot_teacher' => $tot_teacher,
                        'tot_student' => $tot_student,
                        'tot_deactivated' => $tot_deactivated,
                        'tot_active' =>$tot_active,             
                    );
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit;
                return $this->render('index', ['model'=>$data]);
    }

    /**
     * Login action.
     *
     * @return string
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
            return $this->goBack(); 
        } 
        else 
        { 
            return $this->render('login', [ 'model' => $model, ]); 
        } 

        if ($model->load(Yii::$app->request->post()) && $model->loginTeacher()) 
        { 
            return $this->goBack(); 
        } 
        else 
        { 
            return $this->render('login', [ 'model' => $model, ]); 
        } 
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
