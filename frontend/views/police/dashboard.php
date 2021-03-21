<?php
use yii\helpers\Html;
use yii\grid\GridView;
use frontend\models\Report;
use yii\widgets\Pjax;

/* @var $searchModel frontend\models\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$totalReport = Report::find()->asArray()->all();
$report = Report::find()->joinWith('photos')->all();
$photos= Report::find()->joinWith('photos')->all();
$video = Report::find()->joinWith('videos')->all();
?>
<div class="wrap">
<style>
    body{
        padding: 4;
        margin: 4;
    }
</style>
       
</head>

<body>

    <div class="row dash">
                <div class="col-md-4">
                    <div class="card see" style="width: 18rem; margin-top: 3em; margin-left: 3em;">
                        <img src="https://img.icons8.com/color/48/000000/fire-alarm-button.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">New cases</p>
                        </div>
                      </div>
                      <div class="card see" style="width: 18rem; margin-top: 3em; margin-left: 3em;">
                        <img src="https://img.icons8.com/color/48/000000/fire-alarm-button.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">New cases</p>
                        </div>
                      </div>
    
                </div>
            <div class="col-md-8  juu">

            <h3>New in reports summary</h3>       
                       <?php foreach($report as $list)   {?>
                                          
                                  
                <div class="card w-75 juu">
                    <div class="card-body">
                      <h5 class="card-title"><?=$list->title ?></h5>
                      <p class="card-text"><?=$list->description ?></p>
                      <p class="card-text"><?=$list->createdAt ?></p>
                    </div>
                  </div>

                  <?php }?>
                                                                      
       </div>
                                                                      
        </div>
    <div class="row" style="margin-top: 3em;">
      
            <div class="col-md-4 data">
                <div class="card see" style="width: 18rem; margin-left: 3em;">
                    <img src="../assets/images/report.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"> <i class="fas fa-file"></i>Total Reports <?= count($totalReport)?></p>
                    </div>
                  </div>

            </div>
        <div class="col-md-8">
              
            <!----------------------------------------------------------Table--------------------------------------------------->
    <div class="container see">
    <?php pjax:: begin(); ?>
    <?= GridView::widget([
        'dataProvider'=> $dataProvider,
     
        'columns'=>[
            'userId',
            'reportId',
              'title',
              'county',
              'createdAt',
              
              

        ]
        

    ])?>
    <?php pjax::end(); ?>
        <!-- <table class="table table-hover table-responsive-sm " >
            <thead>
                <tr class="table-active">
                    <th scope="col">#</th>
                    <th scope="col">location</th>
                    <th scope="col">county</th>
                    <th scope="col">Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px"  src="images/user1.svg" data-holder-rendered="true"></th>
                    <td class="fw-bold font-monospace vertical-align: middle">Kayole</td>
                    <td><p class="fw-bold font-monospace">Nairobi</p></td>
                    <td><p class="fw-bold font-monospace">Dec 22, 2020</p></td>
                    <td><p class="fw-bold font-monospace">
                        <div class="d-flex flex-row">
                            <i class="p-1 far fa-eye"></i></p>
                            <i class="p-1 far fa-trash-alt"></i>
                        </div>
                    </td>  
                </tr>
                <tr>
                    <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px"  src="images/user1.svg" data-holder-rendered="true"></th>
                    <td class="fw-bold font-monospace vertical-align: middle">Kayole</td>
                    <td><p class="fw-bold font-monospace">Nairobi</p></td>
                    <td><p class="fw-bold font-monospace">Dec 22, 2020</p></td>
                    <td><p class="fw-bold font-monospace">
                        <div class="d-flex flex-row">
                            <i class="p-1 far fa-eye"></i></p>
                            <i class="p-1 far fa-trash-alt"></i>
                        </div>
                    </td>  
                </tr>
                <tr>
                    <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px"  src="images/user1.svg" data-holder-rendered="true"></th>
                    <td class="fw-bold font-monospace vertical-align: middle">Kahawa</td>
                    <td><p class="fw-bold font-monospace">Nairobi</p></td>
                    <td><p class="fw-bold font-monospace">Dec 22, 2020</p></td>
                    <td><p class="fw-bold font-monospace">
                        <div class="d-flex flex-row">
                            <i class="p-1 far fa-eye"></i></p>
                            <i class="p-1 far fa-trash-alt"></i>
                        </div>
                    </td>  
                </tr>
                <tr>
                    <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px"  src="images/user1.svg" data-holder-rendered="true"></th>
                    <td class="fw-bold font-monospace vertical-align: middle">Kasarani</td>
                    <td><p class="fw-bold font-monospace">Naiorbi</p></td>
                    <td><p class="fw-bold font-monospace">Dec 22, 2020</p></td>
                    <td><p class="fw-bold font-monospace">
                        <div class="d-flex flex-row">
                            <i class="p-1 far fa-eye"></i></p>
                            <i class="p-1 far fa-trash-alt"></i>
                        </div>
                    </td>  
                </tr>
                <tr>
                    <th scope="row"><img class="rounded-circle z-depth-2" alt="50x50" style="height:50px ; width:50px"  src="images/user1.svg" data-holder-rendered="true"></th>
                    <td class="fw-bold font-monospace vertical-align: middle">Bodeni </td>
                    <td><p class="fw-bold font-monospace">Mombasa</p></td>
                    <td><p class="fw-bold font-monospace">Dec 22, 2020</p></td>
                    <td><p class="fw-bold font-monospace">
                        <div class="d-flex flex-row">
                            <i class="p-1 far fa-eye"></i></p>
                            <i class="p-1 far fa-trash-alt"></i>
                        </div>
                    </td>  
                </tr>
            </tbody>
        </table>
    </div> -->
    <!-----------------------------------------x----------------Table----------------------x---------------------------->
        </div>
    </div>


    </body>
</div>