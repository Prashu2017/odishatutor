<?php

namespace common\models;

use Yii;

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
}
