<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ads".
 *
 * @property integer $id
 * @property string $type
 * @property string $name
 * @property string $email
 * @property integer $allow_mails
 * @property string $phone
 * @property integer $city
 * @property integer $category
 * @property string $title
 * @property string $description
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ads';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'description'], 'string'],
            [['allow_mails', 'city', 'category', 'price', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'phone'], 'string', 'max' => 20],
            [['title'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'name' => 'Name',
            'email' => 'Email',
            'allow_mails' => 'Allow Mails',
            'phone' => 'Phone',
            'city' => 'City',
            'category' => 'Category',
            'title' => 'Title',
            'description' => 'Description',
            'price' => 'Price',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
