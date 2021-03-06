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
use kartik\widgets\FileInput;
use yii\data\ActiveDataProvider;
use yii\helpers\Url;

use frontend\models\Video;

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
            'pagination'=> [
                'pagesize' => 5,
            ],
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
        $photos = new Photos();
        $video = new Video();
  

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->reportId]);
        // }
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($this->saveImage($model->reportId,Yii::$app->request->post()['Photos'])){
                return $this->redirect(Url::to(['police/index']));
            }
            else{
                if($this->saveVideo($model->reportId,Yii::$app->request->post()['Video'])){
                    return $this->redirect(Url::to(['police/index'])) ;
                }
            }
          
        }
        return $this->render('create', [
            'model' => $model,
            'photos'=> $photos,
            'video' => $video,           
             ]);
        

    }
    
    public function saveImage($reportId,$imagedata)
    {
         $model = new Photos();
         if($model->load(["Photos"=>['imagePath'=>$imagedata['imagePath']]])){
             //generates images with unique names
             $imageName = bin2hex(openssl_random_pseudo_bytes(10));
             $model->imagePath = UploadedFile::getInstance($model, 'imagePath');
             //saves file in the root directory
             $model->imagePath->saveAs('uploads/'.$imageName.'.'.$model->imagePath->extension);
             //save in the db
             $model->imagePath='uploads/'.$imageName.'.'.$model->imagePath->extension;
             $model->reportId = $reportId;
             $model->save(false);
        //  if
        //      ($model->save(false)){
        //          return true;
        //      }
         }
         return false;
     }

     public function saveVideo($reportId,$videodata)
     {
          $model = new Video();
          if($model->load(["Video"=>['video'=>$videodata['video']]])){
              //generates images with unique names
              $videoName = bin2hex(openssl_random_pseudo_bytes(10));
              $model->video = UploadedFile::getInstance($model, 'video');
              //saves file in the root directory
              $model->video->saveAs('uploads/'.$videoName.'.'.$model->video->extension);
              //save in the db
              $model->video='uploads/'.$videoName.'.'.$model->video->extension;
              $model->reportId = $reportId;
              $model->save(false);
         //  if
         //      ($model->save(false)){
         //          return true;
         //      }
          }
          return false;
      
        }

        public function actionSearch($keyword)
        {
            $this->layout = 'main';
            $query = Report::find();
           
            if ($keyword) {
                $query->byKeyword($keyword)
                ->orderBy("MATCH(tags,title)
            AGAINST (:keyword)", ['keyword' => $keyword]);
            }
            $dataProvider = new ActiveDataProvider([
                'query' => $query
            ]);
            
            return $this->render('search', [
                'dataProvider' => $dataProvider
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
