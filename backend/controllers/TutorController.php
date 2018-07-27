<?php

namespace backend\controllers;

use Yii;
use frontend\models\Tutor;
use frontend\models\TutorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Schedule;
use common\models\Subjects;
use common\models\AcademicLevel;
use common\models\Cities;
use common\models\Countries;
use common\models\States;
use common\models\User;
use common\models\UserSearch;


/**
 * TutorController implements the CRUD actions for Tutor model.
 */
class TutorController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tutor models.
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
     * Displays a single Tutor model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
       
        $tutor = $this->findModel($id);
        
        $Cities = Cities::findOne($tutor->city_id);

        $States = States::findOne($Cities->state_id);
        $Countries = Countries::findOne($States->country_id);
        
        $address['country'] = $Countries->name;
        $address['state'] = $States->name;
        $address['city'] = $Cities->name;

        // exit;
        return $this->render('view', [
            'model' => $tutor,
            'address' => $address,
        ]);
    }

    /**
     * Creates a new Tutor model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tutor();
        $schedule = new Schedule();

        if ($model->load(Yii::$app->request->post()) && $schedule->load(Yii::$app->request->post())) 
            {
            // $model = Yii::$app->request->post();
           
            // $model['Tutor']['geographically_present'] = implode(', ', $model['Tutor']['geographically_present']);
            // $model['Tutor']['available_for'] = implode(', ', $model['Tutor']['available_for']);           
            // $model['Tutor']['expertise_course'] = implode(', ', $model['Tutor']['expertise_course']);

            // $model['Tutor']['exam'] = implode(', ', $model['exam']); 
            // unset($model['exam']);

            // $model['Tutor']['university'] = implode(', ', $model['university']);  
            // unset($model['university']);

            // $model['Tutor']['year'] = implode(', ', $model['year']);   
            // unset($model['year']);

            // $model['Tutor']['percentage'] = implode(', ', $model['percentage']); 
            // unset($model['percentage']);

            
        
            // // print_r($model);
            // foreach ($model as $value) {
            //    $value->save();
            // }
            // exit;
            // $model->save();
                    $edu = yii::$app->request->post();
                    
                    $model->geographically_present = implode(",", $model->geographically_present);
                    $model->available_for = implode(",", $model->available_for);
                    $model->expertise_course = implode(",", $model->expertise_course);
                    $model->exam = implode(",", $edu['exam']);
                    $model->year = implode(",", $edu['year']);
                    $model->percentage = implode(",", $edu['percentage']);
                    $model->university = implode(",", $edu['university']);
                    if(!empty($_FILES))
                    {
                        $model->image = Yii::$app->params['mediaUrl'] . 'tutor/'.$_FILES['Tutor']['name']['image'];
                    }
                   if($model->save())
                   {
                          return $this->redirect(['view', 'id' => $model->id]);
                   }    
        
            
        } else {
            return $this->render('create', [
                'model' => $model,
                'schedule' => $schedule,
            ]);
        }
    }

    /**
     * Updates an existing Tutor model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {

            $edu = yii::$app->request->post();
            $model->geographically_present = implode(",", $model->geographically_present);
            $model->available_for = implode(',',$model->available_for);
            $model->expertise_course = implode(",", $model->expertise_course);
            $model->exam = implode(",", $edu['exam']);
            $model->year = implode(",", $edu['year']);
            $model->percentage = implode(",", $edu['percentage']);
            $model->university = implode(",", $edu['university']);                         
            if(!empty($_FILES))
            {
                $model->image = Yii::$app->params['mediaUrl'] . 'tutor/'.$_FILES['Tutor']['name']['image'];
            }
            // print_r($model);
            // exit;
            if($model->save())
            {
                return $this->redirect(['view', 'id' => $model->id]);
            }  
        } 
        else 
        {
            $edu = yii::$app->request->post();
            $model->geographically_present = explode(',',$model->geographically_present);
            $model->available_for = explode(',',$model->available_for);
            $model->expertise_course = explode(',',$model->expertise_course);
            if(!empty($_FILES))
            {
                $model->image = Yii::$app->params['mediaUrl'] . 'tutor/'.$_FILES['Tutor']['name']['image'];
            }
            // $model->exam = explode(",", $edu['exam']);
            // $model->year = explode(",", $edu['year']);
            // $model->percentage = explode(",", $edu['percentage']);
            // $model->university = explode(",", $edu['university']);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Tutor model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tutor model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tutor the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tutor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

     public function actionTutor()
    {
       
        $teacher = User::find()->where(['role' => 20])->all();
        return $this->render('tutor', [
                    'model' => $teacher,
        ]);
    }
}
