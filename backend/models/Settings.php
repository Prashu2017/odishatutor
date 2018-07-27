<?php

namespace backend\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "settings".
 *
 * @property integer $id
 * @property string $logo
 * @property string $favicon
 * @property string $copyright_text
 * @property string $site_name
 * @property string $smtp_host
 * @property string $smtp_user
 * @property string $smtp_pass
 * @property string $smtp_port
 * @property string $smtp_crypto
 * @property string $default_email
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['logo', 'favicon', 'banner_1', 'banner_2', 'banner_3', 'banner_4'], 'safe'],
            [[ 'copyright_text', 'site_name', 'smtp_host', 'smtp_user', 'smtp_pass', 'smtp_port', 'smtp_crypto',  'default_email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'logo' => 'Logo',
            'favicon' => 'Favicon',
            'copyright_text' => 'Copyright Text',
            'site_name' => 'Site Name',
            'smtp_host' => 'Smtp Host',
            'smtp_user' => 'Smtp User',
            'smtp_pass' => 'Smtp Pass',
            'smtp_port' => 'Smtp Port',
            'smtp_crypto' => 'Smtp Crypto',
            'banner_1' => 'Banner 1',
            'banner_2' => 'Banner 2',
            'banner_3' => 'Banner 3',
            'banner_4' => 'Banner 4',
            'default_email' => 'Default Email',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function beforeSave($insert) 
    {
        if ($insert) 
        {
            $this->created_at = strtotime("now");
            $this->created_by = Yii::$app->user->id;
        }
        
        $this->updated_at = strtotime("now");
        $this->updated_by = Yii::$app->user->id;
        return parent::beforeSave($insert);
    }

    public function beforeValidate() {
        $eLogo = isset($this->oldAttributes['logo']) ? $this->oldAttributes['logo'] : null;
        $this->logo = $this->saveImage('logo', null, $eLogo);

        $efavicon = isset($this->oldAttributes['favicon']) ? $this->oldAttributes['favicon'] : null;
        $this->favicon = $this->saveImage('favicon', null, $efavicon);
        $banner_1 = isset($this->oldAttributes['banner_1']) ? $this->oldAttributes['banner_1'] : null;
        $this->banner_1 = $this->saveImage('banner_1', null, $banner_1);
        $banner_2 = isset($this->oldAttributes['banner_2']) ? $this->oldAttributes['banner_2'] : null;
        $this->banner_2 = $this->saveImage('banner_2', null, $banner_2);
        $banner_3 = isset($this->oldAttributes['banner_3']) ? $this->oldAttributes['banner_3'] : null;
        $this->banner_3 = $this->saveImage('banner_3', null, $banner_3);
        $banner_4 = isset($this->oldAttributes['banner_4']) ? $this->oldAttributes['banner_4'] : null;
        $this->banner_4 = $this->saveImage('banner_4', null, $banner_4);
        
        /* end save hotel images */
        return parent::beforeValidate();
    }

    public function getLogo() {
        return empty($this->logo) ? null : Yii::$app->params['mediaUrl'] .'settings/'.$this->logo;
    }

    public function getFavicon() {
        return empty($this->favicon) ? null : Yii::$app->params['mediaUrl'] .'settings/'.$this->favicon;
    }

    public function getBanner() {
        return empty($this->banner_1) ? null : Yii::$app->params['mediaUrl'] .'settings/'.$this->banner_1;
    }

    public function getBannertwo() {
        return empty($this->banner_2) ? null : Yii::$app->params['mediaUrl'] .'settings/'.$this->banner_2;
    }

    public function getBannerthree() {
        return empty($this->banner_3) ? null : Yii::$app->params['mediaUrl'] .'settings/'.$this->banner_3;
    }

    public function getBannerfour() {
        return empty($this->banner_4) ? null : Yii::$app->params['mediaUrl'] .'settings/'.$this->banner_4;
    }

    public function saveImage($attr, $classInstance = null, $existingImage = null, $deleteExisting = false) {
        $instance = $classInstance == null ? $this : $classInstance;
        $file = UploadedFile::getInstance($instance, $attr);
        if ($deleteExisting) {
            return null;
        }
        if (empty($file->tempName)) {
            return $existingImage;
        }

        $folder = Yii::$app->params['uploadPath'] . "settings";
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
