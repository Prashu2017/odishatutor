<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parentsdetail".
 *
 * @property int $id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_id
 * @property string $mobile_no
 * @property int $country_id
 * @property string $pincode
 * @property int $state_id
 * @property int $city_id
 * @property string $street_address
 * @property string $created_at
 */
class Parentsdetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'parentsdetail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'country_id', 'state_id', 'city_id'], 'integer'],
            [['created_at'], 'safe'],
            [['first_name', 'last_name', 'email_id', 'mobile_no', 'pincode', 'street_address'], 'string', 'max' => 255],
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
            'email_id' => 'Email ID',
            'mobile_no' => 'Mobile No',
            'country_id' => 'Country ID',
            'pincode' => 'Pincode',
            'state_id' => 'State ID',
            'city_id' => 'City ID',
            'street_address' => 'Street Address',
            'created_at' => 'Created At',
        ];
    }
}
