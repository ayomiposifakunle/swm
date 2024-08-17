<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
</head>
<body>
    <p>mapbox map</p>
    <div id='map' style='width: 500px; height: 500px;'></div>


    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoicGhvcnN5IiwiYSI6ImNsenlqY3N2MzB4bnMybHI3cWRvbDJzODIifQ.Rr0r913FU_RgpxBCliTFHg';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    // center: [],
    // zoom: 9
  });
</script>
</body>
</html>