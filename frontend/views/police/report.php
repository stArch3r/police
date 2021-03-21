<?php
use yii\helpers\Html;
use frontend\models\Report;
use frontend\models\Photos;
use frontend\models\Video;
use yii\widgets\ListView;


$report = Report::find()->joinWith('photos')->all();
$photos= Report::find()->joinWith('photos')->all();
$video = Report::find()->joinWith('videos')->all();

?>

<title>jasiri</title>

<head>
    
</head>

<body>
  
     <div class="row">
        <div class="col-sm-12">

            <div class="row">

            
            
            <div class="col-sm-4" style="margin-left: 5em ; margin-top: 9px;">
                <div class="card" style="width: 18rem;">
                    <img src="../assets/images/head.png" class="card-img-top" alt="...">
                    <div class="card-body">

                    
                      <h5 class="card-title">mombasa</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      
                    </div>
                  </div>
                  <div class="card" style="width: 18rem; margin-top: 9px;">
                    <img src="../assets/images/head.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Nyali</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
                  <div class="card" style="width: 18rem; margin-top: 9px;">
                    <img src="../assets/images/head.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kayole</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      
                    </div>
                  </div>
            </div>
            <div class="col-sm-7" style="margin-top: 9px;">
            <div class="container" style="background-color: rgb(204, 214, 201);">
                <div class="row">
                
         <?php echo \yii\widgets\ListView::widget([
         'dataProvider' => $dataProvider,
          'itemView' => 'item'
         ])
          ?>
</div>
</div>
            </div>
            </div>
            </div>
            </div>

</body>


</html>