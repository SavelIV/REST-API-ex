<?php

namespace api\controllers;

use yii\filters\auth\HttpBearerAuth;

class ActiveController extends \yii\rest\ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();

        $behaviors = parent::behaviors();
        $behaviors['authenticator']['only'] = ['create', 'update', 'delete'];
        $behaviors['authenticator']['authMethods'] = [
            HttpBearerAuth::class
        ];

        return $behaviors;
    }
}