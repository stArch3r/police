<?php
use yii\data\ActiveDataProvider;
use sjaakp\locator\Locator;
/**
 * @var $dataProvider ActiveDataProvider
 */

?>


    <title>jasiri</title>
    <head>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js"></script>

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
style: 'mapbox://styles/mapbox/dark-v10',
center: [37.9062, 0.0236],
zoom: 3
});
 
map.on('load', function () {
// Add a new source from our GeoJSON data and
// set the 'cluster' option to true. GL-JS will
// add the point_count property to your source data.
map.addSource('county', {
type: 'geojson',
// Point to GeoJSON data. This example visualizes all M1.0+ earthquakes
// from 12/22/15 to 1/21/16 as logged by USGS' Earthquake hazards program.
data:
'/map/kenyan-counties.geojson',
cluster: true,
clusterMaxZoom: 14, // Max zoom to cluster points on
clusterRadius: 50 // Radius of each cluster when clustering points (defaults to 50)
});
 
map.addLayer({
id: 'clusters',
type: 'circle',
source: 'AREA',
filter: ['has', 'lat'],
paint: {
// Use step expressions (https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions-step)
// with three steps to implement three types of circles:
//   * Blue, 20px circles when point count is less than 100
//   * Yellow, 30px circles when point count is between 100 and 750
//   * Pink, 40px circles when point count is greater than or equal to 750
'circle-color': [
'step',
['get', 'PERIMETER'],
'#51bbd6',
100,
'#f1f075',
750,
'#f28cb1'
],
'circle-radius': [
'step',
['get', 'COUNTY3_ID'],
20,
100,
30,
750,
40
]
}
});
 
map.addLayer({
id: 'cluster-count',
type: 'symbol',
source: '',
filter: ['has', 'AREA'],
layout: {
'text-field': '{point_count_abbreviated}',
'text-font': ['DIN Offc Pro Medium', 'Arial Unicode MS Bold'],
'text-size': 12
}
});
 
map.addLayer({
id: 'unclustered-point',
type: 'circle',
source: 'geometry',
filter: ['!', ['has', 'Polygon']],
paint: {
'circle-color': '#11b4da',
'circle-radius': 4,
'circle-stroke-width': 1,
'circle-stroke-color': '#fff'
}
});
 
// inspect a cluster on click
map.on('click', 'clusters', function (e) {
var features = map.queryRenderedFeatures(e.point, {
layers: ['clusters']
});
var clusterId = features[0].properties.cluster_id;
map.getSource('kenyan-counties').getClusterExpansionZoom(
clusterId,
function (err, zoom) {
if (err) return;
 
map.easeTo({
center: features[0].geometry.coordinates,
zoom: zoom
});
}
);
});
 
// When a click event occurs on a feature in
// the unclustered-point layer, open a popup at
// the location of the feature, with
// description HTML from its properties.
map.on('click', 'unclustered-point', function (e) {
var coordinates = e.features[0].geometry.coordinates.slice();
var mag = e.features[0].properties.mag;
var county;
 
if (e.features[0].properties.tsunami === 1) {
county = 'yes';
} else {
county = 'no';
}
 
// Ensure that if the map is zoomed out such that
// multiple copies of the feature are visible, the
// popup appears over the copy being pointed to.
while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
}
 
new mapboxgl.Popup()
.setLngLat(coordinates)
.setHTML(
'magnitude: ' + mag + '<br>Was there a tsunami?: ' + tsunami
)
.addTo(map);
});
 
map.on('mouseenter', 'clusters', function () {
map.getCanvas().style.cursor = 'pointer';
});
map.on('mouseleave', 'clusters', function () {
map.getCanvas().style.cursor = '';
});
});
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
     
 