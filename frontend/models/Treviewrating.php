<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "treviewrating".
 *
 * @property int $id
 * @property int $tutor_id
 * @property int $user_id
 * @property string $review
 * @property int $ratings
 * @property string $created_at
 */
class Treviewrating extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'treviewrating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tutor_id', 'user_id', 'review', 'ratings'], 'required'],
            [['tutor_id', 'user_id', 'ratings'], 'integer'],
            [['created_at'], 'safe'],
            [['review'], 'string', 'max' => 255],
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
            'user_id' => 'User ID',
            'review' => 'Review',
            'ratings' => 'Ratings',
            'created_at' => 'Created At',
            
        ];
    }
}
