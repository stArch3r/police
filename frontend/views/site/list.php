<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */

/* @var $exception Exception */

use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Productimages;
use frontend\models\Report;
use frontend\models\Photos;
use frontend\models\Video;
use yii\widgets\ListView;
$report = Report::find()->joinWith('photos')->all();



?>

<div class="list-history">
    <h4 class="mb-3"> Donation history </h4>
    <?= ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => 'listView',
    ]); ?>
</div>

<!-- <head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 2;
            padding: 1;

        }
    </style>
    
</head>
<body>
            <div class="row">
            ?php foreach ($report as $report) {?>
                <div class="col-md-4" style="margin-top: 10px;">
                  
               
                    <i class="fas fa-file-contract fa-6x"></i>
                    <br>
                    <h5>
                    reports
                    </h5>
                </div>
                <div class="col-md-8 " style="margin-top:9px">
                    <div class="container-fluid pt-1 pb-1" style="background: #eeeeee">
                        <div class="row">
                          <div class="col">
                            <h2 class="text-center h2-special-gray text-center" style="color: #444!important; font-family: 'Source Sans Pro',sans-serif; padding-top:15px;">incident reports</h2>
                          </div>

                          
                        </div>
                        <div class="card w-75 juu">
                            <div class="card-body">
                              <h5 class="card-title">?= $report->title?></h5>
                              <p class="card-text">?= $report->title ?></p>
                              <a href="http://localhost/police/police/report" class="btn btn-primary">see more</a>
                            </div>
                          </div>
            </div>
            </div>
                </div>
                
                          ?php }?

                          

                
           
            
</body>
<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

 ===== MAIN JS ===== -->


</html> -->