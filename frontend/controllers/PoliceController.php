<?php

namespace frontend\controllers;
use Yii;
use frontend\models\User;
use yii\db\Query;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use frontend\models\ReportSearch;
use frontend\models\Report;


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
    $searchModel = new ReportSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    return $this->render('report', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
    ]);
    
    


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
