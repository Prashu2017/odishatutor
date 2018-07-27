<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
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
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

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
            [['caption', 'status', 'image'], 'required'],
            [['status'], 'integer'],
            [['caption', 'image'], 'string', 'max' => 255],
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

    public function beforeValidate() {
        $eThumb = isset($this->oldAttributes['image']) ? $this->oldAttributes['image'] : null;
        $this->image = $this->saveImage('image', null, $eThumb);
        /* end save hotel images */
        return parent::beforeValidate();
    }

    public function getUrl() {
        return empty($this->image) ? null : Yii::$app->params['mediaUrl'] . 'gallery/' . $this->image;
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

        $folder = Yii::$app->params['uploadPath'] . "gallery";
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
            $filename = $fileInfo['filename'] . '_' .strtotime("now") . '.'. $fileInfo['extension'];

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
