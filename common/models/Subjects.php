<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "subjects".
 *
 * @property int $id
 * @property int $academic_level_id
 * @property string $name
 */
class Subjects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subjects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['academic_level_id', 'name'], 'required'],
            [['academic_level_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'academic_level_id' => 'Academic Level ID',
            'name' => 'Name',
        ];
    }
}
