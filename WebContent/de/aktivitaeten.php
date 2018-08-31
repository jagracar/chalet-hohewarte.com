<?php
// General php variables
$homeDir = '../';
$page = 'aktivitaeten';
$keywords = 'Aktivitäten, Sommer, Winter';
$descriptionText = 'Aktivitäten Chalet Hohe Warte in Neukirchen am Großvenediger';
$titleText = 'Aktivitäten - Chalet Hohe Warte in Neukirchen am Großvenediger';
$alternative = 'activities.php';
$addLeaflet = true;
$addJQuery = false;
?>
<!DOCTYPE html>
<html lang="de">
<head>
<?php include_once 'head.php';?>
<script src="<?php echo $homeDir;?>js/location-map.js" async></script>
</head>

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
			</figure>
		</section>

		<section>
			<h3>Sommer</h3>

			<figure>
				<div id="summer-map-container" class="map-container"></div>
			</figure>
		</section>

		<script>
				window.onload = function() {
					addMapToDiv("winter-map-container", "winter");
					addMapToDiv("summer-map-container", "summer");
				};
		</script>
	</article>
	</main>

	<!-- Footer -->
<?php include_once 'footer.php';?>

</body>
</html>