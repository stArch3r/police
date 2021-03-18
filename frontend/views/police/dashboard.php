<?php
use yii\helpers\Html;
use yii\grid\GridView;
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
                          <p class="card-text">pending cases</p>
                        </div>
                      </div>
                      <div class="card see" style="width: 18rem; margin-top: 3em; margin-left: 3em;">
                        <img src="https://img.icons8.com/color/48/000000/fire-alarm-button.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">pending cases</p>
                        </div>
                      </div>
    
                </div>
            <div class="col-md-8  juu">
                                                                    
                <div class="card w-75 season">
                    <div class="card-body">
                      <h5 class="card-title">Bamburi</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="listView.html" class="btn btn-danger">approve</a>
                      <a href="listView.html" class="btn btn-success">reject</a>
                    </div>
                  </div>
                                                                      
                  <div class="card w-75 juu">
                    <div class="card-body">
                      <h5 class="card-title">Bamburi</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="listView.html" class="btn btn-danger">approve</a>
                      <a href="listView.html" class="btn btn-success">reject</a>
                    </div>
                  </div>
                                                                      
                  <div class="card w-75 juu">
                    <div class="card-body">
                      <h5 class="card-title">Bamburi</h5>
                      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                      <a href="listView.html" class="btn btn-danger">approve</a>
                      <a href="listView.html" class="btn btn-success">reject</a>
                    </div>
                  </div>

                
                    <div class="card w-75 juu">
                        <div class="card-body">
                          <h5 class="card-title">Bamburi</h5>
                          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                          <a href="listView.html" class="btn btn-danger">approve</a>
                      <a href="listView.html" class="btn btn-success">reject</a>
                        </div>
                      </div>
                </div>
        </div>
    <div class="row" style="margin-top: 3em;">
      
            <div class="col-md-4 data">
                <div class="card see" style="width: 18rem; margin-left: 3em;">
                    <img src="images/users.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"> 700 applications.</p>
                    </div>
                  </div>

            </div>
        <div class="col-md-8">
              
            <!----------------------------------------------------------Table--------------------------------------------------->
    <div class="container see">

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