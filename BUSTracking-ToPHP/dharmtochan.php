<!DOCTYPE html>
<html>
<head>
<title>Simple Leaflet Map</title>
<meta charset="utf-8" />
<!-- Leaflet CSS/js -->
<link rel="stylesheet" type="text/css" href="lib/leaflet/leaflet.css">
<link rel="stylesheet" type="text/css" href="leaflet-routing-machine.css">

</head>
<body>
	<div id="demo" style="width: 100%; height: 100vh"></div>
	<script type="text/javascript" src="lib/leaflet/leaflet.js"></script>
	<script type="text/javascript" src="leaflet-routing-machine.js"></script>


	<script>

		var map = L.map('demo').setView([-41.2858, 174.78682], 8);
		var mapLink =
		'<a href="http://openstreetmap.org">OpenStreetMap</a>';
		L.tileLayer(
		'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: 'Map data &copy; ' + mapLink,
		maxZoom: 18,
		}).addTo(map);

		var routing = L.Routing.control({
			waypoints: [
			L.latLng(32.2190,76.3234),
			L.latLng(30.7333,76.7794)
			]
		})
		routing.addTo(map);

	</script>
</body>