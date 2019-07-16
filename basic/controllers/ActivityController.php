<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\ActivityForm;

class ActivityController extends Controller
{
    public function actionIndex()
    {
        return "Контроллер активностей";
    }
    public function actionCreate()
    {
        return "Создание активности";
    }
    public function actionActivity()
    {
        $model = new Activity();
        return $this->render('view', [
            'model' => $model,
        ]);
    }


}