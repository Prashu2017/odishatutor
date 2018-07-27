<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
use common\models\Course;
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
            [['user_id', 'gender'], 'integer'],
            [['dob'], 'safe'],
            [['first_name', 'last_name', 'mobile', 'image', 'class'], 'string', 'max' => 255],
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

    public function getUrl() {
        return empty($this->image) ? null : Yii::$app->params['mediaUrl'] . 'student/' . $this->image;
    }

    public function beforeValidate() {
        $eThumb = isset($this->oldAttributes['image']) ? $this->oldAttributes['image'] : null;
        $this->image = $this->saveImage('image', null, $eThumb);
        /* end save hotel images */
        return parent::beforeValidate();
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

        $folder = Yii::$app->params['uploadPath'] . 'student';
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
}
