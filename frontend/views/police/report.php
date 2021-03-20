<?php
use yii\helpers\Html;
use frontend\models\Report;
use frontend\models\Photos;
use frontend\models\Video;
use yii\widgets\ListView;

$title= Report::find()->asArray()->all();
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
                      <a href="" class="btn btn-primary"> </a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem; margin-top: 9px;">
                    <img src="../assets/images/head.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Nyali</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="?= Html::a('Link', ['/police/reports']); ?>" class="btn btn-primary">read more</a>
                    </div>
                  </div>
                  <div class="card" style="width: 18rem; margin-top: 9px;">
                    <img src="../assets/images/head.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Kayole</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="http://localhost/police/police/report" class="btn btn-primary">read more</a>
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

                    <!-- <H1>
                        Karen C incident report
                    </H1>
                    <div class="col-xs-4">
           <article>
            <h2>22/march/2020</h2>
            <p>Google Chrome is a web browser developed by Google, released in 2008. Chrome is the world's most popular web browser today!</p>
            <br>
            <p>
                Donec in venenatis orci. Donec pretium, nisi in venenatis porttitor, ante est bibendum quam, sed ornare augue erat eget elit. Nulla sagittis at arcu nec condimentum. Aliquam vulputate tincidunt nisi in varius. Aliquam erat volutpat. Nunc risus odio, feugiat nec pretium sit amet, ullamcorper id justo. In et tellus sapien. Sed ut dui interdum, consequat felis a, placerat urna. Praesent consectetur sagittis lacus ac aliquet.

Nam semper, tortor quis eleifend facilisis, velit nibh tincidunt sem, nec rutrum ex elit ut ligula. Sed porta urna lacus, a aliquet lorem pretium porta. Mauris finibus eros vitae gravida sodales. Etiam maximus placerat enim sed lobortis. In pellentesque at felis nec interdum. Maecenas non quam euismod, sodales risus ac, maximus diam. Donec vulputate magna est, vitae dictum lorem porta eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Morbi imperdiet vestibulum ornare. In egestas massa quis ligula imperdiet posuere. Nulla eget ligula maximus, sodales tellus sed, pretium eros. Morbi efficitur at turpis sed finibus. Etiam varius vehicula dictum.

Vestibulum a rhoncus lorem. Aliquam at lorem id ex imperdiet varius eu quis orci. Quisque enim est, lobortis egestas quam vel, facilisis fringilla ante. Donec lobortis faucibus lacus. Praesent lacinia, urna et commodo ultrices, elit est dapibus lacus, eu consequat ipsum turpis ac magna. Nam sed pellentesque tellus. Sed at fringilla libero, in lacinia dolor.
            </p>
  
             <div class="row">
                 <div class="col">
                 <img src="?=Yii::$app->request->baseUrl.'/'.$image->photos[0]->imagePath?>" style="height:100; width:100" alt="">
 
                 </div>
                
                 
             </div>
          
           </article> -->
                    </div>

                </div>
            </div>
</div>
            </div>
            </div>
</body> -->


</html>