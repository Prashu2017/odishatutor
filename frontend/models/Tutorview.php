<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tutorview".
 *
 * @property int $id
 * @property int $tutor_id
 * @property string $userip
 * @property int $user_id
 * @property string $created_at
 * @property string $updated_at
 */
class Tutorview extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tutorview';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tutor_id', 'userip', 'user_id'], 'required'],
            [['tutor_id', 'user_id'], 'integer'],
            [['userip'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tutor_id' => 'Tutor ID',
            'userip' => 'Userip',
            'user_id' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
