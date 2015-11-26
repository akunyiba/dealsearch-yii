<?php
namespace app\controllers;

use yii\rest\ActiveController;

class AdsController extends ActiveController
{
    public $modelClass = 'app\models\Ads';

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
