<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Report;
use frontend\models\ReportSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Photos;
use yii\web\UploadedFile;

/**
 * ReportController implements the CRUD actions for Report model.
 */
class ReportController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Report models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ReportSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Report model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Report model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Report();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->reportId]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionAddphotos()
{
    $model = new \frontend\models\Photos();
    if ($model->load(Yii::$app->request->post())) 
    {
        //generates images with unique names
        $imageName = bin2hex(openssl_random_pseudo_bytes(10));
        $model->imagePath = UploadedFile::getInstance($model, 'imagePath');
        //saves file in the root directory
        $model->imagePath->saveAs('uploads/'.$imageName.'.'.$model->imagePath->extension);
        //save in the db
        $model->imagePath = 'uploads/' .$imageName.'.'.$model->imagePath->extension;
        $model->save(false);
            return $this->redirect(['index']);
        }
    
        return $this->render('addphotos', [
            'model' => $model,
            
    ]);

}
public function actionAddvideo()
{
    $model = new \frontend\models\Video();
    if ($model->load(Yii::$app->request->post())) 
    {
        //generates images with unique names
        $videoName = bin2hex(openssl_random_pseudo_bytes(10));
        $model->video = UploadedFile::getInstance($model, 'video');
        //saves file in the root directory
        $model->video->saveAs('uploads/'.$videoName.'.'.$model->video->extension);
        //save in the db
        $model->video = 'uploads/' .$videoName.'.'.$model->video->extension;
        $model->save(false);
            return $this->redirect(['index']);
        }
    
        return $this->render('addvideo', [
            'model' => $model,
            
    ]);
        }
    /**
     * Updates an existing Report model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->reportId]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Report model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Report model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Report the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Report::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
