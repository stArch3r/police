<?php
?>
<div class="wrap">
    <html>
    <head>
<style>
    .geocoder {
        position: absolute;
        z-index: 1;
        width: 50%;
        left: 50%;
        margin-left: -25%;
        top: 10px;
    }
    .mapboxgl-ctrl-geocoder {
        min-width: 100%;
    }
    #map {
        margin-top: 75px;
    }
</style>
</head>
<body>

<div id="map"></div>
<div id="geocoder" class="geocoder"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoia2VubXVuZW5lIiwiYSI6ImNrbGFmaXpvYjBrdXUydnM4Y2wzeWFtaHUifQ.TYNHNVNrfF0OKuDQ58ulAw';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: [39.6682,4.0435 ],
        
        zoom: 6
    });
    new mapboxgl.Marker({
                color:"red"
              }).setLngLat([36.8219,1.2921 ]
              ).addTo(map);

    var geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl
    });

    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
</script>

</body>
</html>
</body>

</html>
</div>