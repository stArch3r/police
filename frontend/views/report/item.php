<?php
/** @var $model \frontend\models\Report */
use yii\helpers\Url;
use frontend\models\Report;
use frontend\models\Photos;

$image = Report::find()->joinWith('photos')->all();
?>
<div class="container juu">
  <div class="card" style="width: 28rem;">
  
      
  
 <img src="<?=Yii::$app->request->baseUrl.'/'.$model->photos[0]->imagePath?>" style="height:100; width:100" alt=""> 
    <div class="card-body">
      <h5 class="card-title"><?=$model->tags?></h5>
      <p class="card-text"><?=$model->description?></p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
