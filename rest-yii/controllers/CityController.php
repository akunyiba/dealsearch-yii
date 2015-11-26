<?php
namespace app\controllers;

use yii\rest\ActiveController;

class CityController extends ActiveController
{
    public $modelClass = 'app\models\City';

    public function behaviors()
    {
        return
            \yii\helpers\ArrayHelper::merge(parent::behaviors(), [
                'corsFilter' => [
                    'class' => \yii\filters\Cors::className(),
                ],
            ]);
    }
}
