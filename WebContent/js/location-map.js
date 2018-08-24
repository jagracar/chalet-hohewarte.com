var addMapToDiv = function(id) {
    // Initialize the tile layers
    var OpenStreetMap_Mapnik = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom : 19,
        attribution : '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    
    var OpenMapSurfer_Roads = L.tileLayer('https://korona.geog.uni-heidelberg.de/tiles/roads/x={x}&y={y}&z={z}', {
        maxZoom: 20,
        attribution: 'Imagery from <a href="http://giscience.uni-hd.de/">GIScience Research Group @ University of Heidelberg</a>, Map data &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    
    var Esri_WorldImagery = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
        attribution: 'Tiles &copy; Esri &mdash; Source: Esri, i-cubed, USDA, USGS, AEX, GeoEye, Getmapping, Aerogrid, IGN, IGP, UPR-EGP, and the GIS User Community'
    });
    
    var OpenSnow = L.tileLayer('https://www.opensnowmap.org/pistes/{z}/{x}/{y}.png', {
        attribution : 'Ski pistes CC-BY-SA <a href="https://www.opensnowmap.org">www.opensnowmap.org</a>'
    });
    
    var Waymarkedtrails = L.tileLayer('https://tile.waymarkedtrails.org/hiking/{z}/{x}/{y}.png', {
	attribution : 'Hiking routes <a href="https://hiking.waymarkedtrails.org/help/legal">hiking.waymarkedtrails.org</a>'
    });
    
    // Define the list of layers and overlays to be displayed
    var baseMaps = {
        "Streets" : OpenMapSurfer_Roads,
        "Satellite": Esri_WorldImagery
    }
    
    var overlays = {
        "Ski resorts" : OpenSnow,
        "Hiking routes" : Waymarkedtrails
    };
    
    // Initialize the map
    var map = L.map(id, {
        center : [ 47.250457, 12.267034 ],
        zoom : 14,
        minZoom : 6,
    	maxZoom : 18
    });
    
    // Add the first layer to the map
    map.addLayer(baseMaps["Streets"]);
    map.addLayer(overlays["Ski resorts"]);
    
    // Add a marker indicating the chalet position
    var marker = L.marker([ 47.252809, 12.260797 ]);
    marker.bindPopup("Chalet Hohe Warte<br>(47.250457, 12.267034)");
    marker.addTo(map);
    marker.openPopup();
    
    // Add the layers controls to the map
    L.control.layers(baseMaps, overlays).addTo(map);
    
    // Add the scale controls to the map
    L.control.scale().addTo(map);
};

addMapToDiv("map-container");
