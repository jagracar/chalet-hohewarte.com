var addMapToDiv = function(divId) {
	// Initialize the tile layers
	var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution : '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		maxZoom : 19
	});

	var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
		attribution : 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community',
		maxZoom : 19
	});

	var baseMaps = {
		"Streets" : OpenStreetMap_Mapnik,
		"Satellite" : Esri_WorldImagery
	};

	// Initialize the map
	var map = L.map(divId, {
		center : [ 47.250457, 12.267034 ],
		zoom : 14
	});

	// Initialize the layers controls and add them to the map
	var controls = L.control.layers(baseMaps);
	controls.addTo(map);

	// Add the Streets layer
	map.addLayer(OpenStreetMap_Mapnik);

	// Add a marker indicating the chalet position
	var marker = L.marker([ 47.252796, 12.260488 ]);
	marker.bindPopup("Chalet Hohe Warte");
	marker.addTo(map);
};

addMapToDiv("map-container");
