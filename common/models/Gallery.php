<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property string $caption
 * @property integer $status
 * @property integer $image
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'caption', 'status', 'image'], 'required'],
            [['id', 'status', 'image'], 'integer'],
            [['caption'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Caption',
            'status' => 'Status',
            'image' => 'Image',
        ];
    }
}
