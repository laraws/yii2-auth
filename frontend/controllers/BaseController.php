<?php
namespace frontend\controllers;

use Yii;
use yii\rest\ActiveController;
use yii\web\Response;

class BaseController extends ActiveController
{
    public function behaviors()

    {

        $behaviors = parent::behaviors();



        $behaviors['contentNegotiator'] = [

            'class' => 'yii\filters\ContentNegotiator',

            'formats' => [

                'application/json' => Response::FORMAT_JSON,

            ]

        ];



        return $behaviors;

    }

}