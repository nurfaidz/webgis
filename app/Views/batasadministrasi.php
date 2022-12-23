<?= $this->extend('home/index'); ?>
<?= $this->section('content'); ?>


<div class="card-body">
     <div id="map"></div>
</div>

<script>
     var map = L.map('map').setView([-6.449999999999932, 108.16667000000007], 11);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}', {
        attribution: 'peta Pertamina',
        maxZoom: 10,
        zoomControl: false,
        id: 'mapbox/streets-v11',
        tileSize: 512,

    }).addTo(map);
    var GoogleSatelliteHybrid = L.tileLayer('https://mt1.google.com/vt/lyrs=y&x={x}&y={y}&z={z}');


var OpenStreetMap_DE = L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png}');

var GoogleMaps = new
L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    opacity: 1.0,
    attribution: 'peta Pertamina'
}).addTo(map);

var GoogleRoads = new
L.TileLayer('https://mt1.google.com/vt/lyrs=h&x={x}&y={y}&z={z}', {
    opacity: 1.0,
    attribution: 'peta Pertamina'
});

    var baseLayers = {
        'Google Satellite Hybrid': GoogleSatelliteHybrid,
        'OpenStreetMap_DE': OpenStreetMap_DE,
        'GoogleMaps': GoogleMaps,
        'GoogleRoads': GoogleRoads
    };

    var overlayLayers = {}
    L.control.layers(baseLayers, overlayLayers, {
        collapsed: true
    }).addTo(map);


    L.geoJSON({
        "type": "FeatureCollection",
        "features": [<?= $vb; ?>]
     
    }, {
        style: vb
    }).addTo(map);

    // style
    var rt = {
        'weight': 3
    }
    var roads = {
        'color': 'red',
        'dashArray': '7',
        'weight': 6
    }
    var vb = {
        'color': 'black',
        'opacity': 1,
        'weight': 2,
        'fillColor': 'white',
        'fillOpacity': 0.5
    }



    

    

</script>






<?= $this->endSection(); ?>