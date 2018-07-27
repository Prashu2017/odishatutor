<?php

namespace frontend\models;

use Yii;
use common\models\Course;
use common\models\Subjects;
use yii\helpers\ArrayHelper;
use common\models\Countries;
use common\models\States;
use common\models\Cities;
use common\models\Profession;
use yii\web\UploadedFile;

/**
 * This is the model class for table "tutor".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $phone
 * @property string $dob
 * @property string $age
 * @property string $gender
 * @property string $image
 * @property string $subjects
 * @property string $expertise_subject
 * @property integer $experience
 * @property string $professional
 * @property string $geographically_present
 * @property string $available_for
 * @property string $pricing
 * @property string $language
 * @property string $expertise_course
 * @property integer $digital_pen
 * @property string $describe_you
 * @property integer $country_id
 * @property integer $state_id
 * @property integer $city_id
 * @property string $pincode
 * @property string $street_address
 * @property string $website
 * @property string $previous_work_place
 * @property integer $created_by
 * @property integer $cerated_at
 * @property integer $updated_by
 * @property integer $updated_at
 * @property string $exam
 * @property string $university
 * @property string $year
 * @property string $percentage
 */
class Tutor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tutor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'phone', 'dob', 'gender', 'subjects', 'expertise_subject', 'experience', 'geographically_present', 'available_for', 'pricing', 'describe_you', 'country_id', 'state_id', 'city_id', 'pincode', 'street_address'], 'required'],
            [[  'experience', 'digital_pen', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
            [['dob'], 'safe'],
            [['firstname', 'lastname', 'phone', 'gender', 'image', 'subjects', 'professional', 'pricing', 'language','country_id', 'state_id', 'city_id',  'pincode', 'street_address', 'website', 'previous_work_place', 'day', 'avalable', 'from_time', 'upto_time'], 'string', 'max' => 255],
            [['age'], 'string', 'max' => 50],
            [['describe_you'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'phone' => 'Phone',
            'dob' => 'Date of birth',
            'age' => 'Age',
            'gender' => 'Gender',
            'image' => 'Image',
            'subjects' => 'Subjects',
            'expertise_subject' => 'Expertise Subject',
            'experience' => 'Experience',
            'professional' => 'Profession',
            'geographically_present' => 'Geographically Present',
            'available_for' => 'Available For',
            'pricing' => 'Pricing',
            'language' => 'Language',
            'expertise_course' => 'Expertise Course',
            'digital_pen' => 'Digital Pen',
            'describe_you' => 'Describe You',
            'country_id' => 'Country ID',
            'state_id' => 'State ID',
            'day' => 'Day',
            'avalable'=>'Available',
            'from_time'=> 'From',
            'upto_time'=> 'To',
            'city_id' => 'City ID',
            'pincode' => 'Pincode',
            'street_address' => 'Street Address',
            'website' => 'Website',
            'previous_work_place' => 'Previous Work Place',
            'created_by' => 'Created By',
            'created_at' => 'Cerated At',
            'updated_by' => 'Updated By',
            'updated_at' => 'Updated At',
            'exam' => '',
            'university' => '',
            'year' => '',
            'percentage' => '',
        ];
    }

    public function getCountry() {
        return $this->hasOne(Countries::className(), ['id' => 'country_id']);
    }

    public function getCountryList() {
        $list = ArrayHelper::map(Countries::find()->orderBy(['name' => SORT_ASC])->all(), 'id', 'name');
        return ['' => 'Select a Country'] + $list;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity() {
        return $this->hasOne(Cities::className(), ['id' => 'city_id']);
    }

    public function getCityList() {
        $list1 = ArrayHelper::map(Cities::find()->where(['state_id' => $this->state_id])->orderBy(['name' => SORT_ASC])->all(), 'id', 'name');
        return ['' => empty($list) ? 'Select a State First' : 'Select a City'] + $list1;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getState() {
        return $this->hasOne(States::className(), ['id' => 'state_id']);
    }

    public function getStateList() {
        $list = ArrayHelper::map(States::find()->where(['country_id' => $this->country_id])->orderBy(['name' => SORT_ASC])->all(), 'id', 'name');
        return ['' => empty($list) ? 'Select a Country First' : 'Select a State'] + $list;
    }

     public function beforeValidate() {
        $eThumb = isset($this->oldAttributes['image']) ? $this->oldAttributes['image'] : null;
        $this->image = $this->saveImage('image', null, $eThumb);
        /* end save hotel images */
        return parent::beforeValidate();
    }

    public function getUrl() {
        return empty($this->image) ? null : Yii::$app->params['mediaUrl'] . 'tutor/' . $this->image;
    }

    public static function getHierarchy() {
        $options = [];
         
        $parents = Profession::find()->where("parent_id=0")->all();
        foreach($parents as $id => $p) {
            $children = Profession::find()->where("parent_id=:parent_id", [":parent_id"=>$p->id])->all();
            $child_options = [];
            foreach($children as $child) {
                $child_options[$child->id] = $child->name;
            }
            $options[$p->name] = $child_options;
        }
        // print_r($options);
        // exit;
        return $options;
    }

    public function saveImage($attr, $classInstance = null, $existingImage = null, $deleteExisting = false) 
    {
        $instance = $classInstance == null ? $this : $classInstance;
        $file = UploadedFile::getInstance($instance, $attr);
        if ($deleteExisting) {
            return null;
        }
        if (empty($file->tempName)) {
            return $existingImage;
        }

        $folder = Yii::$app->params['uploadPath'] . "tutor";
        // if (!file_exists($folder)) {
        //     mkdir($folder, 0777, true);
        // }
        if (!empty($existingImage)) {
            @unlink($folder . '/' . $existingImage);
        }


        if (isset($file->tempName) && isset($file->name) && !empty($file->name) && !empty($file->tempName) && !$file->error) {
            $fileInfo = pathinfo($file->name);
            if (!isset($fileInfo['filename']) || !isset($fileInfo['extension'])) {
                return false;
            }
            $filename = $fileInfo['filename'] . '_' . strtotime("now") . '.' . $fileInfo['extension'];

            if ($file->saveAs($folder . '/' . $filename)) {
                return $filename;
            } else {
                return false;
            }
        } else {
            return false;
        }
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

    public function getExpertiseSubject()
    {
        $listSubject = Subjects::find()->select('id,name')->all();
            // ->where(['is_subcategory' => 'Yes'])
            // ->andWhere(['status' => 'active','approved' => 'active'])
            // ->all();
        $lists   = ArrayHelper::map( $listSubject,'name','name');
        return $lists;
    }

    public function beforeSave($insert) 
    {
        if ($insert) 
        {
            $this->created_by = Yii::$app->user->id;
            $this->user_id = Yii::$app->user->id;
            $this->created_at = strtotime('now');
        }

        $this->updated_by = Yii::$app->user->id;
        $this->updated_at = strtotime('now');
        $eThumb = isset($this->oldAttributes['image']) ? $this->oldAttributes['image'] : null;
        return parent::beforeSave($insert);
    }
}
