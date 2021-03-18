<?php

namespace frontend\controllers;
use frontend\models\User;
use yii\db\Query;
use yii\data\ArrayDataProvider;

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
    


    // public function actionList()
    // {
    //     return $this->render('list');
    // }
public function actionReport()
{
    return $this->render('report');
}
public function actionDashboard()
{
    $reportList =(new Query())
    ->select([
        'reportId as reportId',
        'userId as userId',
        'title as title',
        'county as county',
        'createdAt as createdAt',

    ])
    ->from('report')
    ->indexBy('reportId')
     ->all();
     $dataProvider = new ArrayDataProvider([
         'allModels'=> $reportList,
         'sort' => [
             'attributes'=>['reportId', 'userId', 'county', 'createdAt'],
         ],
         'pagination'=> [
             'pagesize' => 5,
         ],
     ]);

 return $this->render('dashboard',[
     'dataProvider' => $dataProvider
 ]);
}
public function actionSwift()
{
    return $this->render('swift');
}
}
