<?php
	// General php variables
	$page = 'aktivitaeten';
	$homeDir = '../';
	$keywords = 'Aktivitäten, Sommer, Winter';
	$titleText = 'Aktivitäten - Chalet Hohe Warte in Neukirchen am Großvenediger';
	$descriptionText = 'Aktivitäten Chalet Hohe Warte in Neukirchen am Großvenediger';
	$alternative = 'activities.php';
?>

<!DOCTYPE html>
<html lang="de">
<?php include_once 'head.php';?>
<link rel="stylesheet" href="<?php echo $homeDir;?>css/leaflet/leaflet.css">

<body>
	<!-- Navigation bar -->
	<?php include_once 'navBar.php';?>

	<main class="main-container">
	<article class="content">
		<header>
			<h2>Aktivitäten</h2>
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
    		<h3>Sommer</h3>

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