<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;
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
            'academic_level_id' => 'Academic Level',
            'name' => 'Name',
        ];
    }

    public function getAcademicList() {
        $array = ArrayHelper::map(AcademicLevel::find()->all(), 'id', 'name');
        return ['' => 'Academic Level'] + $array;
    }
}
