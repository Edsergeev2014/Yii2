<?php

namespace app\controllers;

use yii\web\Controller;

class EntryController extends Controller
{
    public function actionIndex()
    {
        return "Контроллер активностей";
    }
    public function actionCreate()
    {
        return "Создание активности";
    }

}