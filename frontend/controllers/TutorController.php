<?php

namespace frontend\controllers;

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
use app\models\Studentrequest;
use app\models\Treviewrating;


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

        $sreq = new Studentrequest();
        $user = User::findOne($tutor->user_id);

      
        if ($sreq->load(Yii::$app->request->post())){

            
            $sql = "insert into studentrequest (student_id, tutor_id, name, email, mobile, subject, message, time_prefence) values ('$sreq->student_id','$sreq->tutor_id', '$sreq->name', '$sreq->email', '$sreq->mobile', '$sreq->subject', '$sreq->message', '$sreq->time_prefence')";
           
            $result = Yii::$app->db->createCommand($sql)->execute();
            

            if($result) {
                $user = User::findOne($tutor->user_id);
                $email = $user->email;
                // Yii::$app->mailer->compose()
                // ->setFrom('from@domain.com')
                // ->setTo('to@domain.com')
                // ->setSubject('Message subject')
                // ->setTextBody('Plain text content')
                // ->setHtmlBody('<b>HTML content</b>')
                // ->send();
                Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom('info@odishatutor.com')
                    ->setSubject($sreq->subject)
                    ->setTextBody($sreq->message)
                    ->send();

                Yii::$app->session->setFlash('success', "Your request send successfully we will contact you soon.");
                return $this->render('view', [
                    'model' => $tutor,
                    'address' => $address,
                    'mode' => $sreq,
                    'user' => $user,
                ]);
            } else {
                Yii::$app->session->setFlash('error', "Please Login First");
            }  
            return $this->redirect(['site/findtutor']);
        }

        $treview = new Treviewrating();
        if ($treview->load(Yii::$app->request->post())){
            $treview = $_POST;
            $t_id = $treview['Treviewrating']['tutor_id'];
            $u_id = $treview['Treviewrating']['student_id'];
            $rve =  $treview['Treviewrating']['review'];
            $rtng = $treview['Treviewrating']['ratings'];
            $sql = "insert into treviewrating (tutor_id, user_id, review, ratings) values ('$t_id', '$u_id', '$rve', '$rtng')";
            $ret = Yii::$app->db->createCommand($sql)->execute();
            if($ret) {
                $student = User::findOne($u_id);
                $email = $user->email;
                Yii::$app->mailer->compose()
                    ->setTo($email)
                    ->setFrom('info@odishatutor.com')
                    ->setSubject($sreq->subject)
                    ->setTextBody($sreq->message)
                    ->send();

                Yii::$app->session->setFlash('success', "Thanks to rate and review.");
                return $this->render('view', [
                    'model' => $tutor,
                    'address' => $address,
                    'mode' => $sreq,
                    'user' => $user,
                    'treview' => $treview,
                ]);
            } else {
                Yii::$app->session->setFlash('error', "Please Login First");
            }  
            return $this->redirect(['site/findtutor']);
        }

        return $this->render('view', [
            'model' => $tutor,
            'address' => $address,
            'mode' => $sreq,
            'user' => $user,
            'treview' => $treview,
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
        // $schedule = new Schedule();

        if ($model->load(Yii::$app->request->post())) 
        {
            $model = Yii::$app->request->post();
            // $schedule = $model['Schedule'];
            
            
            $tutor = (object)$model['Tutor'];
            // print_r($model->university);
            // print_r($model->year);
            // print_r($model->percentage);
            echo "<pre>";
            print_r($tutor);
            echo "</pre>";
            exit;
            // exit;
            $model->geographically_present = implode(', ', $tutor->geographically_present);
            $model->available_for = implode(', ', $tutor->available_for);           
            $model->expertise_course = implode(', ', $tutor->expertise_course);
            $model->exam = implode(', ', $tutor->exam); 
            $model->university = implode(', ', $tutor->university);  
            $model->year = implode(', ', $tutor->year);   
            $model->percentage = implode(', ', $tutor->percentage); 
            // $model->day = implode(', ',$model->day); 
            // $model->avalable = implode(', ',$model->avalable); 
            // $model->from_time = implode(', ',$model->from_time); 
            // $model->upto_time = implode(', ',$model->upto_time); 

            // if(!empty($_FILES))
            // {
            //     $model['Tutor']['image']= Yii::$app->params['mediaUrl'] . 'tutor/'.$_FILES['Tutor']['name']['image'];
            // }
            echo "<pre>";print_r($model);echo "</pre>";
            exit;
            // foreach ($model as $value) {
            //    $value->save();
            //    // if($model->save())
            //    //  {
            //         return $this->redirect(['view', 'id' => $model->id]);
            //     } 
            // }
                      
        
            
        } else {
            return $this->render('create', [
                'model' => $model,
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
        // $ed = Yii::$app->request->post();
        // $tutor = (object)$model['Tutor'];
        // print_r($model);
        // // print_r($ed['exam']);
        // exit;

        if ($model->load(Yii::$app->request->post())) {

            $edu = yii::$app->request->post();
            $model->geographically_present = implode(",", $model->geographically_present);
            $model->available_for = implode(',',$model->available_for);
            $model->expertise_course = explode(",", $model->expertise_course);
                                 
            if(!empty($_FILES))
            {
                $model->image = Yii::$app->params['mediaUrl'] . 'tutor/'.$_FILES['Tutor']['name']['image'];
            }
            
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

    /**
     * Displays dashboard.
     *
     * @return string
     */
    public function actionDashboard()
    {
        
        // $model = $this->findModel($id);
        return $this->render('dashboard');
    }
}
