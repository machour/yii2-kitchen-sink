<?php

namespace app\controllers;

use app\models\Notification;
use Yii;
use yii\web\Controller;

class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionYii2Notifications($key = false, $type = false)
    {
        if ($type) {
            Notification::deleteAll(['key' => $key]);
            Notification::notify($key, 3, null, $type);
        }
        return $this->render('yii2-notifications');
    }

}
