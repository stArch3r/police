<?php

namespace frontend\controllers;
use Yii;
use frontend\models\User;
use yii\db\Query;
use yii\data\ArrayDataProvider;
use yii\web\Controller;
use frontend\models\ReportSearch;
use yii\data\ActiveDataProvider;
use frontend\models\Report;
use frontend\models\County;


class PoliceController extends \yii\web\Controller
{
    public function actionIndex()

    {
        
        return $this->render('index');
    }
    public function actionData()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Report::find(),
            'pagination' => false   // ensure all towers will appear on map
        ]);
            // ...
        return $this->render('data', [
            'dataProvider' => $dataProvider,
            // ...
        ]);
       
    }


    public function actionLocator() {
        $dataProvider = new ActiveDataProvider([
            'query' => Report::find()->joinWith('county0')->all(),
            'pagination' => false   // ensure all towers will appear on map
        ]);
            // ...
        return $this->render('locator', [
            'dataProvider' => $dataProvider,
            // ...
        ]);
    }

    


    // public function actionList()
    // {
    //     return $this->render('list');
    // }
public function actionReport()
{
    $searchModel = new ReportSearch();
    $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

    if(Yii::$app->user->can('user','admin')){
        $query = Report::find()
        ->where(['userId' => Yii::$app->user->id]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);


    return $this->render('report', [
        'searchModel' => $searchModel,
        'dataProvider' => $dataProvider,
        
    ]);
    
    


}

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
             'pagesize' => 4,
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
