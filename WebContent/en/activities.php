<?php
	// General php variables
	$page = 'activities';
	$homeDir = '../';
	$alternative = 'aktivitaeten.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="National Park Chalet, Chalet Hohe Warte, Neukirchen am Großvenediger, holiday house, activities">
<meta name="description" content="Chalet Hohe Warte activities">
<meta name="author" content="Javier Gracia Carpio">

<link rel="icon" type="image/png" href="<?php echo $homeDir;?>favicon.png">
<link rel="alternate" hreflang="de" href="https://chalet-hohewarte.com/de/<?php echo $alternative;?>">

<!-- CSS files -->
<link rel="stylesheet" href="<?php echo $homeDir;?>css/styles.css">
<link rel="stylesheet" href="<?php echo $homeDir;?>css/leaflet/leaflet.css">

<title>Activities - Chalet Hohe Warte</title>

</head>

<body>
	<!-- Navigation bar -->
	<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Activities</h2>
		</header>
		
		<section>
    		<h3>Winter</h3>

    		<figure>
    			<div id="winter-map-container" class="map-container"></div>
    			<script src="<?php echo $homeDir;?>js/leaflet.js"></script>
    			<script src="<?php echo $homeDir;?>js/location-map.js"></script>
    			<script>addMapToDiv("winter-map-container", "winter");</script>
    		</figure>
		</section>

		<section>
    		<h3>Summer</h3>

    		<figure>
    			<div id="summer-map-container" class="map-container"></div>
    			<script src="<?php echo $homeDir;?>js/leaflet.js"></script>
    			<script src="<?php echo $homeDir;?>js/location-map.js"></script>
    			<script>addMapToDiv("summer-map-container", "summer");</script>
    		</figure>
		</section>
	</article>
	</main>

	<!-- Footer -->
	<?php include_once 'footer.php';?>

</body>
</html>