<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "schedule".
 *
 * @property int $id
 * @property string $day
 * @property string $time_interval
 * @property string $student_id
 * @property string $avalable
 * @property string $from_time
 * @property string $upto_time
 * @property int $tutor_id
 */
class Schedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['day', 'time_interval', 'student_id', 'avalable', 'from_time', 'upto_time', 'tutor_id'], 'required'],
            [['from_time', 'upto_time'], 'safe'],
            [['tutor_id'], 'integer'],
            [['day', 'time_interval', 'student_id', 'avalable'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => '',
            'time_interval' => '',
            'student_id' => 'Student ID',
            'avalable' => '',
            'from_time' => '',
            'upto_time' => '',
            'tutor_id' => 'Tutor ID',
        ];
    }
}
