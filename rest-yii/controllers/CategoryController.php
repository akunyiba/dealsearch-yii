<?php
namespace app\controllers;

use yii\rest\ActiveController;

class CategoryController extends ActiveController
{
    public $modelClass = 'app\models\Category';

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
