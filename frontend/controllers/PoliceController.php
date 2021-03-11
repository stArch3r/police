<?php

namespace frontend\controllers;

class PoliceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionData()
    {
        return $this->render('data');
    }
    public function actionFull()
    {
        return $this->render('full');
    }
    public function actionList()
    {
        return $this->render('list');
    }
public function actionReport()
{
    return $this->render('report');
}
public function actionDashboard()
{
 return $this->render('dashboard');
}
public function actionSwift()
{
    return $this->render('swift');
}
}
