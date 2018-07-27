<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;


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
 * @property integer $gender
 * @property string $image
 * @property string $subjects
 * @property string $expertise_subject
 * @property integer $experience
 * @property string $professional
 * @property integer $geographically_present
 * @property integer $available_for
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
            [['id', 'firstname', 'lastname', 'phone', 'dob', 'age', 'gender', 'image', 'subjects', 'expertise_subject', 'experience', 'professional', 'geographically_present', 'available_for', 'pricing', 'language', 'expertise_course', 'digital_pen', 'describe_you', 'country_id', 'state_id', 'city_id', 'pincode', 'street_address', 'website', 'previous_work_place'], 'required'],
            [['id', 'gender', 'experience', 'geographically_present', 'available_for', 'digital_pen', 'country_id', 'state_id', 'city_id'], 'integer'],
            [['dob'], 'safe'],
            [['firstname', 'lastname', 'phone', 'image', 'subjects', 'expertise_subject', 'professional', 'pricing', 'language', 'expertise_course', 'describe_you', 'pincode', 'street_address', 'website', 'previous_work_place'], 'string', 'max' => 255],
            [['age'], 'string', 'max' => 50],
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
            'dob' => 'Dob',
            'age' => 'Age',
            'gender' => 'Gender',
            'image' => 'Image',
            'subjects' => 'Subjects',
            'expertise_subject' => 'Expertise Subject',
            'experience' => 'Experience',
            'professional' => 'Professional',
            'geographically_present' => 'Geographically Present',
            'available_for' => 'Available For',
            'pricing' => 'Pricing',
            'language' => 'Language',
            'expertise_course' => 'Expertise Course',
            'digital_pen' => 'Digital Pen',
            'describe_you' => 'Describe You',
            'country_id' => 'Country ID',
            'state_id' => 'State ID',
            'city_id' => 'City ID',
            'pincode' => 'Pincode',
            'street_address' => 'Street Address',
            'website' => 'Website',
            'previous_work_place' => 'Previous Work Place',
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

    public function beforeSave($insert) {
        print_r($_POST);
        exit;
        /* save hotel thumbnail */
        if ($insert) {
            $this->created_by = Yii::$app->user->id;
            $this->user_id = Yii::$app->user->id;
            $this->created_at = strtotime('now');
        }
        $this->updated_by = Yii::$app->user->id;
        $this->updated_at = strtotime('now');

        $eThumb = isset($this->oldAttributes['image']) ? $this->oldAttributes['image'] : null;
        $this->thumbnail = $this->saveImage('image', null, $eThumb, $this->deleteExisting);
        /* end save hotel images */
        return parent::beforeSave($insert);
    }

    public function saveImage($attr, $classInstance = null, $existingImage = null, $deleteExisting = false) {
        $instance = $classInstance == null ? $this : $classInstance;
        $file = UploadedFile::getInstance($instance, $attr);
        if ($deleteExisting) {
            return null;
        }
        if (empty($file->tempName)) {
            return $existingImage;
        }

        $folder = Yii::$app->params['uploadPath'] . strtolower(basename(get_class($instance)));
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
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
}
