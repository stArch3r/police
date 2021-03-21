<?php
/* @var $this yii\web\View */


use yii\helpers\Url;
use yii\helpers\Html;
use frontend\models\Productimages;
use frontend\models\Report;
use frontend\models\Photos;
use frontend\models\Video;
use sjaakp\gcharts\BarChart;
use sjaakp\gcharts\PieChart;
use yii\widgets\ListView;
use yii\data\ArrayDataProvider;

$report = Report::find()->joinWith('photos')->all();
?>

<div class="index">

    <html lang="en">

    <head>
        <script src="https://code.highcharts.com/highcharts.js"></script>

        <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
       
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>

        <style>
            #map {
                width: 47vw;
                height: 70vh;
            }

        </style>
        <style>
            #container {
                height: 400px;
                min-width: 310px;
                max-width: 800px;
            }

        </style>
        <title>jasiri</title>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row"  >
                <div class="col-md-6 juu" >
                    <div id="map"></div>
                    <script>
                        mapboxgl.accessToken =
                            'pk.eyJ1Ijoia2VubXVuZW5lIiwiYSI6ImNrbGFmaXpvYjBrdXUydnM4Y2wzeWFtaHUifQ.TYNHNVNrfF0OKuDQ58ulAw';
                        var map = new mapboxgl.Map({
                            container: 'map',
                            center: [37.9062, 0.0236],
                            zoom: 6,
                            style: 'mapbox://styles/mapbox/dark-v10'

                        });
                        map.addControl(new mapboxgl.NavigationControl());
                        new mapboxgl.Marker({
                            color: "red"
                        }).setLngLat([36.8219, 1.2921]).addTo(map);

                    </script>

                </div>
            
            <div class="col-md-6 juu">
     <?= BarChart::widget([
    'height' => '400px',
    'dataProvider' => $dataProvider,
    'columns' => [
        'name:string',
        'report',
        'county',
    ],
    'options' => [
        'title' => 'county by police cases'
    ],
]) ?> 



            <!-- <div id="container"></div>

?php $this->registerJs("
const chart = Highcharts.chart('container', {
  chart: {
      type: 'column'
  },
  title: {
      text: 'Highcharts responsive chart'
  },
  subtitle: {
      text: 'Resize the frame to see the legend position change'
  },
  legend: {
      align: 'right',
      verticalAlign: 'middle',
      layout: 'vertical'
  },
  xAxis: {
      categories: ['Mombasa', 'Nairobi', 'Kisumu']
  },
  yAxis: {
      title: {
          text: 'cases'
      }
  },
  series: [{
      name: 'Christmas Eve',
      data: [1, 4, 3]
  }, {
      name: 'Christmas Day before dinner',
      data: [6, 4, 2]
  }, {
      name: 'Christmas Day after dinner',
      data: [8, 4, 3]
  }],
  responsive: {
      rules: [{
          condition: {
              maxWidth: 500
          },
          chartOptions: {
              legend: {
                  align: 'center',
                  verticalAlign: 'bottom',
                  layout: 'horizontal'
              }
          }
      }]
  }
});

document.getElementById('small').addEventListener('click', () => {
  chart.setSize(400, 300);
});

document.getElementById('large').addEventListener('click', () => {
  chart.setSize(600, 300);
});

")?> -->
</div>
</div>


<!-- next section  -->

<div class="row">
    <div class="col-md-6 juu">
    <div class="card mb-3">
  <img class="card-img-top" src="../assets/images/head.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Bodeni</h5>
    <p class="card-text"> The traffic police was seen harrasing memebers of the public</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
    </div> 
    <div class="col-md-6 juu" juu>
    <div class="card mb-3">
  <img class="card-img-top" src="../assets/images/head.png" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Nairobi </h5>
    <p class="card-text">A police was seen beating hawkers on Moi avenue sunday night.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
    </div>
</div>

<div class="row">
<div class="col-sm-8 rir">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
                  <p class="carouselTitle">police</p>
            <img src="../assets/images/popo.jpg" style="width: 100%; height: 88%;"  alt="First slide">
          </div>
          <div class="carousel-item">
                  <p class="carouselTitle">know your Rights</p>
            <img src="../assets/images/alex.jpg" style="width: 100%; height:89%;" alt="Second slide">
          </div>
          <div class="carousel-item">
                  <p class="carouselTitle"></p>
            <img  src="../assets/images/ken.jpg"  style="width: 100%; height: 89%;" alt="Third slide">
          </div>
        </div>
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> 
      </div>
</div>

<div class="col-sm-4 ken">
    <h4> 
        <b> <strong>
          IF YOUR VOICE HELD NO 
          <br> POWER THEY WOULDN'T TRY TO <br>
          SILENCE YOU 
        </strong></b>
    </h4>
</div>
</div>
<!-- end of media -->


<div class="row">

        <div class="col-md-12  " style="margin-top: 35px;">
        <h3> <b> Our Partners</b></h3>
            <div id="accordion">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                     KHRC 
                      </button>
                    </h5>
                  </div>
              
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                    Our mission is to foster human rights, democratic values, human dignity and social justice.

This will be achieved through multiple strategies and actions aimed at entrenching human rights and democratic values in the soceity by facilitating and supporting individuals, communities and groups to claim and defend their rights and holding state and non-state actors accountable for the protection and respect of all human rights for all peoples and groups.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        IPOA
                      </button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                    The IPOA Act mandates the Authority to undertake the following key functions: To investigate deaths and serious injuries caused by police action. To investigate police misconduct. To monitor, review and audit investigations and actions by internal affairs unit of the police..
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      AMNESTY INTERNATIONAL
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                    Amnesty International is an organization dedicated to securing human rights all over the world. For more than 50 years, AI has been a force for change organizing demonstrations, letter writing campaigns, awareness initiatives, vigils and more to end grave abuses and injustices inflicted on people every day.

AI proudly boasts more than 8 million supporters, members and activists in over 150 countries and territories. Their unwavering dedication allows us to truly make a difference in the lives of thousands of men, women and children.
                    </div>
                  </div>
                </div>
              </div>
        </div>
        </div>
         <!-- Site footer -->

</body>
