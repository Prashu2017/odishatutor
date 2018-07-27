<?php

namespace frontend\models;

use Yii;
use common\models\Course;
use yii\helpers\ArrayHelper;


/**
 * This is the model class for table "quickrequest".
 *
 * @property int $id
 * @property string $name
 * @property string $mobile
 * @property string $email
 * @property string $board
 * @property string $class
 * @property string $subject
 * @property string $studyplace
 * @property string $city
 * @property string $locality
 * @property string $pincode
 * @property string $message
 * @property string $created_at
 */
class Quickrequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'quickrequest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'mobile', 'email', 'board', 'class', 'subject', 'studyplace', 'city', 'locality', 'pincode', 'message'], 'required'],
            [['created_at'], 'safe'],
            [['name', 'mobile', 'email', 'board', 'class', 'subject', 'studyplace', 'city', 'locality', 'pincode', 'message'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mobile' => 'Mobile',
            'email' => 'Email',
            'board' => 'Board',
            'class' => 'Class',
            'subject' => 'Subject',
            'studyplace' => 'Studyplace',
            'city' => 'City',
            'locality' => 'Locality',
            'pincode' => 'Pincode',
            'message' => 'Message',
            'created_at' => 'Created At',
        ];
    }

    public function getExpertiseCourse()
    {
        $listCourse = Course::find()->select('id,name')->all();
            // ->where(['is_subcategory' => 'Yes'])
            // ->andWhere(['status' => 'active','approved' => 'active'])
            // ->all();
        $list   = ArrayHelper::map( $listCourse,'name','name');
        return $list;
    }

    public function beforeSave($insert) 
    {
        if ($insert) 
        {
            $this->created_at = strtotime('now');
        }
        return parent::beforeSave($insert);
    }
}
