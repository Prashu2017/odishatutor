<?php

namespace frontend\models;

use Yii;
use common\models\Course;
use yii\helpers\ArrayHelper;
use common\models\Countries;
use common\models\States;
use common\models\Cities;
use common\models\Profession;
use yii\web\UploadedFile;
/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property string $dob
 * @property int $gender
 * @property string $image
 * @property string $class
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'first_name', 'last_name', 'mobile', 'dob', 'gender', 'image', 'class'], 'required'],
            [['user_id' ], 'integer'],
            [['dob'], 'safe'],
            [['first_name', 'last_name', 'mobile', 'class','gender'], 'string', 'max' => 255],
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
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'mobile' => 'Mobile',
            'dob' => 'Dob',
            'gender' => 'Gender',
            'image' => 'Image',
            'class' => 'Class',
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
        return empty($this->image) ? null : Yii::$app->params['mediaUrl'] . 'student/' . $this->image;
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

        $folder = Yii::$app->params['uploadPath'] . "student";
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

    public function beforeSave($insert) 
    {
        if ($insert) 
        {
            $this->user_id = Yii::$app->user->id;
        }
        $this->user_id = Yii::$app->user->id;
        $eThumb = isset($this->oldAttributes['image']) ? $this->oldAttributes['image'] : null;
        return parent::beforeSave($insert);
    }
}
