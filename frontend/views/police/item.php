<?php
/** @var $model \frontend\models\Report */
use yii\helpers\Url;
use frontend\models\Report;
use frontend\models\Photos;

$image = Report::find()->joinWith('photos')->all();
$video = Report::find()->joinWith('videos')->all();
?>
<div class="container juu">
  <div class="card" style="width: 42rem;">
  
 <video width="520" height="270" controls>  
  <source src="<?=Yii::$app->request->baseUrl.'/'.$model->videos[0]->video?>" style="height:100; width:100px" alt="">
  </video>

 <img src="<?=Yii::$app->request->baseUrl.'/'.$model->photos[0]->imagePath?>"  style="height:250px; width:500px; margin-top:13px;" alt="">
 
 
    <div class="card-body">
      <h5 class="card-title"><?=$model->tags?></h5>
      <p class="card-text"><?=$model->description?></p>
      </div>
    </div>
  </div>
</div>
