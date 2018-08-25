var addMapToDiv = function(id, season) {
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
        attribution : 'Ski resorts CC-BY-SA <a href="https://www.opensnowmap.org">www.opensnowmap.org</a>'
    });
    
    var Waymarkedtrails_hiking = L.tileLayer('https://tile.waymarkedtrails.org/hiking/{z}/{x}/{y}.png', {
        attribution : 'Hiking routes <a href="https://hiking.waymarkedtrails.org/help/legal">hiking.waymarkedtrails.org</a>'
    });
    
    var Waymarkedtrails_cycling = L.tileLayer('https://tile.waymarkedtrails.org/cycling/{z}/{x}/{y}.png', {
        attribution : 'Cyling routes <a href="https://cycling.waymarkedtrails.org/help/legal">cycling.waymarkedtrails.org</a>'
    });
    
    var Waymarkedtrails_mtb = L.tileLayer('https://tile.waymarkedtrails.org/mtb/{z}/{x}/{y}.png', {
        attribution : 'Mountain bike routes <a href="https://mtb.waymarkedtrails.org/help/legal">mtb.waymarkedtrails.org</a>'
    });
    
    var Waymarkedtrails_slopes = L.tileLayer('https://tile.waymarkedtrails.org/slopes/{z}/{x}/{y}.png', {
        attribution : 'Winter slopes <a href="https://slopes.waymarkedtrails.org/help/legal">slopes.waymarkedtrails.org</a>'
    });
    
    // Define the list of layers and overlays to be displayed
    var baseMaps = {
        "Streets" : OpenStreetMap_Mapnik,
        "Satellite": Esri_WorldImagery
    }
    
    if (season == "summer") {
        var overlays = {
            "Hiking routes" : Waymarkedtrails_hiking,
            "Cycling routes" : Waymarkedtrails_cycling,
            "Mountain bike routes" : Waymarkedtrails_mtb
	    };
    } else if (season == "winter") {
        var overlays = {
            "Slopes" : OpenSnow
        };
    } else {
        var overlays = {};
    }
    
    // Initialize the map
    var map = L.map(id, {
        center : [ 47.250457, 12.267034 ],
        zoom : 14,
        minZoom : 6,
    	maxZoom : 19
    });
    
    // Add the first layer to the map
    map.addLayer(baseMaps["Streets"]);
    
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
