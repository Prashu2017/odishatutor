<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentrequest".
 *
 * @property int $id
 * @property int $student_id
 * @property int $tutor_id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $subject
 * @property string $message
 * @property string $time_prefence
 * @property string $created_at
 * @property string $updated_at
 */
class Studentrequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentrequest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id', 'tutor_id', 'name', 'email', 'mobile', 'subject', 'message', 'time_prefence'], 'required'],
            [['student_id', 'tutor_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'mobile', 'subject', 'message', 'time_prefence'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'tutor_id' => 'Tutor ID',
            'name' => 'Name',
            'email' => 'Email',
            'mobile' => 'Mobile',
            'subject' => 'Subject',
            'message' => 'Message',
            'time_prefence' => 'Time Prefence',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
