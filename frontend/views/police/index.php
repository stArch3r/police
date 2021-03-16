<?php
/* @var $this yii\web\View */
?>
<div class="wrap">

<html lang="en">
  <head>
    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />    <script type="module" src="app.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
       <!--
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
       -->
  
    <title>jasiri</title>
    <style>
      #map{
          width:65vw;
          height: 70vh;
      }
  </style>
  </head>
  <section id="main-content">
  <body>
      <!-- content section -->
      <div class="row" style="margin-top: 20px;">
          <div class="col-md-8" style="margin-top: 10px;">
            <div id="map"></div>
            <script>
              mapboxgl.accessToken = 'pk.eyJ1Ijoia2VubXVuZW5lIiwiYSI6ImNrbGFmaXpvYjBrdXUydnM4Y2wzeWFtaHUifQ.TYNHNVNrfF0OKuDQ58ulAw';
              var map = new mapboxgl.Map({
                container: 'map',
                style: 'mapbox://styles/mapbox/streets-v11'
                
              });
              map.addControl(new mapboxgl.NavigationControl());
              new mapboxgl.Marker({
                color:"red"
              }).setLngLat([36.8219,1.2921 ]).addTo(map);
            </script>
            
          </div>
          <!-- table section -->
          <div class="col-md-4" style="margin-top: 10px;">
            <section class="panel">
                        <header class="panel-heading">
                            Area Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="graph-area-line"></div>
                        </div>
                    </section>


            
          </div>
      </div>
      <!-- incident report -->

      <div class="row">
        <div class="col-md-12 rir"> <b><strong>Incident Reports</strong></b> </div>
        <div class="col-sm-6 rir">
            <div class="card text-center">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title">Huruma</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <p>
                    porting text below as a natural lead-in to additional content
                  </p>
                 
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
        </div>
        <div class="col-sm-6 rir">
            <div class="card text-center">
                <div class="card-header">
                  Featured
                </div>
                <div class="card-body">
                  <h5 class="card-title">Kayole</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                 <p>
                    porting text below as a natural lead-in to additional content
                 </p>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
        </div>
        </div>
<!-- media -->
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
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                   Kenya Police serive 
                      </button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div>
              </div>
        </div>
        </div>
         <!-- Site footer -->
    <footer class="site-footer rir">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <p class="text-justify">Jasiri <i> Wants to help change </i> how the police serve and deligate their duties , police brutality isn't one of them</p>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Categories</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/category/c-language/">C</a></li>
                <li><a href="http://scanfcode.com/category/front-end-development/">reports</a></li>
                <li><a href="http://scanfcode.com/category/back-end-development/">data</a></li>
            
              </ul>
            </div>
  
            <div class="col-xs-6 col-md-3">
              <h6>Quick Links</h6>
              <ul class="footer-links">
                <li><a href="http://scanfcode.com/about/">About Us</a></li>
                <li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
                <li><a href="http://scanfcode.com/contribute-at-scanfcode/">report incident</a></li>
              </ul>
            </div>
          </div>
          <hr>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
              <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
           <a href="#">Jasiri</a>.
              </p>
            </div>
  
            <div class="col-md-4 col-sm-6 col-xs-12">
              <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
              </ul>
            </div>
          </div>
        </div>
            </section>
  </footer>
 </body>
</html>
</div>