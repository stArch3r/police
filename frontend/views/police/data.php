<?php

?>


    <title>jasiri</title>
    <head>
    <script src="js/main.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      * {box-sizing: border-box;}
      
      body {
        margin: 2;
        padding: 2;
    
      }
      
      .topnav {
        overflow: hidden;
        background-color: #660c0c;
      }
      
      .topnav a {
        float: left;
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }
      
      .topnav a:hover {
        background-color: rgb(107, 48, 48);
        color: black;
      }
      
      .topnav a.active {
        background-color: #2196F3;
        color: white;
      }
      
      .topnav .search-container {
        float: right;
      }
      
      .topnav input[type=text] {
        padding: 6px;
        margin-top: 8px;
        font-size: 17px;
        border: none;
      }
      
      .topnav .search-container button {
        float: right;
        padding: 6px 10px;
        margin-top: 8px;
        margin-right: 16px;
        background: #ddd;
        font-size: 17px;
        border: none;
        cursor: pointer;
      }
      
      .topnav .search-container button:hover {
        background: rgb(236, 6, 6);
      }
      
      @media screen and (max-width: 600px) {
        .topnav .search-container {
          float: none;
        }
        .topnav a, .topnav input[type=text], .topnav .search-container button {
          float: none;
          display: block;
          text-align: left;
          width: 100%;
          margin: 0;
          padding: 14px;
        }
        .topnav input[type=text] {
          border: 1px solid rgb(117, 22, 22);  
        }
      }
      </style>
<style>

  
  #map{
        width: 70vw;
        height: 100vh;
  }
  #fit {
display: block;
position: relative;
margin: 0px auto;
width: 50%;
height: 40px;
padding: 10px;
border: none;
border-radius: 3px;
font-size: 12px;
text-align: center;
color: #fff;
background: #ee8a65;
  }
</style>
    </head>
   <body>

        <div class="row">
          <div class="col-sm-12">
           
           
          </div>
        <div class="col-sm-10">
          <div id="map"></div>
          <br>
<button id="fit">Fit to Kenya</button>
<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoia2VubXVuZW5lIiwiYSI6ImNrbGFmaXpvYjBrdXUydnM4Y2wzeWFtaHUifQ.TYNHNVNrfF0OKuDQ58ulAw';
var map = new mapboxgl.Map({
container: 'map',
style: 'mapbox://styles/mapbox/streets-v11',
center: [37.9062, 0.0236],
zoom: 9
});
 
document.getElementById('fit').addEventListener('click', function () {
map.fitBounds([
[32.958984, -5.353521],
[43.50585, 5.615985]
]);
});
map.addControl(new mapboxgl.NavigationControl());
              new mapboxgl.Marker({
                color:"red"
              }).setLngLat([36.8219,1.2921 ]
              ).addTo(map);
</script>
          
        </div>
        <div class="col-sm-2">
          <div class="row">
            <div class="col-sm-12">
              <i class="fas fa-file-contract fa-6x"></i>
            </div>
           
          </div>
          
        Reports
        <br>
        <h5>tracking police brutality cases since 2021</h5>
       </div>
</div>

</div>
      <!-- ===== IONICONS ===== -->
      <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
      
      <!-- ===== MAIN JS ===== -->
    
  </body>
</html>
     
 